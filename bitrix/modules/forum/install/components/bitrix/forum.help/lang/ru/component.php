<?
$MESS ['F_TITLE'] = "Помощь";
$MESS ['F_TITLE_NAV'] = "Помощь";
$MESS ['F_NO_MODULE'] = "Модуль форума не установлен";
$MESS ['F_CONTENT'] = "<ul class='forum-help-list'>
	<li id='new_topic'><b>Как мне создать тему в форуме?</b><br />
		Щёлкните по соответствующей кнопке или ссылке в окне списка тем форума или конкретной темы. 
		Вам, возможно, придется зарегистрироваться прежде чем отправить сообщение.</li>
	<li id='html'><b>Могу ли я использовать HTML?</b><br />
		Зависит от того разрешено ли это администратором. Это сделано для безопасности, чтобы запретить использование тегов которые могут вызвать проблемы.</li>
	<li id='bbcode'><b>Как мне отформатировать текст сообщения если HTML не разрешен?</b><br />
		Администратором может быть разрешено использование следующих тегов:<br />
	<table cellpadding='0' cellspacing='0' class='forum-table'>
		<tr><th>Тег</th><th>Описание</th><th>Синонимы</th><th>Примечание</th></tr>
		<tr><td>&lt;a href=\"ссылка\"&gt;</td>
			<td>ссылка</td><td>[URL]ссылка[/URL]<br />[URL=ссылка]</td>	
			<td> </td></tr><tr><td>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;</td>
			<td>жирный, подчеркнутый текст или курсив соответственно</td>
			<td>[b], [u], [i]</td><td>Должен всегда присутствовать соответствующий закрывающий тег &lt;/b&gt;, &lt;/u&gt;, &lt;/i&gt;</td></tr>
		<tr><td>&lt;img src=\"адрес\"&gt;</td><td>рисунок</td>
			<td>[img]адрес[/img]</td>
			<td>адрес - полный путь к рисунку на любом публичном сайте</td></tr>
		<tr>
			<td>&lt;ul&gt;, &lt;li&gt;</td><td>ненумерованые списки</td>
			<td>[ul], [li]</td><td> </td></tr><tr><td>&lt;quote&gt;</td>
			<td>специальный тег для выделения цитирования</td><td>[quote]</td>
			<td>Должен всегда присутствовать соответствующий закрывающий тег &lt;/quote&gt;</td></tr>
		<tr><td>&lt;code&gt;</td>
			<td>специальный тег для выделения кода</td>
			<td>[code]</td>
			<td>Должен всегда присутствовать соответствующий закрывающий тег &lt;/code&gt;</td></tr>
		<tr><td>&lt;font color=&gt;, &lt;font size=&gt;</td><td>изменение цвета и размера шрифта</td>
			<td>[color=цвет], [size=размер]</td><td>Должен всегда присутствовать соответствующий закрывающий тег &lt;/font&gt;</td></tr>
	</table>
	</li>
	<li id='images'><b>Могу ли я вставлять картинки?</b><br />
		Вы можете вставлять картинки в сообщения, если это разрешено администратором. 
		Вы должны указать ссылку на картинку, которая находится на общедоступном сервере, 
		например: [img]http://www.bitrix.ru/images/logo_bitrix.gif[/img] или &lt;img src=\"http://www.bitrix.ru/images/logo_bitrix.gif\"&gt;.</li>
	<li id='smiles'><b>Что такое смайлики?</b><br />
		Смайлики, или иконки эмоций - это маленькие картинки, которые могут быть использованы для выражения чувств, например :) значит радость, :( значит грусть. 
		Полный список смайликов можно увидеть в форме создания сообщений. Только не перестарайтесь, используя их: они легко могут сделать сообщение нечитаемым, 
		и модератор может отредактировать ваше сообщение, или вообще удалить его.</li>
	<li id='registration'><b>Зачем мне нужно регистрироваться?</b><br />
		Вы можете этого и не делать. Всё зависит от того, как администратор настроил форум: должны ли вы зарегистрироваться, чтобы размещать сообщения или нет.</li>
	<li id='profile'><b>Как мне изменить мои настройки?</b><br />
		Все ваши настройки хранятся в базе данных (если вы зарегистрированы). Чтобы изменить их, перейдите в раздел Профиль (ссылка на него находится в верхней панели). 
		Там вы можете изменить все свои настройки. Доступ в раздел Профиль возможен только после регистрации.<br />
		Страница изменения профиля посетителя состоит из трех частей: изменение регистрационной информации, изменение личных данных и изменение профиля на форуме.
		Раздел изменения регистрационной информации служит для изменения имени, фамилии, логина и пароля пользователя. Раздел изменения личных данных служит 
		для указания профессии, даты рождения, фотографии, места жительства и других личных данных. Раздел изменения профиля на форуме служит для изменения 
		представления на форуме:
			<ul><li><i>Показывать имя.</i> В качестве имени автора сообщения используется его имя и фамилия, если они не пусты. 
				В противном случае используется логин автора. Этот флаг запрещает использование имени и фамилии вне зависимости от их заполненности;</li>
				<li><i>Пояснение</i> - пояснение автора, оно будет выводится под именем автора сообщения. В качестве пояснений запрещено использовать 
					слова и выражения, содержащие слова «админ», «модератор», «support» и т.п. Нарушители будут удаляться с форума без предупреждения;</li>
				<li><i>Подпись</i> - автоматическая подпись под каждым сообщением этого пользователя. В подписи допустимо использовать любые разрешенные на 
					данном форуме теги;</li>
				<li><i>Аватар</i> - изображение, показываемое под именем автора сообщения.</li>
			</ul>
	</li>
	<li id='subscribe'><b>Я хочу получать новые сообщения по почте!</b><br />Вы можете подписаться как на получение новых сообщений со всего форума, 
		так и на получение новых сообщений по конкретной теме. Для этого вы должны быть зарегистрированы на сервере. Подписаться на все сообщения форума и 
		конкретной темы можно при создании сообщения (темы) или воспользоваться соответствующими ссылками в списке тем форума или в теме. Для управления 
		подпиской перейдите по ссылке «Подписка», расположенной в вашем профиле.
	</li>
</ul>";
?>