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
	<div class="sliderBg">
		
	</div>
	
	<header>
		<div class="logo" onclick="location.href = '#'">
			<img src="/public/img/logo.png" alt="ten yes logotype" onclick="location.href = '#'">
		</div>
		<div class="menu">
			<a href="#" class="catalog">Каталог</a>
			<div class="wp forIcon">
				<img src="/public/img/wp.png" alt="whats app">
				<p>Написать</p>
			</div>
			<div class="like forIcon">
				<img src="/public/img/like.png">
				<p>Избранное</p>
			</div>
			<div class="cart forIcon">
				<img src="/public/img/cart.png">
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
		<div style="display: flex;">
			<div class="buy bord">Купить</div>
			<div class="show bord">2</div>
		</div>
		<div class="dashes">
			<span class="dash"></span>
			<span class="dash"></span>
			<span class="dash"></span>
			<span class="dash"></span>
			<span class="dash"></span>
		</div>
	</div>
	<pre>




























	</pre>

	<script>
		window.onscroll = headerMin;

		function headerMin() {
			let cont = document.querySelector('#oneSlide');
			cont.scrollIntoView({ behavior: 'smooth' });
			if(window.scrollY > 100) {
				cont.style.opacity = '0';				
			} else {
				cont.style.opacity = '1';
			}


			let contTwo = document.querySelector('#twoSlide');
			contTwo.scrollIntoView({ behavior: 'smooth' });
			if(window.scrollY > 1050) {
				contTwo.style.opacity = '0';				
			} else {
				contTwo.style.opacity = '1';
			}
		}


	</script>
</body>
</html>