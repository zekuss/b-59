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

    <title><?= $APPLICATION->GetTitle() ?></title>
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

    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("vendors/bootstrap/vendor/twbs/bootstrap/dist/css/bootstrap.min.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/font.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/global.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("js/jquery/jquery.autocomplete.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/product_list.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blocksearch/blocksearch.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blockcontactinfos/blockcontactinfos.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/favoriteproducts/favoriteproducts.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/homefeatured/homefeatured.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blocknewsletter/blocknewsletter.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blocksupplier/blocksupplier.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blockwishlist/blockwishlist.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blocklink/blocklink.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/minicslider/views/js/plugins/nivo-slider/nivo-slider.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("modules/tmhtmlcontent/views/css/hooks.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/crossselling/crossselling.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/productscategory/productscategory.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("modules/sendtoafriend/sendtoafriend.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/productcomments/productcomments.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("modules/tmhtmlcontent2/views/css/hooks.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/modules/blocktopmenu/css/superfish-modified.css")) ?>
    <? Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("css/responsive.css")) ?>


    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery-2.1.3.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/jquery/jquery-migrate-1.2.1.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("vendors/bootstrap/vendor/twbs/bootstrap/assets/js/vendor/popper.min.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("vendors/bootstrap/vendor/twbs/bootstrap/dist/js/bootstrap.min.js")) ?>
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

    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/mainscript.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.core-ui-select.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.scrollpane.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.uniform.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/plugins.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/footable.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.mousewheel.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.carouFredSel-6.2.1.js")) ?>
    <? Asset::getInstance()->addJs($APPLICATION->GetTemplatePath("js/source/jquery.touchSwipe.min.js")) ?>


    <? require_once ($_SERVER['DOCUMENT_ROOT'] . $APPLICATION->GetTemplatePath("vendors/krumo-0.4/class.krumo.php")); krumo::$skin = 'blue'; ?>


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
                    <img class="logo" src="<?= $APPLICATION->GetTemplatePath("img/logo.png") ?>" alt="B-59"/>
                </a>

                <!-- Block languages module -->
                <!-- /Block languages module -->
                <!-- Block permanent links module HEADER -->
                <section class="header-box blockpermanentlinks-header">
                    <ul id="header_links" class="hidden-xs">
                        <li id="header_link_contact"><a class="header_links_contact"
                                                        href="/contacts/"
                                                        title="Контакты" rel="tooltip"><i class="icon-envelope"></i>Контакты</a></li>
                        <li id="header_link_sitemap"><a class="header_links_sitemap"
                                                        href="/sitemap/"
                                                        title="Ремонт ПК" rel="tooltip"><i class="icon-wrench"></i>Ремонт</a>
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
                <? if (!$USER->IsAuthorized()) : ?>
                    <section class="blockuserinfo header-box">
                        <a href="#" title="Вход" class="login"
                           rel="tooltip" data-placement="bottom" data-original-title="first tooltip" data-toggle="modal"
                           data-target="#authModal"><span><i
                                        class="icon-lock"></i></span></a>
                    </section>
                    <!-- Modal -->
                    <div class="modal fade" id="authModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:system.auth.form",
                                        "main",
                                        Array(
                                            "FORGOT_PASSWORD_URL" => "/personal/profile/",
                                            "PROFILE_URL" => "/personal/profile/",
                                            "REGISTER_URL" => "/personal/profile/",
                                            "SHOW_ERRORS" => "N"
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                <? else: ?>
                    <section class="blockuserinfo header-box">
                        <a href="?logout=yes" title="Выход" class="login"
                           rel="tooltip" data-placement="bottom" data-original-title="first tooltip" ><span><i
                                        class="icon-lock"></i></span></a>
                    </section>
                    <section id="your_account">
                        <? $APPLICATION->IncludeComponent("bitrix:main.user.link", "main", Array(
                            "CACHE_TIME" => "7200",    // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "ID" => $USER->GetID(),    // Идентификатор пользователя
                            "NAME_TEMPLATE" => "",    // Отображение имени
                            "SHOW_LOGIN" => "Y",    // Показывать логин, если не задано имя
                            "USE_THUMBNAIL_LIST" => "N",    // Отображать личное фото в списке
                        ),
                            false
                        ); ?>
                    </section>
                <? endif; ?>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket",
                    "small",
                    Array(
                        "ACTION_VARIABLE" => "basketAction",
                        "ADDITIONAL_PICT_PROP_8" => "-",
                        "AUTO_CALCULATION" => "Y",
                        "BASKET_IMAGES_SCALING" => "adaptive",
                        "COLUMNS_LIST_EXT" => array(0=>"PREVIEW_PICTURE",1=>"DISCOUNT",2=>"DELETE",3=>"DELAY",4=>"TYPE",5=>"SUM",),
                        "COLUMNS_LIST_MOBILE" => array(0=>"PREVIEW_PICTURE",1=>"DISCOUNT",2=>"DELETE",3=>"DELAY",4=>"TYPE",5=>"SUM",),
                        "COMPATIBLE_MODE" => "Y",
                        "COMPONENT_TEMPLATE" => "small",
                        "CORRECT_RATIO" => "N",
                        "DEFERRED_REFRESH" => "N",
                        "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                        "DISPLAY_MODE" => "compact",
                        "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
                        "GIFTS_CONVERT_CURRENCY" => "N",
                        "GIFTS_HIDE_BLOCK_TITLE" => "N",
                        "GIFTS_HIDE_NOT_AVAILABLE" => "N",
                        "GIFTS_MESS_BTN_BUY" => "Выбрать",
                        "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
                        "GIFTS_PAGE_ELEMENT_COUNT" => "4",
                        "GIFTS_PLACE" => "BOTTOM",
                        "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
                        "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
                        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                        "GIFTS_SHOW_IMAGE" => "Y",
                        "GIFTS_SHOW_NAME" => "Y",
                        "GIFTS_SHOW_OLD_PRICE" => "N",
                        "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
                        "HIDE_COUPON" => "Y",
                        "LABEL_PROP" => array(),
                        "LABEL_PROP_MOBILE" => "",
                        "LABEL_PROP_POSITION" => "",
                        "PATH_TO_ORDER" => "/personal/order/",
                        "PRICE_DISPLAY_MODE" => "Y",
                        "PRICE_VAT_SHOW_VALUE" => "N",
                        "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
                        "QUANTITY_FLOAT" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_DISCOUNT_PERCENT" => "N",
                        "SHOW_FILTER" => "Y",
                        "SHOW_RESTORE" => "Y",
                        "TEMPLATE_THEME" => "green",
                        "TOTAL_BLOCK_DISPLAY" => array(0=>"bottom",),
                        "USE_DYNAMIC_SCROLL" => "Y",
                        "USE_ENHANCED_ECOMMERCE" => "N",
                        "USE_GIFTS" => "N",
                        "USE_PREPAYMENT" => "N",
                        "USE_PRICE_ANIMATION" => "Y"
                    )
                );?>
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
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
	    
