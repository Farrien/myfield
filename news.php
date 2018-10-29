<?include 'template_header.tpl';?>

<div class="content-screen require-background attached" style="background-image: url('/assets/img/background/blurred.jpg');">
	<div style="height: 60px;"></div>
	<div class="news--page">
		<h1 class="page-title">Новости и акции</h1>

		<div class="news--block">
			<div class="news--item">
				<div class="news--image" style="background-image: url('/bin/1316532147595406004.jpg');"></div>
				<div class="news--expand">
					<div class="news--title">Время первых! 36 000 руб./м2 на старте продаж</div>
					<div class="news--text news--text-small">
						Купи квартиру в ЖК Высота через ДомКлик — сервис для покупки квартир в ипотеку от Сбербанка!
					</div>
					<div class="news--text news--text-large">
						Купи квартиру в ЖК Высота через ДомКлик — сервис для покупки квартир в ипотеку от Сбербанка!  Подберите квартиру, рассчитайте ипотеку и отправьте заявку в Сбербанк - все на портале на domclick.ru!
					</div>
				</div>
			</div>
			<div class="news--item">
				<div class="news--image" style="background-image: url('/bin/1316532147595406004.jpg');"></div>
				<div class="news--expand">
					<div class="news--title">Ипотека от 6%</div>
					<div class="news--text news--text-small">
						Купи квартиру в ЖК Высота через ДомКлик — сервис для покупки квартир в ипотеку от Сбербанка!
					</div>
					<div class="news--text news--text-large">
						Купи квартиру в ЖК Высота через ДомКлик — сервис для покупки квартир в ипотеку от Сбербанка!  Подберите квартиру, рассчитайте ипотеку и отправьте заявку в Сбербанк - все на портале на domclick.ru!
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$('.news--item').click(function() {
	$(this).find('.news--text-small').toggleClass('hidden');
	$(this).find('.news--text-large').toggleClass('visible');
	$(this).toggleClass('expanded');
});
</script>

<?include 'template_footer.tpl';?>