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
$actualItem['CAN_BUY'] = $item['PRODUCT']['QUANTITY'] > 0;
?>

<div class="product-item">
    <a class="product-item-image-wrapper" href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $imgTitle ?>"
       data-entity="image-wrapper">
		<span class="product-item-image-slider-slide-container slide" id="<?= $itemIds['PICT_SLIDER'] ?>"
              style="display: <?= ($showSlider ? '' : 'none') ?>;"
              data-slider-interval="<?= $arParams['SLIDER_INTERVAL'] ?>" data-slider-wrap="true">
			<?
            if ($showSlider) {
                foreach ($morePhoto as $key => $photo) {
                    ?>
                    <span class="product-item-image-slide item <?= ($key == 0 ? 'active' : '') ?>"
                          style="background-image: url('<?= $photo['SRC'] ?>');">
					</span>
                    <?
                }
            }
            ?>
		</span>
        <span class="product-item-image-original" id="<?= $itemIds['PICT'] ?>"
              style="background-image: url('<?= $item['PREVIEW_PICTURE']['SRC'] ?>'); display: <?= ($showSlider ? 'none' : '') ?>;">
		</span>
        <?
        if ($item['SECOND_PICT']) {
            $bgImage = !empty($item['PREVIEW_PICTURE_SECOND']) ? $item['PREVIEW_PICTURE_SECOND']['SRC'] : $item['PREVIEW_PICTURE']['SRC'];
            ?>
            <span class="product-item-image-alternative" id="<?= $itemIds['SECOND_PICT'] ?>"
                  style="background-image: url('<?= $bgImage ?>'); display: <?= ($showSlider ? 'none' : '') ?>;">
			</span>
            <?
        }

        if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y') {
            ?>
            <div class="product-item-label-ring <?= $discountPositionClass ?>" id="<?= $itemIds['DSC_PERC'] ?>"
                 style="display: <?= ($price['PERCENT'] > 0 ? '' : 'none') ?>;">
                <span><?= -$price['PERCENT'] ?>%</span>
            </div>
            <?
        }

        if ($item['LABEL']) {
            ?>
            <div class="product-item-label-text <?= $labelPositionClass ?>" id="<?= $itemIds['STICKER_ID'] ?>">
                <?
                if (!empty($item['LABEL_ARRAY_VALUE'])) {
                    foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value) {
                        ?>
                        <div<?= (!isset($item['LABEL_PROP_MOBILE'][$code]) ? ' class="hidden-xs"' : '') ?>>
                            <span title="<?= $value ?>"><?= $value ?></span>
                        </div>
                        <?
                    }
                }
                ?>
            </div>
            <?
        }
        ?>
        <div class="product-item-image-slider-control-container" id="<?= $itemIds['PICT_SLIDER'] ?>_indicator"
             style="display: <?= ($showSlider ? '' : 'none') ?>;">
            <?
            if ($showSlider) {
                foreach ($morePhoto as $key => $photo) {
                    ?>
                    <div class="product-item-image-slider-control<?= ($key == 0 ? ' active' : '') ?>"
                         data-go-to="<?= $key ?>"></div>
                    <?
                }
            }
            ?>
        </div>
        <?
        if ($arParams['SLIDER_PROGRESS'] === 'Y') {
            ?>
            <div class="product-item-image-slider-progress-bar-container">
                <div class="product-item-image-slider-progress-bar" id="<?= $itemIds['PICT_SLIDER'] ?>_progress_bar"
                     style="width: 0;"></div>
            </div>
            <?
        }
        ?>
    </a>
    <h5>
        <a class="product_link" href="<?= $item['DETAIL_PAGE_URL'] ?>"
           title="<?= $productTitle ?>"><?= $productTitle ?></a>
    </h5>
    <p class="product_desc"><?= substr($item['PREVIEW_TEXT'], 0, 200) ?>...</p>
    <p class="product_desc mob"><?= substr($item['PREVIEW_TEXT'], 0, 100) ?>...</p>
    <p class="product_desc mob2"><?= substr($item['PREVIEW_TEXT'], 0, 200) ?>...</p>
    <?
    if (!empty($arParams['PRODUCT_BLOCKS_ORDER'])) { ?>
        <div class="product-item-info-container product-item-price-container" data-entity="price-block">
            <?
            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
                ?>
                <span class="product-item-price-old" id="<?= $itemIds['PRICE_OLD'] ?>"
                    <?= ($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '') ?>>
                    <?= $price['PRINT_RATIO_BASE_PRICE'] ?>
                </span>&nbsp;
                <?
            }
            ?>
            <span class="product-item-price-current price" id="<?= $itemIds['PRICE'] ?>">
                <span class="price"><?= $item['PRICES']['RETAIL']['PRINT_VALUE'] ?></span>
            </span>
        </div>
        <? if ($arParams['DISPLAY_COMPARE'] && (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')) { ?>
            <div class="product-item-compare-container">
                <div class="product-item-compare">
                    <div class="checkbox">
                        <label id="<?= $itemIds['COMPARE_LINK'] ?>">
                            <input type="checkbox" data-entity="compare-checkbox">
                            <span data-entity="compare-title"><?= $arParams['MESS_BTN_COMPARE'] ?></span>
                        </label>
                    </div>
                </div>
            </div>
        <? } ?>
        <div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
            <?
            if (!$haveOffers) {

                if ($actualItem['CAN_BUY']) {
                    ?>
                    <div class="product-item-button-container" id="<?= $itemIds['BASKET_ACTIONS'] ?>">
                        <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart"
                           id="<?= $itemIds['BUY_LINK'] ?>"
                           href="javascript:void(0)" rel="nofollow">
                            <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                        </a>
                    </div>
                    <?
                } else {
                    ?>
                    <div class="product-item-button-container">
                        <?
                        if ($showSubscribe) {
                            $APPLICATION->IncludeComponent(
                                'bitrix:catalog.product.subscribe',
                                '',
                                array(
                                    'PRODUCT_ID' => $actualItem['ID'],
                                    'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                    'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
                                    'DEFAULT_DISPLAY' => true,
                                    'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                                ),
                                $component,
                                array('HIDE_ICONS' => 'Y')
                            );
                        }
                        ?>
                        <a class="btn btn-link <?= $buttonSizeClass ?>"
                           id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                           rel="nofollow">
                            <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                        </a>
                    </div>
                    <?
                }
            } else {
                if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                    ?>
                    <div class="product-item-button-container">
                        <?
                        if ($showSubscribe) {
                            $APPLICATION->IncludeComponent(
                                'bitrix:catalog.product.subscribe',
                                '',
                                array(
                                    'PRODUCT_ID' => $item['ID'],
                                    'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                    'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
                                    'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
                                    'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                                ),
                                $component,
                                array('HIDE_ICONS' => 'Y')
                            );
                        }
                        ?>
                        <a class="btn btn-link <?= $buttonSizeClass ?>"
                           id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                           rel="nofollow"
                           style="display: <?= ($actualItem['CAN_BUY'] ? 'none' : '') ?>;">
                            <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                        </a>
                        <div id="<?= $itemIds['BASKET_ACTIONS'] ?>"
                             style="display: <?= ($actualItem['CAN_BUY'] ? '' : 'none') ?>;">
                            <a class="btn btn-default <?= $buttonSizeClass ?>"
                               id="<?= $itemIds['BUY_LINK'] ?>"
                               href="javascript:void(0)" rel="nofollow">
                                <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                            </a>
                        </div>
                    </div>
                    <?
                } else {
                    ?>
                    <div class="product-item-button-container">
                        <a class="btn btn-default <?= $buttonSizeClass ?>"
                           href="<?= $item['DETAIL_PAGE_URL'] ?>">
                            <?= $arParams['MESS_BTN_DETAIL'] ?>
                        </a>
                    </div>
                    <?
                }
            }
            ?>
        </div>
    <? } ?>
</div>