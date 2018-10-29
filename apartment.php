<?include 'template_header.tpl';?>

<div class="content-screen require-background attached" style="background-image: url('/assets/img/background/blurred.jpg');">
	<div style="height: 60px;"></div>
	<div class="apartment--page">
		<h1 class="page-title">Выбор квартиры</h1>
		<div class="plan--modes">
			<div class="plan--mode chosen">
				<span class="plan-button"><img src="/assets/img/icons/plane.svg"></span>
				План
			</div>
			<div class="plan--mode">
				<span class="plan-button"><img src="/assets/img/icons/3d_plane-01.svg"></span>
				3D
			</div>
		</div>
		<div class="plan--image">
			<img src="/assets/img/plans/section3/storey--type/png/8.png">
			<div class="plan--compass"></div>
		</div>
		<div class="apartment--info">
			<div class="apartment--info-section">
				<div class="apartment--info-section-what">Номер</div>
				<div class="apartment--info-section-value">322</div>
			</div>
			<div class="apartment--info-section">
				<div class="apartment--info-section-what">Комнат</div>
				<div class="apartment--info-section-value">1</div>
			</div>
			<div class="apartment--info-section">
				<div class="apartment--info-section-what">Площадь, м<sup>2</sup></div>
				<div class="apartment--info-section-value">35.24</div>
			</div>
			<div class="apartment--info-section">
				<div class="apartment--info-section-what">Стоимость</div>
				<div class="apartment--info-section-value">по запросу</div>
			</div>
		</div>
		<div class="apartment--order">
			<div class="forms order--form">
				<h1>Оформите заявку</h1>
				<input type="text" placeholder="Имя">
				<input type="text" placeholder="Телефон">
				<div class="order--buttons">
					<button class="orange">Оформить</button>
					<button class="">Отмена</button>
				</div>
			</div>
		</div>
		<div class="apartment--resources">
			<button>Отправить на e-mail</button>
			<a class="download-icon download-pdf" href="">
				Скачать план на PDF
			</a>
		</div>
	</div>
</div>

<?include 'template_footer.tpl';?>