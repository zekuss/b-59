<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <? $APPLICATION->IncludeComponent("bitrix:main.feedback", "main", Array(
                "EMAIL_TO" => "zaitsev5626@mail.ru",    // E-mail, на который будет отправлено письмо
                "EVENT_MESSAGE_ID" => array(    // Почтовые шаблоны для отправки письма
                    0 => "7",
                ),
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",    // Сообщение, выводимое пользователю после отправки
                "REQUIRED_FIELDS" => array(    // Обязательные поля для заполнения
                    0 => "NAME",
                    1 => "EMAIL",
                ),
                "USE_CAPTCHA" => "Y",    // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
            ),
                false
            ); ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <figure class="">
                <iframe src="https://yandex.ru/map-widget/v1/-/CBaRzFaATA" width="100%" height="400"
                        frameborder="0"></iframe>
            </figure>
        </div>
    </div>

    <div class="clear"></div>

    <div class="col-xs-12">
        <h2>В-59 СИНЯЯ ЛИНИЯ</h2>
        <p>Мы находимся в ТЦ «Электроника на Пресне» по адресу: Б. Декабрьская д.3 стр.1 (вход со стороны Звенигородского
            шоссе), в 100 метрах от станции метро «Улица 1905 года».</p>

        <p>Метро «Улица 1905 года», последний вагон из центра, спуститься в подземный переход, выход — направо, далее пройти
            100 метров по Звенигородскому шоссе и с правой стороны вход в Торговый Центр «Электроника на Пресне». Синяя
            линия - павильон В 59.<br/>
            Режим работы: 10:00-21:00 ежедневно, без перерывов и выходных.</p>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>