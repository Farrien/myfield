
$('.apartments-info-slider-horizontal').slick({
	accessibility : true,
	autoplay : true,
	autoplaySpeed : 3140,
	dots : false,
	arrows : false,
	prevArrow : '<button type="button" class="slick-prev" style="left: 5px;">Previous</button>',
	nextArrow : '<button type="button" class="slick-next" style="right: 5px;">Next</button>',
	
	mobileFirst : true
});

$('.top--slider').slick({
	dots : true,
	appendDots : $('.top__slider-dots'),
	dotsClass : '',
	arrows : false,
	draggable : false,
	fade : true,
	autoplay : true,
	autoplaySpeed : 3140,
	mobileFirst : true,
	swipe : false
});

$('#drop-menu').click(function() {
	$('.header--dropdown-menu').toggleClass('dropdown-open');
	
});