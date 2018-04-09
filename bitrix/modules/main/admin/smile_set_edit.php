<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");

IncludeModuleLangFile(__FILE__);

if(!$USER->CanDoOperation('edit_other_settings'))
	$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));

if (!isset($_REQUEST['GALLERY_ID']))
{
	LocalRedirect("smile_gallery.php?lang=".LANG);
}

$ID = intval($_REQUEST["ID"]);
$parentId = intval($_REQUEST['GALLERY_ID']);
$arError = $arSmileSet = $arFields = $arLang = array();

/* LANGS */
$arLangTitle = array("reference_id" => array(), "reference" => array());
$db_res = CLanguage::GetList($b="sort", $o="asc");
while ($res = $db_res->GetNext(true, false))
{
	$arLang[$res["LID"]] = $res;
	$arLangTitle["reference_id"][] = $res["LID"];
	$arLangTitle["reference"][] = $res["NAME"];
}

$bInitVars = false;
$APPLICATION->SetTitle($ID > 0 ? GetMessage("SMILE_EDIT_RECORD") : GetMessage("SMILE_NEW_RECORD"));

$fileName = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && (strlen($save) > 0 || strlen($apply) > 0))
{
	if (isset($_FILES["IMAGE"]["name"]))
		$fileName = RemoveScriptExtension($_FILES["IMAGE"]["name"]);

	if (!check_bitrix_sessid())
	{
		$arError[] = array(
			"id" => "bad_sessid",
			"text" => GetMessage("ERROR_BAD_SESSID"));
	}

	if (empty($arError))
	{
		$GLOBALS["APPLICATION"]->ResetException();

		$arSmileSet = CSmileSet::getById($ID);

		$arFields = array(
			"STRING_ID" => $_REQUEST["STRING_ID"],
			"SORT" => $_REQUEST["SORT"],
			"PARENT_ID" => $parentId,
			"LANG" => array()
		);

		if (in_array($arSmileSet["STRING_ID"], Array('bitrix_main')))
		{
			unset($arFields['STRING_ID']);
		}

		foreach ($arLang as $key => $val)
			$arFields["LANG"][$key] = $_REQUEST["NAME"][$key];

		if ($ID > 0)
		{
			CSmileSet::update($ID, $arFields);
		}
		else
		{
			$ID = CSmileSet::add($arFields);
		}

		if ($e = $GLOBALS["APPLICATION"]->GetException())
		{
			$arError[] = array(
				"id" => "",
				"text" => $e->getString()
			);
		}
		else
		{
			LocalRedirect(
				isset($_REQUEST['IMPORT'])?
				"smile_import.php?lang=".LANG."&SET_ID=".$ID :
				(strlen($save) > 0 ?
					"smile_set.php?GALLERY_ID=".$parentId."&lang=".LANG."&".GetFilterParams("filter_", false) :
					"smile_set_edit.php?GALLERY_ID=".$parentId."&lang=".LANG."&ID=".$ID."&".GetFilterParams("filter_", false)));
		}
	}
	$e = new CAdminException($arError);
	$message = new CAdminMessage(($ID > 0 ? GetMessage("ERROR_EDIT_SMILE") : GetMessage("ERROR_ADD_SMILE")), $e);
	$bInitVars = true;
}

