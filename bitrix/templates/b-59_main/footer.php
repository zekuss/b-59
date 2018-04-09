</div>

<!-- Right -->
</div>
</div>
</div>
<!-- Footer -->
<div class="page_wrapper_3 clearfix">
    <footer id="footer" class="container">
        <div class="row modules">

            <!-- MODULE Block footer -->
            <section class="block blockcms_footer col-sm-3">
                <h4>Моя учетная запись<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <li><a href="/personal/desktop.php" rel="nofollow">Персональный рабочий стол</a></li>

                    <li><a href="/personal/profile/" class="selected" rel="nofollow">Настройки пользователя</a></li>

                    <li><a href="/personal/order/" rel="nofollow">Заказы</a></li>

                    <li class="last"><a href="/personal/cart/" rel="nofollow">Корзина</a></li>

                </ul>
            </section>
            <section class="bottom_footer">
                <div class="container">Copyright&copy; B-59 2018-<?= date('Y') ?></div>
            </section>    <!-- /MODULE Block footer -->
            <!-- Block myaccount module -->
            <section class="block blockcms_footer col-sm-3">
                <h4>Карта сайта<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <? $APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "MAX_LEVEL" => "1",    // Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "top",    // Тип меню для остальных уровней
                        "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                            0 => "SECTION_ID",
                            1 => "page",
                        )
                    ),
                        false
                    ); ?>

                </ul>
            </section>
            <!-- /Block myaccount module -->
            <section class="block blocksocial col-sm-3">

            </section><!-- MODULE Block contact infos -->
            <section class="block blockcontactinfos col-sm-3">
                <h4>Свяжитесь с нами<i class="icon-plus-sign"></i></h4>
                <ul class="toggle_content">
                    <li>B-59</li>
                    <li class="adress-info">Мы находимся в ТЦ «Электроника на Пресне» по адресу: Б. Декабрьская д.3
                        стр.1 (вход со стороны Звенигородского шоссе), в 100 метрах от станции метро «Улица 1905 года».
                    </li>
                    <li class="tel">Телефон: +7 916 797 94 04</li>
                    <li class="email">Email <a
                                href="mailto://zaitsev5626@mail.ru">zaitsev5626@mail.ru</a>
                    </li>
                </ul>
            </section>
        </div>

    </footer>
</div>
</div>
<?$APPLICATION->IncludeComponent(
	"api:buyoneclick", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "xmlcatalog",
		"IBLOCK_ID" => "8",
		"IBLOCK_FIELD" => array(
			0 => "",
			1 => "",
		),
		"USE_JQUERY" => "Y",
		"PAY_SYSTEM" => "1",
		"DELIVERY_SERVICE" => "",
		"SHOW_FIELDS" => array(
			0 => "6",
			1 => "7",
			2 => "18",
		),
		"LOCATION_ID" => "",
		"REDIRECT_PAGE" => "",
		"MESS_ERROR_FIELD" => "#FIELD# обязательное",
		"BIND_USER" => "Y",
		"SHOW_COMMENT" => "Y",
		"SHOW_QUANTITY" => "Y",
		"PERSON_TYPE" => "1",
		"MODAL_HEADER" => "ЗАКАЗ В 1 КЛИК",
		"MODAL_TEXT_BEFORE" => "Оставьте пожалуйста свои контактные данные.
Наши менеджеры свяжутся с вами для уточнения деталей заказа.",
		"MODAL_TEXT_AFTER" => "Нажатием кнопки «Оформить заказ» я даю свое согласие на обработку персональных данных в соответствии с указанными <a href=\"#\">здесь</a> условиями.",
		"MODAL_FOOTER" => "",
		"MODAL_TEXT_BUTTON" => "Оформить заказ",
		"MESS_SUCCESS_TITLE" => "Спасибо! Ваш заказ принят!",
		"MESS_SUCCESS_INFO" => "Заказ №#ORDER_ID# от #ORDER_DATE#

Ваш заказ принят для исполнения.
Ожидайте звонка оператора, в ближайшее время он свяжется с Вами для уточнения даты доставки и необходимых деталей.

Если заказ оформлен в ночное время, оператор свяжется с Вами после 9-00.",
		"REQ_FIELDS" => array(
			0 => "18",
		)
	),
	false
);?>
</body>
</html>

