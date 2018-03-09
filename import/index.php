<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Импорт");
?><h1>Импорт товаров</h1>
<?

$IBLOCK_ID = 8;

function readFromCSV($src)
{
    if (($handle = fopen($src, "r")) !== FALSE) {
        $sSection = '';
        $arResult = array();
        while (($data = fgetcsv($handle, false, ";")) !== FALSE) {
            $pos = stripos($data[1], "00");
            if ($pos !== false && $pos == 0) {
                $sSection = strtoupper(iconv('cp1251', 'UTF-8', trim(str_replace('00', '', $data[1]))));
                continue;
            }
            if (empty($sSection)) continue;
            $arResult[$sSection][$data[0]]['SKU'] = trim($data[0]);
            $arResult[$sSection][$data[0]]['NAME'] = iconv('cp1251', 'UTF-8', trim($data[1]));
            $arResult[$sSection][$data[0]]['CODE'] = CUtil::translit($arResult[$sSection][$data[0]]['NAME'], 'ru', array("replace_space" => "-", "replace_other" => "-"));
            $arResult[$sSection][$data[0]]['QUANTITY'] = intval($data[2]);
            $arResult[$sSection][$data[0]]['PRICE'] = intval($data[3]);
            $arResult[$sSection][$data[0]]['DESCRIPTION'] = iconv('cp1251', 'UTF-8', trim($data[4]));
        }
        fclose($handle);
        return $arResult;
    }
}


if (!empty($_FILES['import'])) {
    $arr_file = Array(
        "name" => $_FILES['import']['name'],
        "size" => $_FILES['import']['size'],
        "tmp_name" => $_FILES['import']['tmp_name'],
        "type" => "",
        "old_file" => "",
        "del" => "Y",
        "MODULE_ID" => "iblock");
    $fid = CFile::SaveFile($arr_file, "import");

    if ($fid > 0) {
        $arFile = CFile::GetByID($fid)->fetch();

        $arCSV = readFromCSV($_SERVER['DOCUMENT_ROOT'] . '/upload/' . $arFile['SUBDIR'] . '/' . $arFile['FILE_NAME']);
    }

    $arFilter = Array(
        "ACTIVE" => "Y",
        "IBLOCK_ID" => $IBLOCK_ID,
        "SORT" => 500,
    );

    $arSection = array();
    $cbe = new CIBlockElement();
    $ccp = new CCatalogProduct();
    $cbs = new CIBlockSection();
    $cpr = new CPrice();
    $arImage = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"] . "/upload/no-photo.jpg");

    //Проверяем уже существующие записи
    foreach ($arCSV as $section => $arElements) {
        $sSectionCode = CUtil::translit($section, 'ru', array("replace_space" => "-", "replace_other" => "-"));
        $arSection = $cbs->GetList(array(), array('CODE' => $sSectionCode))->fetch();
        if (empty($arSection)) {
            $arFilter['NAME'] = $section;
            $arFilter['CODE'] = $sSectionCode;
            $arFilter['IBLOCK_SECTION_ID'] = 0;
            $arSection['ID'] = $cbs->Add($arFilter);
        }

        // Добавляем элементы
        foreach ($arElements as $iSKU => $arElement) {
            $arGetElement = $cbe->GetList(array(), array('CODE' => $arElement['CODE']))->fetch();

            if (empty($arGetElement)) {

                $PROP = array(
                    46 => $arElement['SKU'],
                );

                $arFilter['NAME'] = $arElement['NAME'];
                $arFilter['CODE'] = $arElement['CODE'];
                $arFilter['PREVIEW_TEXT'] = $arElement['DESCRIPTION'];
                $arFilter['DETAIL_TEXT'] = $arElement['DESCRIPTION'];
                $arFilter['DETAIL_PICTURE'] = $arImage;
                $arFilter['IBLOCK_SECTION_ID'] = $arSection['ID'];
                $arFilter['PROPERTY_VALUES'] = $PROP;
                $arGetElement['ID'] = $cbe->Add($arFilter);

//                 Добавляем цену
                $cpr->Add(array('PRODUCT_ID' => $arGetElement['ID'], 'CATALOG_GROUP_ID' => 3, 'PRICE' => $arElement['PRICE'], 'CURRENCY' => 'RUB'));
//                Добавляем товарный элемент
                $ccp->Add(array('ID' => $arGetElement['ID'], 'QUANTITY' => $arElement['QUANTITY']));
            } else {
                unset($arCSV[$section][$iSKU]);
            }

        }
    }
    ?>
    Добавлены следующие товары:
    <? Krumo::dump($arCSV) ?>
<? } else {
    ?>
    <form method="post" enctype='multipart/form-data'>
        <? echo CFile::InputFile("import", 20, 'inputFile'); ?>
        <input type="submit" class="btn btn-success" value="Сохранить">
    </form>
<? } ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>