<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?><div class="disk-mobile-player-container">
	<video preload="metadata"<?
if($arParams['HEIGHT'])
{
	?> style="max-height: <?=intval($arParams['HEIGHT']);?>px;"<?
}
if(isset($arParams['PLAYER_ID']))
{
	?> id="<?=htmlspecialcharsbx($arParams['PLAYER_ID']);?>"<?
}
?> poster="<?=htmlspecialcharsbx($arParams['PREVIEW']);?>"<?
?> controls controlsList="nodownload"><?
if($arParams['USE_PLAYLIST_AS_SOURCES'] === 'Y' && is_array($arParams['TRACKS']))
{
	foreach($arParams['TRACKS'] as $key => $source)
	{
		?>
		<source src="<?=htmlspecialcharsbx($source['src']);?>" type="<?=htmlspecialcharsbx($source['type']);?>"<?
		if($key == count($arParams['TRACKS']) - 1)
		{
			?> onerror="BX.onCustomEvent(this, 'MobilePlayer:onError', [this.parentNode, this.src]);"<?
		}
		?>><?
	}
}
else
{
	?>
	<source src="<?=htmlspecialcharsbx($arParams['PATH']);?>" type="<?=htmlspecialcharsbx($arParams['TYPE']);?>"
    onerror="BX.onCustomEvent(this, 'MobilePlayer:onError', [this.parentNode, this.src]);"
	><?
}
?>
	</video>
</div>