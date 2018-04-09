<?
/** @var CMain $APPLICATION */
use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$APPLICATION->SetTitle(Loc::getMessage('ABOC_INSTALL_PUBLIC_TITLE'));

if(!check_bitrix_sessid())
	return Loc::getMessage('ABOC_INSTALL_STEP1_SESS_EXPIRED');

$publicPath = (strlen($_REQUEST['ABOC_INSTALL_PUBLIC_DATA_PATH']) > 0 ? trim($_REQUEST['ABOC_INSTALL_PUBLIC_DATA_PATH']) : '/');
?>
<hr>
<?
echo BeginNote();
echo Loc::getMessage('ABOC_INSTALL_PUBLIC_TEXT');
echo EndNote();
?>
<form action="<?=POST_FORM_ACTION_URI?>" method="post">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="lang" value="<?=LANG?>">
	<input type="hidden" name="id" value="api.buyoneclick">
	<input type="hidden" name="install" value="Y">
	<input type="hidden" name="step" value="2">
	<fieldset>
		<legend><?=Loc::getMessage('ABOC_INSTALL_PUBLIC_TITLE')?></legend>
		<p>
			<input type="hidden" name="ABOC_INSTALL_PUBLIC_DATA" value="N">
			<input type="checkbox" name="ABOC_INSTALL_PUBLIC_DATA" value="Y" style="vertical-align:middle">
			<?=Loc::getMessage('ABOC_INSTALL_PUBLIC_DATA')?>
		</p>
		<p>
			<?=Loc::getMessage('ABOC_INSTALL_PUBLIC_DATA_PATH')?><br>
			<input type="text" name="ABOC_INSTALL_PUBLIC_DATA_PATH" value="<?=$publicPath?>" size="60" style="margin-top:5px">
		</p>
		<input type="submit" name="inst" value="<?=Loc::getMessage('ABOC_INSTALL_BUTTON_TEXT')?>">
	</fieldset>

</form>
