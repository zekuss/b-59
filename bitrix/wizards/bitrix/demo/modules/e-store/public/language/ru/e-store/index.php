<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин");
?><p>Модуль <b>Интернет-магазин</b> позволяет организовать продажу любых товаров на сайте.</p>

<p>На нашем сайте приведен пример организации продажи книг. Раздел <b>Магазин</b> (<b>/e-store/</b>) состоит из двух подразделов: <b>Каталог книг</b> (<b>/e-store/books/</b>) и раздел <b>Аффилиатов</b> (<b>/e-store/affiliates/</b>).</p>

<p>Информация о книгах структурирована следующим образом: создан тип инфоблока <b>Каталог книг</b>. Для этого типа создано три информационных блока: </p>

<ul>
  <li>Авторы; </li>

  <li>Книги; </li>

  <li>Рецензии. </li>
</ul>

<p>Из них инфоблок <b>Книги</b> является торговым каталогом, элементы которого продаются на сайте. Каталог книг выведен с помощью комплексного компонента <b>Полный каталог</b>. В разделе <b>Каталог книг</b> содержится два подраздела: <b>Авторы</b> и <strong>Рецензии</strong>, в первом из которых выводится информация об авторах, а во втором&nbsp;&ndash; рецензии на книги каталога.</p>

<p>Структура инфоблоков организована так, что каждая книга привязывается к определенному <strong>Автору</strong>. В настройках инфоблока <strong>Книги </strong>создано свойство <strong>Авторы</strong> типа <em>Привязка к элементам</em>.&nbsp;С другой стороны,&nbsp;каждая&nbsp;<strong>Рецензия </strong>привязывается к определенной книге. Для этого в настройках инфоблока <strong>Рецензии</strong> создано свойство <strong>Рецензия на книгу </strong>типа <em>Привязка к элементам</em>.&nbsp;</p>

<p>Аффилиат&nbsp;&ndash; это вид партнера компании, который непосредственно не занимается продажей товара, а располагает у себя на сайте ссылку на Интернет-магазин компании, и пользователи его сайта, перешедшие по этой ссылке и купившие товар в магазине, считаются им привлеченными. Аффилиату от таких продаж перечисляется определенный процент или фиксированная сумма, предусмотренная его планом. В разделе Аффилиаты на сайте дана краткая информация и приведены примеры по организации работы с аффилиатами:</p>

<ul>
  <li>На странице <b>Счет аффилиата</b> выводится информация о движении средств на счете аффилиата; </li>

  <li>Даны краткие технические инструкции по созданию ссылок на магазин и на регистрацию аффилиата; </li>

  <li>Представлен пример формы регистрации аффилиата; </li>

  <li>Выведены доступные планы аффилиатов с помощью компонента аффилиатские планы. </li>
</ul>

<p>Средства Интернет-магазина можно также использовать для организации продажи контента на сайте.
Под продажей контента в системе подразумевается продажа приписки к определенной группе пользователей, обладающей правом доступа к данному контенту. В нашем примере продается приписка на один месяц к группе <i>Подписчики</i>. Только эта группа пользователей обладает правом детального просмотра статей.</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>