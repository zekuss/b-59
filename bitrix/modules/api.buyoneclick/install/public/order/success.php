<?php
use \Bitrix\Main\Application;
use \Bitrix\Main\Localization\Loc;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

Loc::loadMessages(__FILE__);

$context = Application::getInstance()->getContext();
$request = $context->getRequest();
$servert = $context->getServer();


$id         = $request->get('ID');
$orderId    = $request->get('ORDER_ID');
$orderDate  = $request->get('ORDER_DATE');
$orderError = $request->get('ERROR');
$siteName   = ToUpper(str_replace('www.', '', $servert->getServerName()));

$isOrder = ($id && $orderId && $orderDate && !$orderError);
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<meta charset="<?=SITE_CHARSET?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=Loc::getMessage('AOS_SUCCESS_PAGE_TITLE')?></title>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<style>
		/* General fonts and margin */
		*{ margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
		html, body{ height: 100%; }
		body{ font: bold 16px/1.45 'Istok Web', Arial, sans-serif; color: #000; }
		h1, h2, h3, h4, h5, h6{ font-family: 'PT Sans Caption', Arial, sans-serif; line-height: 1.2; font-weight: 600; text-transform: uppercase; color: #000; margin: 0 0 15px 0; }
		* + h1, * + h2, * + h3, * + h4, * + h5, * + h6{ margin: 1.414em 0 0.5em; }
		h1{ font-size: 1.8em; }
		h2{ font-size: 1.6em; }
		h3{ font-size: 1.44em; }
		h4{ font-size: 1.2em; }
		p{ margin-bottom: 1.25em; -moz-hyphens: auto; -webkit-hyphens: auto; -ms-hyphens: auto; hyphens: auto; }
		small{ font-size: 0.533em; }
		img{ max-width: 100%; height: auto; border: 0; vertical-align: middle; }
		/* base styles */
		.container{ max-width: 980px; padding: 0 35px; margin: 0 auto }
		.panel{ background: #ffd700; }
		.grid{ overflow: hidden }
		.grid > div{ float: left }
		.grid-width-1-2{ width: 50%; }
		.grid-width-1-3{ width: 33.33333333333333%; }
		.grid-width-2-3{ width: 66.66666666666667%; }
		[class*="grid"] > *:first-child{ margin-top: 0 }
		[class*="grid-width"] + div{ padding-left: 35px; }
		.text-right{ text-align: right }
		.text-center{ text-align: center }
		.margin{ margin: 15px 0 }
		.margin-large{ margin: 30px 0 }
		.margin-xlarge{ margin: 55px 0 }
		.padding{ padding: 15px 0 }
		.padding-large{ padding: 30px 0 }
		.padding-xlarge{ padding: 55px 0 }
		.btn{
			display: inline-block;
			color: #1c1c1c;
			text-align: center;
			cursor: pointer;
			text-transform: uppercase;
			text-decoration: none;
			padding: 18px 15px;
			font-family: inherit;
			font-size: inherit;
			width: 290px;
			border: 2px solid transparent;
			-webkit-transition: all ease .3s; -moz-transition: all ease .3s; -ms-transition: all ease .3s; -o-transition: all ease .3s; transition: all ease .3s;
		}
		.btn-grey{ background: #e3e4e4; border-color: #e3e4e4; margin-right: 20px; }
		.btn-grey:hover{ border-color: #acaeaf; }
		.btn-yellow{ background: #ffe763; border-color: #ffe763; }
		.btn-yellow:hover{ border-color: #cab43f; }
		/* Skeleton */
		#wrapper{ min-height: 100%; margin-bottom: -78px; }
		#wrapper:after{ content: ""; display: block; }
		#footer, #wrapper:after{ height: 78px; }
		#footer{ font-size: 12px; color: #4d4d4d; font-weight: normal; text-align: center; }
		/* User styles */
		#header{ border-bottom: 5px solid #000; padding-bottom: 15px }
		#header a{ color: #000; text-transform: uppercase; text-decoration: none; }
		#header .logo a{ font-family: 'Istok Web', Arial, sans-serif; font-size: 37px; }
		#header .tel{ line-height: 1.2; }
		#header .tel a{ font-size: 18px; }
		#order-info{ font-size: 1.125em }
		#order-error{ font-size: 9em; line-height: 170px; font-family: 'PT Sans Caption', Arial, sans-serif; }
		/* @media */
		@media screen and (max-width: 768px){
			#order .grid-width-2-3{ width: 100% }
			#order .grid-width-1-3{ display: none }
		}
		@media screen and (max-width: 640px){
			h1{ font-size: 1.4em }
			#header [class*="grid-width-"]{ width: 100%; padding: 0; text-align: center }
			body{ font-size: 0.875em }
			.order-buttons > :last-child{ margin-top: 1em }
			.btn{ width: 100%; margin-right: 0 }
		}
	</style>
</head>
<body>
<div id="wrapper">
	<div class="panel">
		<div class="container">
			<div id="header" class="padding-large">
				<div class="grid">
					<div class="grid-width-1-2">
						<div class="logo">
							<a href="/"><?=$siteName?></a>
						</div>
					</div>
					<div class="grid-width-1-2">
						<div class="tel text-right">
							<small><?=Loc::getMessage('AOS_SUCCESS_DAY_OFF')?></small>
							<br>
							<a href="<?=Loc::getMessage('AOS_SUCCESS_TEL')?>"><?=Loc::getMessage('AOS_SUCCESS_PHONE')?></a>
						</div>
					</div>
				</div>
			</div>
			<div id="order" class="padding-xlarge">
				<div class="grid">
					<div class="grid-width-2-3">
						<? if($isOrder): ?>
							<h1 style="font-weight:bolder"><?=Loc::getMessage('AOS_SUCCESS_THANKS')?></h1>
							<div id="order-info">
								<?=Loc::getMessage('AOS_SUCCESS_ORDER_INFO', array('#ORDER_ID#' => $orderId, '#ORDER_DATE#' => $orderDate))?>
							</div>
						<? else: ?>
							<h1 style="font-weight:bolder"><?=Loc::getMessage('AOS_SUCCESS_ERROR')?></h1>
							<div id="order-info">
								<?=Loc::getMessage('AOS_SUCCESS_ERROR_ORDER_INFO')?>
								<a class="btn btn-yellow" href="/catalog/"><?=Loc::getMessage('AOS_SUCCESS_BUTTON_CONTINUE_SHOPPING')?></a>
							</div>
						<? endif ?>
					</div>
					<div class="grid-width-1-3 text-right">
						<? if($isOrder): ?>
							<img src="./auto.svg" alt="#">
						<? else: ?>
							<div id="order-error">403</div>
						<? endif ?>
					</div>
				</div>
				<? if($isOrder): ?>
					<div class="order-buttons">
						<a class="btn btn-grey" href="/personal/order/make/?ORDER_ID=<?=$orderId?>"><?=Loc::getMessage('AOS_SUCCESS_BUTTON_ORDER_DETAILS')?></a>
						<a class="btn btn-yellow" href="/catalog/"><?=Loc::getMessage('AOS_SUCCESS_BUTTON_CONTINUE_SHOPPING')?></a>
					</div>
				<? endif ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="padding-large">

			<!--Some text here...-->

		</div>
	</div>
</div>
<div id="footer">
	<div class="container">
		<div class="padding-large">&copy; &laquo;<?=$siteName?>&raquo;, 2009&ndash;<?=date('Y')?></div>
	</div>
</div>
</body>
</html>