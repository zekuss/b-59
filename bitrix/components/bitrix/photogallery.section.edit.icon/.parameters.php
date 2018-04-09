<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockType = array();
$rsIBlockType = CIBlockType::GetList(array("sort"=>"asc"), array("ACTIVE"=>"Y"));
while ($arr=$rsIBlockType->Fetch())
{
	if($ar=CIBlockType::GetByIDLang($arr["ID"], LANGUAGE_ID))
	{
		$arIBlockType[$arr["ID"]] = "[".$arr["ID"]."] ".$ar["~NAME"];
	}
}

$arIBlock=array();
$rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));
while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}
if (empty($arCurrentValues["INDEX_URL"]) && !empty($arCurrentValues["SECTIONS_TOP_URL"]))
	$arCurrentValues["INDEX_URL"] = $arCurrentValues["SECTIONS_TOP_URL"]; 

$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y"),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"ADDITIONAL_VALUES" => "Y",
			"VALUES" => $arIBlock),
		"SECTION_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_SECTION_ID"),
			"TYPE" => "STRING",
			"DEFAULT" => '={$_REQUEST["SECTION_ID"]}'),
		"SECTION_CODE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_SECTION_CODE"),
			"TYPE" => "STRING",
			"DEFAULT" => ''),
		"USER_ALIAS" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("P_USER_ALIAS"),
			"TYPE" => "STRING",
			"DEFAULT" => ''),
		"BEHAVIOUR" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("P_BEHAVIOUR"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
			"REFRESH" => "Y"),

		"ELEMENT_SORT_FIELD" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_ELEMENT_SORT_FIELD"),
			"TYPE" => "STRING",
			"DEFAULT" => 'ID'),
		"ELEMENT_SORT_ORDER" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_ELEMENT_SORT_ORDER"),
			"TYPE" => "STRING",
			"DEFAULT" => 'ASC'),
		
		"INDEX_URL" => array(
			"PARENT" => "URL_TEMPLATES",
			"NAME" => GetMessage("IBLOCK_INDEX_URL"),
			"TYPE" => "STRING",
			"DEFAULT" => "index.php"),
		"SECTION_URL" => array(
			"PARENT" => "URL_TEMPLATES",
			"NAME" => GetMessage("IBLOCK_SECTION_URL"),
			"TYPE" => "STRING",
			"DEFAULT" => "section.php?".($arCurrentValues["BEHAVIOUR"] == "USER" ? "USER_ALIAS=#USER_ALIAS#" : "")."SECTION_ID=#SECTION_ID#"),
		
		"ALBUM_PHOTO_WIDTH" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("P_ALBUM_PHOTO_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "200"),
		"ALBUM_PHOTO_THUMBS_WIDTH" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("P_ALBUM_PHOTO_THUMBS_WIDTH"),
			"TYPE" => "STRING",
			"DEFAULT" => "200"),
		"SET_STATUS_404" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("P_SET_STATUS_404"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N"),
		
		"SET_TITLE" => array(),
		// "DISPLAY_PANEL" => Array(
			// "PARENT" => "ADDITIONAL_SETTINGS",
			// "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PANEL"),
			// "TYPE" => "CHECKBOX",
			// "DEFAULT" => "N"),
	),
);

if ($arCurrentValues["BEHAVIOUR"] == "USER")
{
	$arComponentParameters["PARAMETERS"]["GALLERY_URL"] = array(
			"PARENT" => "URL_TEMPLATES",
			"NAME" => GetMessage("IBLOCK_GALLERY_URL"),
			"TYPE" => "STRING",
			"DEFAULT" => "gallery.php?USER_ALIAS=#USER_ALIAS#");
}
?>