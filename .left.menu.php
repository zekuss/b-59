<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "ID" => $_REQUEST["ID"],
        "IBLOCK_TYPE" => "xmlcatalog",
        "IBLOCK_ID" => "8",
        "SECTION_URL" => "/catalog/#SECTION_CODE#/",
        "DEPTH_LEVEL" => "2",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    )
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>