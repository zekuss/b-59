<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
    'ID' => $strMainID,
    'PICT' => $strMainID.'_pict',
    'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
    'STICKER_ID' => $strMainID.'_sticker',
    'BIG_SLIDER_ID' => $strMainID.'_big_slider',
    'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
    'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
    'SLIDER_LIST' => $strMainID.'_slider_list',
    'SLIDER_LEFT' => $strMainID.'_slider_left',
    'SLIDER_RIGHT' => $strMainID.'_slider_right',
    'OLD_PRICE' => $strMainID.'_old_price',
    'PRICE' => $strMainID.'_price',
    'DISCOUNT_PRICE' => $strMainID.'_price_discount',
    'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
    'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
    'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
    'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
    'QUANTITY' => $strMainID.'_quantity',
    'QUANTITY_DOWN' => $strMainID.'_quant_down',
    'QUANTITY_UP' => $strMainID.'_quant_up',
    'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
    'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
    'BASIS_PRICE' => $strMainID.'_basis_price',
    'BUY_LINK' => $strMainID.'_buy_link',
    'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
    'BASKET_ACTIONS' => $strMainID.'_basket_actions',
    'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
    'COMPARE_LINK' => $strMainID.'_compare_link',
    'PROP' => $strMainID.'_prop_',
    'PROP_DIV' => $strMainID.'_skudiv',
    'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
    'OFFER_GROUP' => $strMainID.'_set_group_',
    'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);

?>

<div class="inner_content clearfix">
    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $imgTitle ?>">
        <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $imgTitle ?>" title="<?= $imgTitle ?>"/>
    </a>
    <div class="center_block">
        <div class="new-box"><span class="before"></span>
            <span class="after"></span>
            <?
            if (!empty($item['LABEL_ARRAY_VALUE'])) {
                foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value) {
                    ?>
                    <span class="new"><?= $value ?></span>
                    <?
                }
            }
            ?>

        </div>
        <div class="clear"></div>
        <h5>
            <a class="product_link"
               href="<?= $item['DETAIL_PAGE_URL'] ?>"
               title="<?= $productTitle ?>"><?= $productTitle ?>
            </a>
        </h5>
        <p class="product_desc"><?= substr($item['PREVIEW_TEXT'], 0, 200) ?>...</p>
        <p class="product_desc mob"><?= substr($item['PREVIEW_TEXT'], 0, 100) ?>...</p>
        <p class="product_desc mob2"><?= substr($item['PREVIEW_TEXT'], 0, 200) ?>...</p>
    </div>
    <p class="right_block">
        <span class="price"><?= ($item['PRODUCT']['QUANTITY'] > 0) ? $item['PRICES']['RETAIL']['PRINT_VALUE'] : Loc::GetMessage('CT_BCT_TPL_MESS_PRODUCT_NOT_AVAILABLE') ?></span>


        <? if ($arParams['DISPLAY_COMPARE']) {?>

                <div class="product-item-compare">
                    <div class="checkbox">
                        <label id="<?= $itemIds['COMPARE_LINK'] ?>">
                            <input type="checkbox" data-entity="compare-checkbox">
                            <span data-entity="compare-title"><?= Loc::GetMessage('CT_BCT_TPL_MESS_PRODUCT_COMPARE_ADD') ?></span>
                        </label>
                    </div>
                </div>
        <?}?>
    <div class="clear noneclass"></div>
    <? if ($item['PRODUCT']['QUANTITY'] > 0): ?>
    <div id="<?=$itemIds['BASKET_ACTIONS']?>">
        <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart "
           id="<?=$itemIds['BUY_LINK']?>"
           href="javascript:void(0)"
           rel="nofollow"
           title="<?= Loc::GetMessage('CT_BCT_TPL_MESS_PRODUCT_ADD_TO_CART') ?>">
            <span><?= Loc::GetMessage('CT_BCT_TPL_MESS_PRODUCT_ADD_TO_CART') ?></span>
        </a>
    </div>
    <? else: ?>
        <a class="btn btn-default button product-item-btn-show-more"
           href="<?= $item['DETAIL_PAGE_URL'] ?>"
           title="<?= Loc::GetMessage('CT_BCT_TPL_MESS_PRODUCT_SHOW_DETAIL') ?>">
            <?= Loc::GetMessage('CT_BCT_TPL_MESS_PRODUCT_SHOW_DETAIL') ?>
        </a>
    <? endif; ?>
</div>
