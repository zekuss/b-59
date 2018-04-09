<?
/**
 * Малая корзина
 */
/** @var integer $iCount - количество позиций */
$iCount = count($arResult['GRID']['ROWS']);
?>
<div id="small-basket">
    <section id="header_user" class="blockuserinfo-cart header-box ">
        <div id="shopping_cart" class="toggle-href" data-toggle="cart_block">
            <a href="#" title="Просмотреть мою корзину"
               rel="nofollow"   >
                <i class="opancart icon-angle-down"></i>
                <span class="shopping_cart_title">Корзина:</span>
                <? if ($iCount == 0) { ?>
                    <span class="ajax_cart_no_product">(пусто)</span>
                <? } else { ?>
                    <span class="ajax_cart_quantity"><?= $iCount ?></span>
                    <? if ($iCount == 1): ?>
                        <span class="ajax_cart_product_txt">товар</span>
                    <? else: ?>
                        <span class="ajax_cart_product_txt_s">товара</span>
                    <? endif; ?>
                <? } ?>
            </a>
        </div>
        <!-- MODULE Block cart -->
        <section id="cart_block" class="block column_box exclusive" style="display: none;" >
            <div class="block_content">
                <!-- block list of products -->
                <div id="cart_block_list">
                    <? if (!$iCount): ?>
                        <p class="cart_no_products" id="cart_block_no_products">Нет товаров</p>
                    <? else: ?>
                        <div class="cart-prices">
                            <? foreach ($arResult['GRID']['ROWS'] as $ROW): ?>
                                <div class="cart-prices-block">
                                    (<?= $ROW['QUANTITY'] ?>) <a
                                            href="<?= $ROW['DETAIL_PAGE_URL'] ?>"><?= $ROW['NAME'] ?></a>
                                    <span id="cart_block_shipping_cost"
                                          class="price ajax_cart_shipping_cost"><?= $ROW['SUM_FULL_PRICE_FORMATED'] ?></span>
                                </div>
                            <? endforeach ?>

                            <div class="cart-prices-block">
                                <span id="cart_block_total"
                                      class="price ajax_block_cart_total"><?= $arResult['allSum_FORMATED'] ?></span>
                                <span>Итого</span>
                            </div>
                        </div>
                    <? endif ?>
                    <p id="cart-buttons" class="">
                        <a href="<?= $arParams['PATH_TO_BASKET'] ?>"
                           class="button_mini btn btn-default" title="Посмотреть корзину"
                           rel="nofollow">Корзина</a> <a href="<?= $arParams['PATH_TO_ORDER'] ?>"
                                                         id="button_order_cart"
                                                         class="exclusive btn btn-default"
                                                         title="Оформление заказа" rel="nofollow">
                            Оформление заказа</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- /MODULE Block cart -->
    </section>
</div>

<script>
    $(document).ready(function () {
        $('.toggle-href').click(function () {
            var id = '#' + jQuery(this).data('toggle');
            $(id).slideToggle('');
        });
    });
</script>

