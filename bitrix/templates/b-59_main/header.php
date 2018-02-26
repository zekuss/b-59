<? use Bitrix\Main\Page\Asset; ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="ru"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" lang="ru"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="ru"> <![endif]-->
<!--[if gt IE 8]>
<html class="no-js ie9" lang="ru"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>

    <title><?=$APPLICATION->GetTitle()?></title>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/>
    <meta http-equiv="content-language" content="ru"/>
    <meta name="robots" content="index,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300,700,700italic,900' rel='stylesheet'
          type='text/css'>
    <script>
        if (navigator.userAgent.match(/Android/i)) {
            var viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
        }
        if (navigator.userAgent.match(/Android/i)) {
            window.scrollTo(0, 1);
        }
    </script>

    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/bootstrap.min.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/font.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/global.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("js/jquery/jquery.autocomplete.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/product_list.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blocksearch/blocksearch.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blockcontactinfos/blockcontactinfos.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/favoriteproducts/favoriteproducts.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/homefeatured/homefeatured.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blocknewsletter/blocknewsletter.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blocksupplier/blocksupplier.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blockwishlist/blockwishlist.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blocklink/blocklink.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/minicslider/views/js/plugins/nivo-slider/nivo-slider.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("modules/tmhtmlcontent/views/css/hooks.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/crossselling/crossselling.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/productscategory/productscategory.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("modules/sendtoafriend/sendtoafriend.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/productcomments/productcomments.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("modules/tmhtmlcontent2/views/css/hooks.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/modules/blocktopmenu/css/superfish-modified.css") ) ?>
    <? Asset::getInstance()->addCss( $APPLICATION->GetTemplatePath("css/responsive.css") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery-1.7.2.min.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery-migrate-1.2.1.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery.easing.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/tools.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("modules/carriercompare/carriercompare.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/tools/treeManagement.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery.autocomplete.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("modules/crossselling/js/crossselling.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery.scrollTo.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery.serialScroll.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/modules/productscategory/productscategory.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/modules/blocktopmenu/js/hoverIntent.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/modules/blocktopmenu/js/superfish-modified.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/bootstrap.min.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/mainscript.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.core-ui-select.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.scrollpane.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.uniform.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/plugins.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/footable.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.mousewheel.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.carouFredSel-6.2.1.js") ) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.touchSwipe.min.js") ) ?>
    <script type="text/javascript">
        var favorite_products_url_add = '/index.php?process=add&fc=module&module=favoriteproducts&controller=actions';
        var favorite_products_url_remove = '/index.php?process=remove&fc=module&module=favoriteproducts&controller=actions';

    </script>

    <? $APPLICATION->ShowHead() ?>

</head>
<? $APPLICATION->ShowPanel() ?>
<!--[if lt IE 9]>
<div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a
        href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
        src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42"
        width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/></a>
</div><![endif]-->
<body id="index" class="index lang_ru">
<div id="page" class="clearfix">
    <div class="page_wrapper_1 clearfix">
        <!-- Header -->
        <header id="header" class="container">
            <div id="header_right">
                <a id="header_logo" href="/" title="B-59">
                    <img class="logo" src="<?= $APPLICATION->GetTemplatePath("img/logo.png") ?>" alt="B-59" />
                </a>

                <!-- Block languages module -->
                <!-- /Block languages module -->
                <!-- Block permanent links module HEADER -->
                <section class="header-box blockpermanentlinks-header">
                    <ul id="header_links" class="hidden-xs">
                        <li id="header_link_contact"><a class="header_links_contact"
                                                        href="/contacts/"
                                                        title="Контакты"><i class="icon-envelope"></i>Контакты</a></li>
                        <li id="header_link_sitemap"><a class="header_links_sitemap"
                                                        href="/sitemap/"
                                                        title="Карта сайта"><i class="icon-sitemap"></i>Карта сайта</a>
                        </li>
                    </ul>

                    <div class="mobile-link-top header-button visible-xs">
                        <h4 class="icon_wrapp">
                            <span class="title-hed"></span><i
                                    class="arrow_header_top_menu arrow_header_top icon-reorder"></i>
                        </h4>
                        <ul id="mobilelink" class="list_header">
                            <li id="header_link_contact"><a class="header_links_contact"
                                                            href="/contacts/"
                                                            title="Контакты"><i class="icon-envelope"></i>Контакты</a>
                            </li>
                            <li id="header_link_sitemap"><a class="header_links_sitemap"
                                                            href="/sitemap/"
                                                            title="Карта сайта"><i class="icon-sitemap"></i>Карта сайта</a>
                            </li>

                        </ul>
                    </div>
                </section>
                <!-- /Block permanent links module HEADER -->

                <!-- block seach mobile -->
                <!-- Block search module TOP -->
                <section id="search_block_top" class="header-box">
                    <form method="get" action="/search/" id="searchbox">
                        <p class="clearfix">
                            <label for="search_query_top">Поиск</label>
                            <input type="hidden" name="controller" value="search"/>
                            <input type="hidden" name="orderby" value="position"/>
                            <input type="hidden" name="orderway" value="desc"/>
                            <input class="search_query ac_input" type="text" id="search_query_top" name="q" value=""/>
                            <a href="javascript:document.getElementById('searchbox').submit();"><i
                                        class="icon-search"></i><span>Поиск</span></a>

                        </p>
                    </form>
                </section>

                <!-- /Block search module TOP -->

                <!-- Block user information module HEADER -->
                <section class="blockuserinfo header-box">
                    <a href="/personal/" title="Вход" class="login"
                       rel="tooltip" data-placement="bottom" data-original-title="first tooltip"><span><i
                                    class="icon-lock"></i></span></a>
                </section>

                <section id="your_account"><a href="/personal/"
                                              title="Просмотреть мою учетную запись покупателя" rel="nofollow"><i
                                class="icon-user"></i> Ваша учетная запись</a></section>


                <section id="header_user" class="blockuserinfo-cart header-box ">
                    <div id="shopping_cart">
                        <a href="/personal/cart/" title="Просмотреть мою корзину"
                           rel="nofollow">
                            <i class="opancart icon-angle-down"></i>
                            <span class="shopping_cart_title">Корзина:</span>
                            <span class="ajax_cart_quantity" style="display:none">0</span>
                            <!--span class="ajax_cart_product_txt hidden">товар</span>
                            <span class="ajax_cart_product_txt_s hidden">товара</span-->

                            <span class="ajax_cart_no_product">(пусто)</span>
                        </a>
                    </div>
                </section>
                <div id="menu-wrap" class="clearfix desktop">
                    <div id="menu-trigger">Категории<i class="menu-icon icon-plus-sign-alt"></i></div>
                    <ul id="menu-custom">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "left",
                            Array(
                                "ROOT_MENU_TYPE" => "left",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                    0 => "SECTION_ID",
                                    1 => "page",
                                ),
                            )
                        ); ?>
                    </ul>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#menu-custom li:has(ul)').addClass('hasSub');
                    });
                </script>


                <!-- MODULE Block cart -->
                <section id="cart_block" class="block column_box exclusive">
                    <h4><span>Корзина</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
                    <div class="block_content toggle_content">
                        <!-- block summary -->
                        <div id="cart_block_summary" class="collapsed">
                            <span class="ajax_cart_quantity" style="display:none;">0</span>
                            <span class="ajax_cart_product_txt_s" style="display:none">товары</span>
                            <span class="ajax_cart_product_txt">товар</span>
                            <span class="ajax_cart_total" style="display:none">
					</span>
                            <span class="ajax_cart_no_product">(пусто)</span>
                        </div>
                        <!-- block list of products -->
                        <div id="cart_block_list" class="expanded">
                            <p class="cart_no_products" id="cart_block_no_products">Нет товаров</p>

                            <table id="vouchers" style="display:none;">
                                <tbody>
                                </tbody>
                            </table>
                            <div class="cart-prices">
                                <div class="cart-prices-block">
                                    <span id="cart_block_shipping_cost"
                                          class="price ajax_cart_shipping_cost">0,00 руб</span>
                                    <span>Доставка</span>
                                </div>
                                <div class="cart-prices-block">
                                    <span id="cart_block_total" class="price ajax_block_cart_total">0,00 руб</span>
                                    <span>Итого</span>
                                </div>
                            </div>
                            <p id="cart-buttons" class="">
                                <a href="/index.php?controller=order"
                                   class="button_mini btn btn-default" title="Посмотреть корзину"
                                   rel="nofollow">Корзина</a> <a href="/index.php?controller=order"
                                                                 id="button_order_cart"
                                                                 class="exclusive btn btn-default"
                                                                 title="Оформление заказа" rel="nofollow">Оформление
                                    заказа</a>
                            </p>
                        </div>
                    </div>
                </section>
                <!-- /MODULE Block cart -->
            </div>
        </header>
    </div>
    <div class="page_wrapper_2 clearfix">
        <div id="columns" class="container">
            <div class="row">
                <!-- Left -->
                <div id="left_column" class="col-xs-12 col-sm-3 column">
                    <!-- Block categories module -->
                    <section id="categories_block_left" class="column_box block">
                        <h4><span>Категории</span><i class="column_icon_toggle icon-plus-sign"></i></h4>
                        <ul class="toggle_content tree dhtml">

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "left",
                                Array(
                                    "ROOT_MENU_TYPE" => "left",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                        0 => "SECTION_ID",
                                        1 => "page",
                                    ),
                                )
                            ); ?>

                        </ul>

                        <script type="text/javascript">
                            // <![CDATA[
                            // we hide the tree only if JavaScript is activated
                            $('div#categories_block_left ul.dhtml').hide();
                            // ]]>
                        </script>
                    </section>
                    <!-- /Block categories module -->

                </div>
                <!-- Center -->
                <div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix">
	    
