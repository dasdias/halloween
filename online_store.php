<!DOCTYPE html>
<html>
	<head>
		<title>Интернет-магазин атрибутики на Halloween</title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<script src="static/js/jquery-3.4.1.min.js"></script>
		<script src="static/js/slick.js"></script>
		<script src="static/js/script.js"></script>
		<link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="static/css/slick.css" rel="stylesheet" type="text/css">
		<link href="static/css/slick-theme.css" rel="stylesheet" type="text/css">
		<link href="static/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	</head>
	<body>
		<div class="pelena"></div>
		<div class="main container">
			<header>
				<nav>
					<span class="menu_button">Главная</span>
					<span class="menu_button">Хеллуин</span>
					<span class="menu_button">Популярное</span>
					<span class="menu_button">Отзывы</span>
				</nav>
				<div class="slider">
					<div style="background: url('static/img/slide-1.png') no-repeat; background-size: 100% auto; background-position: center">
						<span>Скидка 30% на фонарь Джека</span>
					</div>
					<div style="background: url('static/img/slide-2.png') no-repeat; background-size: 100% auto; background-position: center">
						<span>Доставка товаров в день праздника</span>
					</div>
					<div style="background: url('static/img/slide-3.png') no-repeat; background-size: 100% auto; background-position: center">
						<span>Уникальные предложения, на Хеллуин 2019!</span>
					</div>
				</div>
			</header>
			<section class="product_box">
				<h2>Товары</h2>
				<div class="row">
				<?php foreach ($goods as $key => $item) { ?>
					<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-parent" data-id="<?=$item['id']?>">
						<div class="product">
							<div class="product_pic" style="background: url('<?=$item['pic']?>') no-repeat; background-size: auto 100%; background-position: center"></div>
							<span class="product_name"><?=$item['name']?></span>
							<span class="product_price"><?=$item['price']?> руб.</span>
							<button class="js_buy">Купить</button>
						</div>
					</div>
				<?php } ?>
			</section>
			<footer>
				2019 © С днем всех святых
			</footer>
		</div>
		<div class="overlay js_overlay"></div>
		<div class="popup">
			<h3>Оформление заказа</h3><i class="fas fa-times close_popup js_close_popup"></i>
			<div class='js_error'></div>
			<input type="hidden" name="product-id">
			<input type="text" name="fio" placeholder="Ваше имя">
			<input type="text" name="phone" placeholder="Телефон">
			<input type="text" name="email" placeholder="e-mail">
			<textarea placeholder="Комментарий" name="comment"></textarea>
			<button class="js_send">Отправить</button>
		</div>
	</body>
</html>