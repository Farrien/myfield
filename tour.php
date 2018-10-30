<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/superslides.css">
	<link rel="stylesheet" href="/css/first.css">
	<link rel="stylesheet" href="/css/mobile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no, user-scalable=no">

	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.superslides.min.js"></script>
	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<style>
		@-ms-viewport { width:device-width; }
		@media only screen and (min-device-width:800px) { html { overflow:hidden; } }
		html { height:100%; }
		body { height:100%; overflow:hidden; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; background-color:#000000; }
	</style>
	
	<script src="/vtour/tour.js"></script>

</head>
<body>

<!-- ШАПКА -->
<div class="header--body">
	<div class="header--logo-place">
		<a href="/" class="logo">
			<img src="/images/logo.png">
		</a>
	</div>
	<div class="header--menu-button-place">
		<div class="header--menu-button" id="drop-menu">Меню</div>
	</div>
	<div class="header--dropdown-menu">
		<div class="own-body">
			<ul class="v-menu">
				<li><a class="dropdown-menu-link" href="/podbor.php">Выбрать квартиру</a></lI>
				<li><a class="dropdown-menu-link" href="/gallery.php">Галерея</a></lI>
				<li><a class="dropdown-menu-link" href="/news.php">Новости и акции</a></lI>
				<li><a class="dropdown-menu-link" href="/photopage.php">Ход строительства</a></lI>
				<li><a class="dropdown-menu-link" href="/buy.php">Как купить</a></lI>
				<li><a class="dropdown-menu-link" href="/about.php">О застройщике</a></lI>
			</ul>
			<div class="dropdown-menu-section">О проекте</div>
			<ul class="v-menu">
				<li><a class="dropdown-menu-link" href="/#where">Расположение</a></lI>
				<li><a class="dropdown-menu-link" href="/#exor1" onclick="aishClick(1);">Квартира</a></lI>
				<li><a class="dropdown-menu-link" href="/#exor2" onclick="aishClick(2);">Подъезд</a></lI>
				<li><a class="dropdown-menu-link" href="/#exor3" onclick="aishClick(3);">Дом</a></lI>
				<li><a class="dropdown-menu-link" href="/#exor4" onclick="aishClick(4);">Двор</a></lI>
			</ul>
			
			<div class="header--social">
				Мы в соцсетях
				<a target="_blank" href="https://vk.com/jkvisotaneft">
					<img src="/images/vk-logo.svg" height="26px">
				</a>
				<a target="_blank" href="https://www.instagram.com/salviaufa/">
					<img src="/images/instagram-logo.svg" height="30px">
				</a>
			</div>
		</div>
	</div>
	<div class="header--menu-button-place">
		<div class="header--menu-button for-3d">3D-тур</div>
	</div>
</div>
<!-- / ШАПКА -->

<div>
<?include 'vtour/tour.html';?>
</div>

</body>
</html>