if ($bInitVars && !empty($arFields))
{
	if (isset($arFields['NAME']))
		foreach ($arFields['NAME'] as $key => $value)
			$arFields['NAME'][htmlspecialcharsbx($key)] = htmlspecialcharsbx($value);

	$arSmileSet = array(
		"SORT" => isset($arFields['SORT'])? intval($arFields['SORT']): 300,
		"STRING_ID" => isset($arFields['STRING_ID'])? htmlspecialcharsbx($arFields['STRING_ID']): "",
		"NAME" => isset($arFields['NAME'])? $arFields['NAME']: array(),
		"PARENT_ID" => isset($arFields['GALLERY_ID'])? $arFields['GALLERY_ID']: 0
	);
}
elseif ($ID > 0)
{
	$arSmileSet = CSmileSet::getById($ID, CSmileSet::GET_ALL_LANGUAGE);
}
else 
{
	if (isset($_REQUEST['NAME']))
		foreach ($_REQUEST['NAME'] as $key => $value)
			$_REQUEST['NAME'][htmlspecialcharsbx($key)] = htmlspecialcharsbx($value);

	$arSmileSet = array(
		"SORT" => isset($_REQUEST['SORT'])? intval($_REQUEST['SORT']): 300,
		"STRING_ID" => isset($_REQUEST['STRING_ID'])? htmlspecialcharsbx($_REQUEST['STRING_ID']): "",
		"NAME" => isset($_REQUEST['NAME'])? $_REQUEST['NAME']: array(),
		"PARENT_ID" => isset($_REQUEST['GALLERY_ID'])? $parentId : 0
	);
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

$aMenu = array(
	array(
		"TEXT" => GetMessage("SMILE_BTN_BACK"),
		"LINK" => "/bitrix/admin/smile_set.php?GALLERY_ID=".$arSmileSet['PARENT_ID']."&lang=".LANG."&".GetFilterParams("filter_", false),
		"ICON" => "btn_list",
	)
);

if ($ID > 0)
{
	$aMenu[] = array("SEPARATOR" => "Y");

	$aMenu[] = array(
		"TEXT" => GetMessage("SMILE_BTN_NEW"),
		"LINK" => "/bitrix/admin/smile_set_edit.php?GALLERY_ID=".$arSmileSet['PARENT_ID']."&lang=".LANG."&".GetFilterParams("filter_", false),
		"ICON" => "btn_new",
	);
	if (!in_array($arSmileSet["STRING_ID"], Array('bitrix_main')))
	{
		$aMenu[] = array(
			"TEXT" => GetMessage("SMILE_BTN_DELETE"),
			"LINK" => "javascript:if(confirm('".GetMessage("SMILE_BTN_DELETE_CONFIRM")."')) window.location='/bitrix/admin/smile_set.php?GALLERY_ID=".$arSmileSet['PARENT_ID']."&action=delete&ID[]=".$ID."&lang=".LANG."&".bitrix_sessid_get()."#tb';",
			"ICON" => "btn_delete",
		);
	}
}

$context = new CAdminContextMenu($aMenu);
$context->Show();
if (isset($message) && $message)
	echo $message->Show();

?>
	<form method="POST" action="<?=$APPLICATION->GetCurPageParam()?>" name="smile_set_edit" enctype="multipart/form-data">
	<input type="hidden" name="Update" value="Y" />
	<input type="hidden" name="GALLERY_ID" value="<?=$parentId?>" />
	<input type="hidden" name="lang" value="<?=LANG?>" />
	<input type="hidden" name="ID" value="<?=$ID?>" />
	<?=bitrix_sessid_post()?>
<?
	$aTabs = array(
		array("DIV" => "edit1", "TAB" => GetMessage("SMILE_TAB_SMILE"), "ICON" => "smile", "TITLE" => GetMessage("SMILE_TAB_SMILE_DESCR"))
	);
$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();

$tabControl->BeginNextTab();
?>
	<tr class="heading">
		<td colspan="2"><?=GetMessage("SMILE_IMAGE_NAME")?></td>
	</tr>
	<?foreach ($arLang as $key => $val):?>
	<tr>
		<td><? $word = GetMessage('SMILE_IMAGE_NAME_'.strtoupper($key)); if (strlen($word) > 0) { echo $word; } else { echo $val["NAME"]; }?>:</td>
		<td><input type="text" name="NAME[<?=$key?>]" value="<?=$arSmileSet["NAME"][$key]?>" size="40" /></td>
	</tr>
	<?endforeach;?>
	<tr class="heading">
		<td colspan="2"><?=GetMessage("SMILE_IMAGE_PARAMS")?></td>
	</tr>
	<tr>
		<td width="40%"><?=GetMessage("SMILE_SORT")?>:</td>
		<td width="60%">
			<input type="text" name="SORT" value="<?=$arSmileSet["SORT"]?>" size="10" />
		</td>
	</tr>
	<?if (!in_array($arSmileSet["STRING_ID"], Array('bitrix_main'))):?>
	<tr>
		<td width="40%"><?=GetMessage("SMILE_STRING_ID")?>:</td>
		<td width="60%">
			<input type="text" name="STRING_ID" value="<?=$arSmileSet["STRING_ID"]?>" size="40" />
		</td>
	</tr>
	<?endif;?>
	<?
	if ($ID > 0):
		$arSmiles = CSmile::getList(Array(
			'SELECT' => Array('SET_ID', 'NAME', 'TYPE', 'IMAGE', 'IMAGE_WIDTH', 'IMAGE_HEIGHT'),
			'FILTER' => Array('SET_ID' => $ID),
			'ORDER' => array($by => $order),
			'NAV_PARAMS' => array("nTopCount"=>5),
		));
		if (count($arSmiles) > 0):?>
		<tr>
			<td><?=GetMessage("SMILE_SMILE_EXAMPLE")?>:</td>
			<td>
				<?foreach($arSmiles as $smile):?>
					<img src="<?=($smile['TYPE'] == CSmile::TYPE_ICON? CSmile::PATH_TO_ICON: CSmile::PATH_TO_SMILE).$smile['SET_ID']."/".$smile['IMAGE'];?>" border="0" width="<?=$smile['IMAGE_WIDTH']?>" height="<?=$smile['IMAGE_HEIGHT']?>" title="<?=$smile['NAME']?>" style="vertical-align: text-top">
				<?endforeach;?>
				&nbsp;<a href="smile.php?SET_ID=<?=$ID?>&lang=<?=LANG?>"><?=GetMessage('SMILE_SMILE_EXAMPLE_LINK')?></a>
			</td>
		</tr>
		<?endif;?>
	<?else:?>
	<tr>
		<td width="40%"><?=GetMessage("SMILE_IMPORT")?>:</td>
		<td width="60%">
			<input type="checkbox" name="IMPORT" value="Y" />
		</td>
	</tr>
	<?endif;?>
<?
$tabControl->EndTab();

$tabControl->Buttons(array(
	"back_url" => "/bitrix/admin/smile_set.php?lang=".LANG."&".GetFilterParams("filter_", false)));
?>
</form>
<?
$tabControl->End();
$tabControl->ShowWarnings("smile_set_edit", $message);
?>
<?require($DOCUMENT_ROOT."/bitrix/modules/main/include/epilog_admin.php");?>
