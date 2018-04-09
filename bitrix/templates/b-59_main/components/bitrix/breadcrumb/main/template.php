<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';

$strReturn = '<ul id="breadcrumbs-one">';
foreach ($arResult as $item) {
    $sClass = (empty($item['LINK']) ? 'current' : '');
    $strReturn .= "<li><a href='{$item['LINK']}' class='$sClass'>{$item['TITLE']}</a></li>";
}
$strReturn .= '</ul>';

return $strReturn;
?>
