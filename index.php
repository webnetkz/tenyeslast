<?php

require_once './app/libs/dev.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/public/styles/style.css">
	<title>Ten Yes</title>
	<link type="image/png" sizes="96x96" rel="icon" href="favicon.png">
</head>
<body>
	<div class="sliderBg sliderBg0">
		
	</div>
	
	<header>
		<div class="logo h" onclick="location.href = '#'">
			<img src="/public/img/logo.png" alt="ten yes logotype h" onclick="location.href = '#'">
		</div>
		<div class="menu">
			<a href="#footer" class="catalog h">Каталог</a>
			<div class="wp forIcon">
				<img src="/public/img/wp.png" alt="whats app" class="h">
				<p>Написать</p>
			</div>
			<div class="like forIcon">
				<img src="/public/img/like.png" class="h">
				<p>Избранное</p>
			</div>
			<div class="cart forIcon" onclick="openCart();">
				<img src="/public/img/cart.png" class="h">
				<span class="counterCart"></span>
				<p>Корзина</p>
			</div>
		</div>
	</header>

	<div class="content" id="oneSlide">
		<h1 style="font-weight: 900;">Бренд Tenyes</h1>
		<h1 style="font-weight: 100;">Концептуальная</h1>
		<h1 style="font-weight: 100;">Уходовая косметика</h1>
		<h1 style="font-weight: 100;">Для тела и души</h1>
	</div>

	<div class="content" id="twoSlide">
		<h1 style="font-weight: 100;">Из натурального</h1>
		<h1 style="font-weight: 100;">Природного камня</h1>
		<h1 style="font-weight: 100;">Шунгит</h1>
	</div>

	<div class="content" id="threeSlide">
		<h1 style="font-weight: 900;">Tenyes</h1>
		<h1 style="font-weight: 900;">Shampoo</h1>
		<br>
		<p>
			Шампунь из натуральных элементов камня шунгит, <br>
			бережно очищает, не нарушая естественную защиту <br>
			волос, способствует регенерации и укреплению <br>
			волосяной луковицы, сокращает потерю волос
		</p>
		<br>
		<br>
		<p style="font-size: 1.1rem;">200 мл. 5000 тг</p>
		<br>
		<br>
		<div style="display: flex;" class="showBtns">
			<div class="buy bord h" onclick="localStorage.setItem('g1', 1); updateCounter();  updateCart('a1', 'g1');">
				<img src="/public/img/cart.png" style="margin-right: 10px;">
				Купить
			</div>
			<div class="show bord h" onclick="modalShow();">
				<img src="/public/img/show.png" style="width: 40px;">
			</div>
		</div>
	</div>
	<div class="dashes">
		<span class="dash dashActive h" id="i1"  onclick="showI()"></span>
		<span class="dash h" id="i2" onclick="showI2()"></span>
		<span class="dash h" id="i3" onclick="showI3()"></span>
		<span class="dash h" id="i4" onclick="showI4()"></span>
		<span class="dash h" id="i5" onclick="showI5()"></span>
	</div>

	<footer id="footer">
		<div class="component" style="visibility: hidden;">
			<div>
				<img src="/public/img/img.png" style="margin-right: 50px;" class="imgMore">
				<div class="h likeImg">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
			<div>
				<h2>TENYES SHAMPOO</h2>
				<br><br>
				<p>Шампунь из натуральных элементов камня <br>
				шунгит. Бережно очищает, не нарушая <br>
				естественную защиту волос, способствует <br>
				регенерации иукреплению волосяной <br>
				луковицы, сокращает потерю волос
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">200 мл. 5000 тг</p>
				<br><br>
				<div style="display: flex;" style="visibility: hidden;" class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g2', 1);  updateCounter();  updateCart('a2', 'g2');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
		</div>
		<div class="component" style="visibility: hidden;">
			<div style="visibility: hidden;">
				<h2>TENYES SHAMPOO</h2>
				<br><br>
				<p>Шампунь из натуральных элементов камня <br>
				шунгит. Бережно очищает, не нарушая <br>
				естественную защиту волос, способствует <br>
				регенерации иукреплению волосяной <br>
				луковицы, сокращает потерю волос
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">200 мл. 5000 тг</p>
				<br><br>
				<div style="display: flex;"  class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g3', 1); updateCounter();  updateCart('a3', 'g3');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
			<div>
				<img src="/public/img/img.png" style="margin-left: 50px;" class="imgMore">
				<div class="h likeImg" style="margin-left: 50px;">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
		</div>
		<br><br><br><br>
		<hr class="hr">

			<div style="display: flex; justify-content: space-between;">
				<img src="/public/img/logo.png" alt="ten yes logotype h" style="width: 20%; height: 10%; margin-left: 5%; margin-right: 20%;" onclick="location.href = '#'">
				<div style="width: 25%;">
					<p class="head">О компании</p>
					<a href="#">О бренде</a>
					<a href="#footer">Каталог</a>
					<a href="">Политика безопасности</a>
					<a href="">Информация о доставке</a>
					<a href="">Контакты</a>
				</div>
				<div style="width: 25%;">
					<p class="head">Свяжитесь с нами</p>
					<a href="#" style="display: flex; align-items: center;"><img src="/public/img/wp.png" ><span style="margin-left: 10px;">+7 777 123 4567</span></a>
					<a href="#" style="display: flex; align-items: center;"><img src="/public/img/phone.png" style="width: 24px;" ><span style="margin-left: 10px;">+7 777 123 4567</span></a>
					<a href="#" style="display: flex; align-items: center;"><img src="/public/img/mail.png" style="width: 24px;"><span style="margin-left: 10px;">tenyes@gmail.com</span></a>
				</div>
				<div style="width: 25%; display: flex; align-items: flex-end;">
					<img src="/public/img/instagram.png" style="margin: 5px;" class="h">
					<img src="/public/img/facebook.png" style="margin: 5px;" class="h">
					<img src="/public/img/tiktok.png" style="margin: 5px;" class="h">
				</div>
			</div>
	<br><br><br>
	</footer>


<?php
	require_once 'cart.php';
?>
<?php
	require_once 'modalShow.php';
?>
<?php
	require_once 'scripts.php';
?>