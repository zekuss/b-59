<?
global $MESS;
$MESS["SALE_TITLE"] = "QIWI";
$MESS["SALE_DESCRIPTION"] = "Для работы необходимо, чтобы в настройках магазина в <a href=\"https://ishop.qiwi.ru\" target=\"_blank\">личном кабинете</a> были включены HTTP и SOAP протоколы.<br />
В настройках SOAP протокола необходимо указать \"Адрес веб сервиса интернет магазина\", на этой странице на сайте должнен быть подключен настроенный компонент (bitrix:sale.order.payment.receive) \"Подключение обработчика результата платежной системы\". А также галочка \"Использовать подпись\" не должна быть установлена.
";
$MESS["SALE_SHOP_ID"] = "Идентификатор (логин) магазина";
$MESS["SALE_SHOP_PASS"] = "Пароль магазина";
$MESS["SALE_CLIENT_PHONE"] = "Телефон клиента, на который выставлять счет";
$MESS["SALE_SHOULD_PAY"] = "К оплате";
$MESS["SALE_ORDER_ID"] = "ID заказа";
$MESS["SALE_DO_BILL"] = "Оплатить";
$MESS["SALE_COMMENT"] = "Оплата заказа №#ID#";
$MESS["SALE_SEND_NEW_PHONE"] = "OK";
$MESS["SALE_ERROR_PHONE"] = "Номер телефона должен состоять из 10 цифр. Например, 9161234567.<br />Пожалуйста, введите другой номер:";
$MESS["SALE_ERROR"] = "Ошибка платежной системы:<br/>";
$MESS["SALE_ABOUT_QIWI"] = "<p>Вы можете оплатить заказ в любом из более 87 000 терминалов QIWI или <a href=\"http://w.qiwi.ru/\" target=\"_blank\">на сайте платежной системы</a>.</p>";
$MESS["SALE_BILL_LIFETIME"] = "Время действия счета";
$MESS["SALE_BILL_LIFETIME_DESCR"] = "Время, в часах, в течение которого пользователь имеет возможность оплатить счёт. Время действия счёта не должно превышать 45 суток.";
$MESS["CLASS_STATUS_50"] = "Счет проводится";
$MESS["CLASS_STATUS_60"] = "Счет оплачен";
$MESS["CLASS_STATUS_150"] = "Счет отменен (ошибка на терминале)";
$MESS["CLASS_STATUS_151"] = "Счет отменен (ошибка авторизации: недостаточно средств на балансе, отклонен абонентом при оплате с лицевого счета оператора сотовой связи и т.п.)";
$MESS["CLASS_STATUS_160"] = "Счет отменен";
$MESS["CLASS_STATUS_161"] = "Счет отменен (Истекло время)";
$MESS["SALE_STATUS"] = "код подтверждения платежа";
$MESS["SALE_STATUS_PHONE"] = "телефон";
$MESS["SALE_STATUS_AMOUNT"] = "сумма";
$MESS["SALE_STATUS_DATE"] = "дата";
$MESS["SALE_CHANGE_STATUS_PAY"] = "Автоматически оплачивать заказ при получении успешного статуса оплаты";
$MESS["SALE_CHANGE_STATUS_PAY_DESC"] = "Y - оплачивать, N - не оплачивать.";

?>