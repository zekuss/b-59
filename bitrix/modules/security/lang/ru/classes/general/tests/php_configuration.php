<?
$MESS["SECURITY_SITE_CHECKER_PhpConfigurationTest_NAME"] = "Проверка настроек PHP";
$MESS["SECURITY_SITE_CHECKER_PHP_ENTROPY"] = "Не установлен дополнительный источник энтропии при создании идентификатора сессии";
$MESS["SECURITY_SITE_CHECKER_PHP_ENTROPY_DETAIL"] = "Отсутствие дополнительной энтропии может использоваться для предугадывания случайных чисел";
$MESS["SECURITY_SITE_CHECKER_PHP_ENTROPY_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>session.entropy_file = /dev/urandom<br>session.entropy_length = 128";
$MESS["SECURITY_SITE_CHECKER_PHP_INCLUDE"] = "Разрешено подключение файлов по URL (URL wrappers)";
$MESS["SECURITY_SITE_CHECKER_PHP_INCLUDE_DETAIL"] = "Эта опция php крайне противопоказана";
$MESS["SECURITY_SITE_CHECKER_PHP_INCLUDE_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>allow_url_include = Off";
$MESS["SECURITY_SITE_CHECKER_PHP_FOPEN"] = "Разрешено чтение файлов по URL (URL wrappers)";
$MESS["SECURITY_SITE_CHECKER_PHP_FOPEN_DETAIL"] = "Если эта, сомнительная, возможность PHP не требуется - рекомендуется отключить, т.к. она может стать отправной точкой для различного типа атак";
$MESS["SECURITY_SITE_CHECKER_PHP_FOPEN_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>allow_url_fopen = Off";
$MESS["SECURITY_SITE_CHECKER_PHP_ASP"] = "Включено использование тегов в стиле ASP";
$MESS["SECURITY_SITE_CHECKER_PHP_ASP_DETAIL"] = "Многие разработчики не догадываются о существовании подобной опции, а как следствие могут не учесть её в различных проверках";
$MESS["SECURITY_SITE_CHECKER_PHP_ASP_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>asp_tags = Off";
$MESS["SECURITY_SITE_CHECKER_LOW_PHP_VERSION_ENTROPY"] = "Версия php устарела";
$MESS["SECURITY_SITE_CHECKER_LOW_PHP_VERSION_ENTROPY_DETAIL"] = "Текущая версия php не поддерживает установку дополнительного источника энтропии при создании идентификатора сессии";
$MESS["SECURITY_SITE_CHECKER_LOW_PHP_VERSION_ENTROPY_RECOMMENDATION"] = "Обновить версию php как минимум до 5.3.3, но лучше до последней стабильной";
$MESS["SECURITY_SITE_CHECKER_PHP_HTTPONLY"] = "Cookies доступны из JavaScript";
$MESS["SECURITY_SITE_CHECKER_PHP_HTTPONLY_DETAIL"] = "Доступ к cookies из JavaScript повышает критичность успешных XSS атак";
$MESS["SECURITY_SITE_CHECKER_PHP_HTTPONLY_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>session.cookie_httponly = On";
$MESS["SECURITY_SITE_CHECKER_PHP_COOKIEONLY"] = "Cookies - не единственное хранилище идентификатора сессии";
$MESS["SECURITY_SITE_CHECKER_PHP_COOKIEONLY_DETAIL"] = "Хранение идентификатора сессии не только в Cookies может служить источником атак типа Session Hijacking";
$MESS["SECURITY_SITE_CHECKER_PHP_COOKIEONLY_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>session.use_only_cookies = On";
$MESS["SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE"] = "Mbstring удаляет недопустимые символы кодировки";
$MESS["SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE_DETAIL"] = "Удаление недопустимых символов кодировки может служить источником так называемой \"Invalid Byte Sequence Attack\"";
$MESS["SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE_RECOMMENDATION"] = "Необходимо в настройках php изменить значение mbstring.substitute_character на значение, отличное от \"none\"";
$MESS["SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED"] = "Разрешен парсинг PHP скриптов в многобайтных кодировках";
$MESS["SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED_DETAIL"] = "Включение этой настройки крайне не рекомендуется, т.к. может нести непредсказуемые последствия для динамически генерируемых PHP скриптов, например, файлов кеша.";
$MESS["SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED_RECOMMENDATION"] = "Для PHP версии 5.4.0 и выше, необходимо в настройках указать:<br>zend.multibyte = Off";
$MESS["SECURITY_SITE_CHECKER_DISPLAY_ERRORS"] = "Включен вывод ошибок";
$MESS["SECURITY_SITE_CHECKER_DISPLAY_ERRORS_DETAIL"] = "Вывод ошибок предназначен для разработки и тестовых стендов, он не должен использоваться на конечном ресурсе.";
$MESS["SECURITY_SITE_CHECKER_DISPLAY_ERRORS_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>display_errors = Off";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER"] = "Установлен не корректный порядок формирования массива _REQUEST";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER_DETAIL"] = "Зачастую в массив _REQUEST нет необходимости добавлять любые переменные, кроме массивов _GET и _POST. В противном случае это может привести к раскрытию информации о пользователе/сайте и иным не предсказуемым последствиям.";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER_RECOMMENDATION"] = 'Необходимо в настройках php указать:<br>request_order = "GP"';
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER_ADDITIONAL"] = 'Текущее значение: "#CURRENT#"<br>Рекомендованное: "#RECOMMENDED#"';
$MESS["SECURITY_SITE_CHECKER_MAIL_ADD_HEADER"] = "Почтовые сообщения содержат UID PHP процесса";
$MESS["SECURITY_SITE_CHECKER_MAIL_ADD_HEADER_DETAIL"] = "В каждом отправляемом письме добавляется заголовок X-PHP-Originating-Script, который содержит UID и имя скрипта отправляющего письмо. Это позволяет злоумышленнику узнать от какого пользователя работает PHP.";
$MESS["SECURITY_SITE_CHECKER_MAIL_ADD_HEADER_RECOMMENDATION"] = "Необходимо в настройках php указать:<br>mail.add_x_header = Off";
