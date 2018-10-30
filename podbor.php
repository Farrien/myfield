<?include 'template_header.tpl';?>

<div class="content-screen require-background attached" style="background-image: url('/assets/img/background/blurred.jpg');">
	<div style="height: 60px;"></div>
	<div class="selection--page">
		<h1 class="page-title">Подбор по параметрам</h1>

		<div class="parameters--block">
			<div class="parameters--section">
				<div class="section--choice active" data-sect="1" onclick="$(this).addClass('active').siblings().removeClass('active'); updatedRange();">Секция A</div>
				<div class="section--choice" data-sect="3" onclick="$(this).addClass('active').siblings().removeClass('active'); updatedRange();" style="margin: 0;">Секция B</div>
			</div>
			
			<div class="parameter--range" type="range" id="floor-range" data-slider-name="param_floors_range"></div>
			<div class="parameter--title">Этаж</div>
			<div class="parameter--range" type="range" id="rooms-range"data-slider-name="param_rooms_range"></div>
			<div class="parameter--title">Комнат</div>
			<div class="parameter--range" type="range" id="area-range"data-slider-name="param_area_range"></div>
			<div class="parameter--title">Площадь, м<sup>2</sup></div>
			<div class="parameter--range" type="range" id="price-range"data-slider-name="param_cost_range"></div>
			<div class="parameter--title">Цена, млн.</div>
		</div>
		
		<div class="results--block">
			<div id="for-slipping" class="apartment--links header-slip">
				<div class="apartment--info-row">Этаж</div>
				<div class="apartment--info-row">Комнат</div>
				<div class="apartment--info-row ">Площадь</div>
				<div class="apartment--info-row ">Цена</div>
			</div>
			<div id="for-results">
			
			</div>
		</div>
	</div>
</div>

<script>
var ranges = {
	flr : document.getElementById('floor-range'),
	ror : document.getElementById('rooms-range'),
	arer : document.getElementById('area-range'),
	prr : document.getElementById('price-range')
};

noUiSlider.create(ranges.flr, {
    start: [1, 15],
	tooltips: true,
	format: wNumb({decimals: 0}),
    range: {'min': 1,'max': 15}
});
noUiSlider.create(ranges.ror, {
    start: [1, 3],
	tooltips: true,
	format: wNumb({decimals: 0}),
    range: {'min': 1,'max': 3}
});
noUiSlider.create(ranges.arer, {
    start: [33, 74],
	tooltips: true,
	format: wNumb({decimals: 0}),
    range: {'min': 33,'max': 74}
});
noUiSlider.create(ranges.prr, {
    start: [2, 3],
	tooltips: true,
	format: wNumb({decimals: 1}),
    range: {'min': 1.2,'max': 3.3}
});

for (var key in ranges) {
	ranges[key].noUiSlider.on('change', function () {
		updatedRange();
	});
}

var updatedRange = function() {
	var parametersObj = {
		'request_type': 1,
		'param_sections': $('.parameters--section').find('.active').data('sect')
	};
	
	console.log($('.parameters--section').find('.active').data('sect'));
	
	for (var key in ranges) {
		parametersObj[ranges[key].dataset.sliderName] = ranges[key].noUiSlider.get()
	}
	
	$.ajax({
		url: 'http://jklite.big-d.ru/apartments/',
		type: 'POST',
		data: parametersObj,

		success: function (data) {
			var fragment = document.createDocumentFragment();
			data.forEach((item) => {
				$(fragment).append('<a href="/apartment/' + item.number + '"><div class="apartment--links"><div class="apartment--info-row">' + item.floor + '</div><div class="apartment--info-row">' + item.rooms + '</div><div class="apartment--info-row ">' + item.area + '</div><div class="apartment--info-row ">' + item.price + '</div></div></a>');
			});
			
			$('#for-results').html(fragment);
		},
		error: function (data) {
			console.log('error');
		}
	});
	
};

updatedRange();


$(window).scroll(function(e) {
//	console.log(this);
//	console.log(e);
	var scrollTop = $(window).scrollTop() + 60;
	if ( scrollTop > $('.results--block').offset().top) { 
		$('#for-slipping').addClass('gone');
	} else {
		$('#for-slipping').removeClass('gone');
		
	}
});
</script>

<?include 'template_footer.tpl';?>