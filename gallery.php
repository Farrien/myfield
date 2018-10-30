<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/superslides.css">
	<link rel="stylesheet" href="/css/first.css">
	<link rel="stylesheet" href="/css/mobile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no, user-scalable=no">

	<script type="text/javascript" src="/bower_components/jquery.2.2.4.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.superslides.min.js"></script>

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
			<div class="header--menu-button for-3d" onclick="location.href='/vtour/tour.html';">3D-тур</div>
	</div>
</div>
<!-- / ШАПКА -->

<div class="">
	<div class="superslides-window-fix" id="gallery-slider">
		<div class="slides-container">
			<img src="/uploading/gallery__page/2455421211.jpg" alt="">
			<img src="/uploading/gallery__page/2601613657.jpg" alt="">
			<img src="/uploading/gallery__page/2180216155.jpg" alt="">
			<img src="/uploading/gallery__page/1443610957.jpg" alt="">
			<img src="/uploading/gallery__page/2913426863.jpg" alt="">
			<img src="/uploading/gallery__page/2045626113.jpg" alt="">
			<img src="/uploading/gallery__page/1157010883.jpg" alt="">
			<img src="/uploading/gallery__page/2328416925.jpg" alt="">
			<img src="/uploading/gallery__page/3273417855.jpg" alt="">
			<img src="/uploading/gallery__page/2802423633.jpg" alt="">
		</div>
		<nav class="slides-navigation">
			<a href="#" class="next">
				<i class="icon-chevron-right"></i>
			</a>
			<a href="#" class="prev">
				<i class="icon-chevron-left"></i>
			</a>
		</nav>
	</div>
</div>

<script>
$('#gallery-slider').superslides({
	play : 3140,
	pagination : true
});


$('#drop-menu').click(function() {
	$('.header--dropdown-menu').toggleClass('dropdown-open');
	
});
</script>

</body>
</html>