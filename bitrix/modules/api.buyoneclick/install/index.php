<?
use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);


class api_buyoneclick extends CModule
{
	var $MODULE_ID = 'api.buyoneclick';
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $strError  = '';

	var $INSTALL_PUBLIC_DATA_PATH = '/';

	function __construct()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__) . '/version.php');

		$this->MODULE_VERSION      = $arModuleVersion['VERSION'];
		$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		$this->MODULE_NAME         = GetMessage('api.buyoneclick_MODULE_NAME');
		$this->MODULE_DESCRIPTION  = GetMessage('api.buyoneclick_MODULE_DESC');

		$this->PARTNER_NAME        = GetMessage('api.buyoneclick_PARTNER_NAME');
		$this->PARTNER_URI         = GetMessage('api.buyoneclick_PARTNER_URI');
	}

	function InstallDB($arParams = array())
	{
		return true;
	}

	function UnInstallDB($arParams = array())
	{
		return true;
	}

	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles($arParams = array())
	{
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/components', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/components', true, true);

		return true;
	}

	function UnInstallFiles()
	{
		DeleteDirFilesEx('/bitrix/components/api/buyoneclick/');

		return true;
	}

	function DoInstall()
	{
		global $APPLICATION, $step;

		if(!$this->checkDependency()) {
			$APPLICATION->IncludeAdminFile(Loc::getMessage('ABOC_MODULE_NAME'), $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/error_dependency.php');

			return false;
		}

		if($step < 2) {
			$APPLICATION->IncludeAdminFile(Loc::getMessage('IBLOCK_INSTALL_TITLE'), $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/step1.php');
		}
		else {
			if($_REQUEST['ABOC_INSTALL_PUBLIC_DATA'] == 'Y') {
				if(strlen($_REQUEST['ABOC_INSTALL_PUBLIC_DATA_PATH']) > 0)
					$this->INSTALL_PUBLIC_DATA_PATH = trim($_REQUEST['ABOC_INSTALL_PUBLIC_DATA_PATH']);

				$this->InstallPublic();
			}
		}

		$this->InstallFiles();
		$this->InstallDB();
		RegisterModule($this->MODULE_ID);

		return true;
	}

	function DoUninstall()
	{
		global $APPLICATION;

		UnRegisterModule($this->MODULE_ID);
		$this->UnInstallDB();
		$this->UnInstallFiles();

		return true;
	}

	function checkDependency()
	{
		$info = CModule::CreateModuleObject('sale');

		if(!$info)
			return false;

		$bSaleValid     = version_compare($info->MODULE_VERSION, '16.00.00', '>=');
		$bSaleInstalled = \Bitrix\Main\ModuleManager::isModuleInstalled('sale');
		$bMainValid     = (defined('SM_VERSION') && version_compare(SM_VERSION, '16.00.00', '>='));


		return (bool)($bSaleValid && $bMainValid && $bSaleInstalled);
	}

	function InstallPublic()
	{
		$path_from = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/public';
		$path_to   = $_SERVER['DOCUMENT_ROOT'] . $this->INSTALL_PUBLIC_DATA_PATH;

		if(!file_exists($path_to . '/order/'))
			CopyDirFiles($path_from, $path_to, true, true);
	}
}

?>
