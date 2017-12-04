<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Oh, my cake</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">


	<!-- font-awesome from header.html & footer.html -->
	<link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	
	
</head>

<body class="main"> <!-- ATTENTION!!!!!!!! -->

	<!-- =====================================
	HEADER START
	===================================== -->
	<?php include("blocks/header.php");?>
	<!-- =====================================
	HEADER END
	===================================== -->


	<div class="slider slider_main">

		<div class="slider_item">

			<div class="slider_img">
				<img src="img/main_sliderImg.jpg" alt="Новинка" class="img-responsive">
			</div>

			<div class="slider_content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1>Новинка</h1>
						</div>
						<div class="col-12">
							<div class="img-separator">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="61" height="62" viewBox="0 0 61 62">
								<image width="61" height="62" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAA2CAQAAAAB4iO+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfhCxgAIg/EvHdXAAAD4klEQVRYw62Wf2hVZRjHv3eduLVwTq1W1NRCxR9bMbUyqNtUplFTKStRGIZYwZzghTQoM1oghD+wgYSis1J0/1wahhUuU0xX+CvCOYvY1Jnp7tQ2XWmz+vTHeT3ec8692zl6nwcuvM/73s95nud93ud9hVxawEmO84LHGlC9hkKuAbAyGzDRjxoANmQDJsRrAFRlByaWAZCfHZg4BSwJB8tRJlkr6SWFk4zfKQbgwex4dlR/S4qGcSwzbIByJN1562Hm8wHtAFzmU8bfym7OpBOASySx5a2bhU0C4BhzyON2JvENAItvBhblPLDTZVsNwHSiYWFLgCS3eazHAOjgY+YykbFBYXVA3LesAre00chy5lBO/9R1lmdzLUnNvi3fLalb1SpWvkZquApVqCdNMfyqJu3VRZ3SXi/sH0mDfLCHJVlaYUZlekZ5ytEQjdJ9GqERelGStMsb0EfAD74wvwB+TJunKRx1gr/sncylDVjqsk0FYKavsKvYxhUAWvgM+M0Lu4uTAKyhACEs4gDsd62aTi2XjD/beRURBTq8sINANwA91FPHGQAOkGvmB7OcwwbTzns8buyPAEk36h0AhvAEh5xMnGWhmZ1Ggn+NdQvPOx+43rBcsFIAKs1oAhOJUYIQBayi2WAOMJ/hvo3wwO6gC9jmWzaD7wzmGjUZq98DqwdaXQephE2cN6AGZjCol3Ppgi0EYIIZDWQRx52cVTO0z46RsgFjAXgdEaWUhBNWgpjv0KfXu2+URguwmXyWOmE1EScvEMYu9XnAWSHWA3DEYH5nU+Ymk0bH8L7pzK1ifkpr2cmsEJj7eYVvzT+7gBMyff4QKwOk+YaWUcN/BvQl5YwG2m3YghCYgSxIKeAPecgcM+gQHcCAwKj+dAHQzUaeTbEXAUlLSHpAfwS8Znu0WcO0Sxt10WWPXG/TYeSKqjJP5qT8+qVUazUv+Jcscy2kkyLtlnRatcFhkYywLjXpiFYH4vwlKWK5QMVapBJ9rbclSadVHDjCqKSIXRp5iDdoNNWzI0TV2R2jliRwVbQBe7hgQF9RFgLTj0rnRjjDbNFqBq3EQz06nyZBjxPLZCxke1bPoyEwg1lGm8E0EzeXopB9Nu8JHNY0p090stX7prRhowKAxrGGPw1oHxVY/jU2rKhXzDDmOmn+mVWmTyg8bApbDOYqn1Peu/fiAqS5VMVjvMkvBrSHd7m371SITmCky5hLBdsNJsk6YkH3WXwPfJIS1gqngBNUut4TfWqE57RDUp0alatyPSVJatFWJfRT8OZjBFHtevyu4+Uw3rg9k6SYpiqmc2pQg06E9seR/wGGnbFkPjKs3AAAAABJRU5ErkJggg=="/>
								</svg>
							</div>
						</div>
						<div class="col-12">
							<div class="slider_descr">
								<span>Нежный бисквит с шоколадной начинкой. Сверху покрыт толстым слоем шоколада<span></span></span>
								<span class="separator"></span>
								<button class="descr_btn">Подробнее</button>
							</div>
						</div>
						<div class="col-12">
							<div class="scrollDown">
								<a href="#shop"><span></span><span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- / slider_content -->

		</div> <!-- / slider_item -->

		<div class="slider_item">

			<div class="slider_img">
				<img src="img/main_sliderImg.jpg" alt="Новинка" class="img-responsive">
			</div>

			<div class="slider_content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1>Новинка</h1>
						</div>
						<div class="col-12">
							<div class="img-separator">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="61" height="62" viewBox="0 0 61 62">
									<image width="61" height="62" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAA2CAQAAAAB4iO+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfhCxgAIg/EvHdXAAAD4klEQVRYw62Wf2hVZRjHv3eduLVwTq1W1NRCxR9bMbUyqNtUplFTKStRGIZYwZzghTQoM1oghD+wgYSis1J0/1wahhUuU0xX+CvCOYvY1Jnp7tQ2XWmz+vTHeT3ec8692zl6nwcuvM/73s95nud93ud9hVxawEmO84LHGlC9hkKuAbAyGzDRjxoANmQDJsRrAFRlByaWAZCfHZg4BSwJB8tRJlkr6SWFk4zfKQbgwex4dlR/S4qGcSwzbIByJN1562Hm8wHtAFzmU8bfym7OpBOASySx5a2bhU0C4BhzyON2JvENAItvBhblPLDTZVsNwHSiYWFLgCS3eazHAOjgY+YykbFBYXVA3LesAre00chy5lBO/9R1lmdzLUnNvi3fLalb1SpWvkZquApVqCdNMfyqJu3VRZ3SXi/sH0mDfLCHJVlaYUZlekZ5ytEQjdJ9GqERelGStMsb0EfAD74wvwB+TJunKRx1gr/sncylDVjqsk0FYKavsKvYxhUAWvgM+M0Lu4uTAKyhACEs4gDsd62aTi2XjD/beRURBTq8sINANwA91FPHGQAOkGvmB7OcwwbTzns8buyPAEk36h0AhvAEh5xMnGWhmZ1Ggn+NdQvPOx+43rBcsFIAKs1oAhOJUYIQBayi2WAOMJ/hvo3wwO6gC9jmWzaD7wzmGjUZq98DqwdaXQephE2cN6AGZjCol3Ppgi0EYIIZDWQRx52cVTO0z46RsgFjAXgdEaWUhBNWgpjv0KfXu2+URguwmXyWOmE1EScvEMYu9XnAWSHWA3DEYH5nU+Ymk0bH8L7pzK1ifkpr2cmsEJj7eYVvzT+7gBMyff4QKwOk+YaWUcN/BvQl5YwG2m3YghCYgSxIKeAPecgcM+gQHcCAwKj+dAHQzUaeTbEXAUlLSHpAfwS8Znu0WcO0Sxt10WWPXG/TYeSKqjJP5qT8+qVUazUv+Jcscy2kkyLtlnRatcFhkYywLjXpiFYH4vwlKWK5QMVapBJ9rbclSadVHDjCqKSIXRp5iDdoNNWzI0TV2R2jliRwVbQBe7hgQF9RFgLTj0rnRjjDbNFqBq3EQz06nyZBjxPLZCxke1bPoyEwg1lGm8E0EzeXopB9Nu8JHNY0p090stX7prRhowKAxrGGPw1oHxVY/jU2rKhXzDDmOmn+mVWmTyg8bApbDOYqn1Peu/fiAqS5VMVjvMkvBrSHd7m371SITmCky5hLBdsNJsk6YkH3WXwPfJIS1gqngBNUut4TfWqE57RDUp0alatyPSVJatFWJfRT8OZjBFHtevyu4+Uw3rg9k6SYpiqmc2pQg06E9seR/wGGnbFkPjKs3AAAAABJRU5ErkJggg=="/>
								</svg>
							</div>
						</div>
						<div class="col-12">
							<div class="slider_descr">
								<span>Нежный бисквит с шоколадной начинкой. Сверху покрыт толстым слоем шоколада<span></span></span>
								<span class="separator"></span>
								<button class="descr_btn">Подробнее</button>
							</div>
						</div>
						<div class="col-12">
							<div class="scrollDown">
								<a href="#shop"><span></span><span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- / .slider_content -->

		</div> <!-- / .slider_item -->

	</div> <!-- / .slider_main -->











	<!-- ======================== SECTION SHOP START ======================= -->
	<section class="shop" id="shop">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="shop_heading">
						<h2>Интернет магазин тортов, <span>выпечки и десертов</span></h2>
						<p>Oh, My Cake! Торты, десерты со всего мира с доставкой и свежая выпечка собственного производства</p>
						<p>Помогаем радовать близких угощением как в ресторане. Избавляем от необходимости печь самостоятельно. Побалуйте себя и близких вкусным угощением</p>
					</div>
				</div>
			</div>


		<div class="shop_cards">
			<div class="row no-gutters">

				<div class="col-lg-8">
					<div class="category category-hits">
						<div class="shop_card">
							<a href="#" class="shop_card-link">
								<div class="shop_card-post">
									<div class="shop_card-img"><img class="img-responsive" src="img/shop_cake1.jpg" alt="Круассан «Классический»"></div>
									<div class="shop_card-content">
										<div class="shop_card-heading">
											<h3>Торт от Шефа</h3>
											<!-- span -->
										</div>
										<div class="shop_card-text">
											<div class="svg-wrap">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="27" viewBox="0 0 35 27">
													<image id="Layer_3_copy" data-name="Layer 3 copy" width="35" height="27" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAbCAMAAADBLsarAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABd1BMVEX/SAD/////SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAD/SAAAAACS0r3LAAAAfHRSTlMAADR+o7KzraiEOimhjVszKzVZjKQuUX0VEXRYUkM8IESii4UIJUcTEEUnCy+Trq+fchKKqbGWa4cGFg03gHVwLU04hnwmoBs+php4MCMKGQ5BkZmPnh8sY28dKEZlOWpVYQKamIN/ggQPXHGBq2RTaE4XHipnFIicsKqd3BuZdgAAAAFiS0dEfNG2IF8AAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfhCxoLCAiT7wm2AAABiUlEQVQoz4XS6T8CQRgH8Fn0W4VSUrmKkqPYiBJKOkjKLblyxMqVO4l/3m7pWG31vJjdmf3OZ5+Z5yGkMpqaWySgW6Wy8hJFUZWirR0dckWnUtUFdbe40UCr+3vt6UWfmOnHQMUGPeTVxoBBQWoytFWZISMRhokWmmHzCEb/mTGMW6wlMzEJxoapabsQzWDW4VQWzBxc+tH5BU27IGnuZ65FtwdLvPFi+W/R5xcYV4AbzAhSpAkrRDxWvfwYwhoJm2qQdSjy54rYCKI1zELhvqgNEIed1A1qkyHYamC2HQQ7DYwSZHevgdmPkQP465o4X9tDWOoQA+b4WhwVW8VsKH06Pik8+xAp1PQUrQlVv1yKs5KJSgLnF6pLNXzF3kh6cUUDuLqeYW88KdbodHIzyR6Ct+X+SXK3dLchu38IPrIsm9I+yHfiPcTK91S5D9NPIvk+S0ilCdIiJrYvMCGEpS+v7rghtKV7C71/+F8zqSmYBYZ8JrJf4bQtxzBpmqZzzPdPNpOvJGd+AUx9NQ9S5/8LAAAAAElFTkSuQmCC"/>
												</svg>
											</div>
											<p>Трехслойный торт с брусничной начинкой и начинкой из белого шоколада, брусникой, взбитыми сливками, украшенный белом шоколадом и клюквой <a class="details" href="#">Подробнее</a></p>
										</div>
										<div class="shop_card-info">
											<span class="date">400 <span>₽</span></span>
											<span class="separator"></span>
											<span class="item-weight">80 г</span>
											<span class="separator"></span>
											<div class="rating">
												<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
												<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
												<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
												<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
												<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
												<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
												<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
												<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
												<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
												<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
											</div>
										</div>
										<div class="button-and-like" >
											<a href="">
												<div class="myButton-cart">
													<div class="row no-gutters">
														<div class="col-4 no-pad"><i class="icon-basket-loaded" aria-hidden="true"></i></div>
														<div class="col-8 no-pad"><p>В корзину</p></div>
													</div>
												</div>
											</a>

											<a href="">
												<div class="myButton-favourite">
												<i class="icon-heart" aria-hidden="true"></i>
												</div>
											</a>
										</div>
									</div>
								</div>
							</a>
						</div> <!-- /.shop_card -->
					</div>
				</div>

				<div class="col-lg-4">
					<div class="category category-new">
						<div class="shop_card">
											<a href="#" class="shop_card-link">
												<div class="shop_card-post">
													<div class="shop_card-img"><img class="img-responsive" src="img/shop_pipe.jpg" alt="Круассан «Классический»"></div>
													<div class="shop_card-content">
														<div class="shop_card-heading">
															<h3>Торт малиновый с миндалем</h3>
															<span>с узором из белой глазури</span>
														</div>
														<div class="shop_card-text">
															<div class="svg-wrap">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="30" viewBox="0 0 21 30">
																	<image width="21" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAeCAMAAAD0DqVnAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEWRsAD///+RsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsAAAAABdBFwsAAAAhHRSTlMAAIPrHyrKJNDtAQlI6JUm6hWJyNRafVBcBPiXufPmt4Vg9Eyj7FeQ+9zby73FmjLOjKwrON9Zw9pxQ+BVb9XkoE4g7xGeLMAUNelFqaH5GHlkM/Ap55Q5p/H1qF8PcN56/aU3DlhsNlP8RroX8lFmbUSxQCGKR/qRBdizbuFUTX5yBpnC9QZgAAAAAWJLR0SFFddq5wAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+ELGBcEGwTRlfsAAAFpSURBVCjPbdLpPwJhEAfw2VbuFOVoVRRFyZnchCSb5JZcue/7Su7j94d7ttSG5sV8nuf7YnbmmSVioeBzKBWcFImTMhd5/5Uov6AwixahOIuSqiSLqqEp/adl0OpQ/kcrUMnaQ5X+lwrVUjbAaKqpNatTaqmTcr3V1mBsNNkdTYqEOpuljBYpt7YBSGg7Olydbgs7dXWjp7evX8IBDA5ZPcOkrAecIxw36mU4Bh/L4zY/NIoJqQeRZ/eAlmgyyFumxJ9+XQFWNDQ944VjVp54bp4WAH5xSSm/b3gZEXKvrK6lidY3dIj6ovQzfjI2sbW9w+1qSJjM0L19Pat7wFPoMHHPsZvlr/F0dMymVNPOiZjW0zOKnF+YcCkX4bgrB8iDs+sbGW/vAsi9p9hDXDbzI47a89j7hsIpEoNC7Kk4uQshufL48wtUiqLUhvDK7M0AYVXM2KYf5e8viH58/vofCp8s/JcrszMW391bQsmmajSSAAAAAElFTkSuQmCC"/>
																</svg>
															</div>
															<p>Трехслойный торт с шоколадны ми прослойками, шоколадом и ягод... <a class="details" href="#">Подробнее</a></p>
														</div>
														<div class="shop_card-info">
															<span class="date">4.250 <span>₽</span></span>
															<span class="separator"></span>
															<span class="item-weight">2.380 г</span>
															<span class="separator"></span>
															<div class="rating">
																<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
															</div>
														</div>
														<div class="button-and-like" >
															<a href="">
																<div class="myButton-cart">
																	<div class="row no-gutters">
																		<div class="col-4 no-pad"><i class="icon-basket-loaded" aria-hidden="true"></i></div>
																		<div class="col-8 no-pad"><p>В корзину</p></div>
																	</div>
																</div>
															</a>

															<a href="">
																<div class="myButton-favourite">
																<i class="icon-heart" aria-hidden="true"></i>
																</div>
															</a>
														</div>

													</div>
												</div>
											</a>
						</div> <!-- /.shop_card -->
					</div>
				</div>

				<div class="col-lg-8">
					<div class="category category-hot">
						<div class="row">
							<div class="col-6">
								<div class="shop_card">
														<a href="#" class="shop_card-link">
															<div class="shop_card-post">
																<div class="shop_card-img"><img class="img-responsive" src="img/shop_kruassan.jpg" alt="Круассан «Классический»"></div>
																<div class="shop_card-content">
																	<div class="shop_card-heading">
																		<h3>Круассан «Классический»</h3>
																		<span>(для выпекания)</span>
																	</div>
																	<div class="shop_card-text">
																		<div class="svg-wrap">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26">
																				<image id="Layer_9_copy" data-name="Layer 9 copy" width="26" height="26" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAMAAACelLz8AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB0VBMVEWRsAD///+RsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsAAAAAB2kDKWAAAAmXRSTlMAABaG04hx95+Sf9X9VcThp6im9aUF/oSMKR3est8BME3MPX2K0eBkGaDrUyDIavkvY5XyM1hf0ug5bjcV6isItcYSjxhGYNzdZwNU8OYiRGIhx13OwrRJEB52ftavhbf0k5jpDmZ3Bprl54FC22ULBxR1WSR4/AywSK7ZQx+cCT/k0HSUW5G6Mb6740D2SkW4872pvCakJ6zNd9ywAAAAAWJLR0SamN9nEgAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+ELGBcEOz+/tTMAAAGRSURBVCjPZdLrVxJRFAXwPQkF8ZAeGkJYRIU9tBJQJJDKiEdPLbMSCw1NLVF8lZZSYWqZhVrp/m+dGQZiDefTzPmtde6+dx2gWAdqNFr5QyiXIgd5SEd9NR02GGkCzLVVZOGRo8eO16H+hJqsbABsdp50NKroFE/DeQZw8aw6xrnzgLtJ7F24qCZeutws91quVNHVa5QPafVUkddHsdPWTvo7VBTA9aArRHNn+IaUtYJuOm9Zya7biNxBlKrwjMUT4qQA7+Le/QcV9JCPlHe0shs9fPyfnvSiVE/ZBz2fSe3nL/ptSA7AoVXsJV8hmor5B4cY8r9GnOnhkTeKuUcxNv62hnwnCOI1QxPIcLI0tIVTgpDltDAjpp3lHJLz7xXiB+koHxdSi9IURvCxPijLJy7J6ZaZykn/XfwMp+hiffmqJGe+uBsr/IZVrmVg43qJTMraBKhDU/I7fmwUHyphD+VKG/WTm15ghr9k+m1MZcvLhnCB/ii3PNsW3Y6Gfyr2UKy/q/920/mCIabZ65Cn7gO2aV41+Sm5qgAAAABJRU5ErkJggg=="/>
																			</svg>
																		</div>
																		<p>Настоящий круассан из Франции, приготовлен на сливочном масле... <a class="details" href="#">Подробнее</a></p>
																	</div>
																	<div class="shop_card-info">
																		<span class="date">400 <span>₽</span></span>
																		<span class="separator"></span>
																		<span class="item-weight">80 г</span>
																		<span class="separator"></span>
																		<div class="rating">
																			<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																			<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																			<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																			<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																			<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																			<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																			<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																			<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																			<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																			<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
																		</div>
																	</div>
																	<div class="button-and-like" >
																		<a href="">
																			<div class="myButton-cart">
																				<div class="row no-gutters">
																					<div class="col-4 no-pad"><i class="icon-basket-loaded" aria-hidden="true"></i></div>
																					<div class="col-8 no-pad"><p>В корзину</p></div>
																				</div>
																			</div>
																		</a>

																		<a href="">
																			<div class="myButton-favourite">
																			<i class="icon-heart" aria-hidden="true"></i>
																			</div>
																		</a>
																	</div>
																</div>
															</div>
														</a>
								</div> <!-- /.shop_card -->
							</div>
							<div class="col-6">
								<div class="shop_card">
														<a href="#" class="shop_card-link">
															<div class="shop_card-post x">
																<div class="shop_card-img"><img class="img-responsive" src="img/shop_donut.jpg" alt="Круассан «Классический»"></div>
																<div class="shop_card-content">
																	<div class="shop_card-heading">
																		<h3>Пончик</h3>
																		<span>с розовой глазурью и посыпкой из белого шоколада</span>
																	</div>
																	<div class="shop_card-text">
																		<div class="svg-wrap">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27" height="26" viewBox="0 0 27 26">
																				<image id="Layer_91_copy_2" data-name="Layer 91 copy 2" width="27" height="26" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAaCAMAAABxVtfCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB6VBMVEWRsAD///+RsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsAAAAADwsJK0AAAAoXRSTlMAAEuDu+Ly47iCQHXko14mVKbl5lI58P59NyCo6id7fAUBwHQMxcNgfmIUbj4pPQaVGgtrK5QPIpH9iPEOTWVKaQpvuQNsMNkjhvfUaNyFVgR2G1sQniiKHPs0r3ITRu4Cwb016YGbmZLat7KP7Um2xqq6jpzLYdt4ZrMt89Ed0vhCUegxWrTdlqT1+aIS7ItcNkxFc9dfZwmu/O+dCNbPrVjSLWsAAAABYktHRKKw3d+MAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH4QsYFwUyX3g81gAAAdBJREFUKM9lkulbUlEQxmfKIHHJEEGkNJTcTQQ1zSwITCUlyV1MUsNMy1ZtkxaXFlMrs8wy6v1PPfdyj+t8OPPM+T0zZ87MSyTtyNGkYzr98WQDS5MkJRWpaeknMk4akWnax7LMFhiEz7YS59hw6vQuy0XeGbvw9vwCYnacLUSRZMUoKd15Vs0oU6GIylFxDpVEJqcIqlwqdKNaZaih2vPC19UrwYVEH2hQmBOy3MXGS5c9XuYrPjsbUMbkR5O4vtrcQq0NAWPgWhtzcrudOQim67qO0A2qLvTa0OmiLg+6lZI9vX39AxSuIZSLzEHcVAv3QPn6UOTWsJMiI+JiNES3o9ofxnSJbobz6Q7GqdYC/d1KjVnhV9nEJN27D8eE2auX3XIFpvjBwxx+9JjMT55Ow0Rk8WhsBs+eAy+4/SX5wvRKmVhQS+xC29jsVOx1EAWU3q8Ve/P2nTjnkKQ8Nh9BYIFcWNTge8TCH5CmNmL9+GnJT2T7LGfWF13OW5FLX/0i5ulAiPaYhpxQ9/AV3w6xNQwldluH0QPsO3KlJnoR3cfGsb6rpRn8+ClZx4YRjXs1+Gvz9x9fsdvtzh6ZXdo6oE/6WzQZi8fj//5n7Gh3G0lmakunBjOIAAAAAElFTkSuQmCC"/>
																			</svg>
																		</div>
																		<p>Донат с глазурью из темного шоколада с кусочками шококлада... <a class="details" href="#">Подробнее</a></p>
																	</div>

																	<div class="shop_card-info">
																		<span class="date">750 <span>₽</span></span>
																		<span class="separator"></span>
																		<span class="item-weight">210 г</span>
																		<span class="separator"></span>
																		<div class="rating">
																			<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																			<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																			<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																			<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																			<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																			<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																			<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																			<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																			<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																			<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
																		</div>
																	</div>
																	<div class="button-and-like" >
																		<a href="">
																			<div class="myButton-cart">
																				<div class="row no-gutters">
																					<div class="col-4 no-pad"><i class="icon-basket-loaded" aria-hidden="true"></i></div>
																					<div class="col-8 no-pad"><p>В корзину</p></div>
																				</div>
																			</div>
																		</a>

																		<a href="">
																			<div class="myButton-favourite">
																			<i class="icon-heart" aria-hidden="true"></i>
																			</div>
																		</a>
																	</div>

																	
																</div>
															</div>
														</a>
								</div> <!-- /.shop_card -->
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="category category-new">
						<div class="shop_card">
												<a href="#" class="shop_card-link">
													<div class="shop_card-post">
														<div class="shop_card-img"><img class="img-responsive" src="img/shop_capcake.jpg" alt="Круассан «Классический»"></div>
														<div class="shop_card-content">
															<div class="shop_card-heading">
																<h3>Чернично-шоколадный капкейк</h3>
																<span>с мятой и голубикой</span>
															</div>
															<div class="shop_card-text">
																<div class="svg-wrap">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="26" viewBox="0 0 25 26">
																		<image id="Layer_921_copy_3" data-name="Layer 921 copy 3" width="25" height="26" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAaCAMAAAB1owf/AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB9VBMVEWRsAD///+RsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsACRsAAAAABr6UZQAAAApXRSTlMAAA6kisRvoLCpcQL4xfDRnMFPjFtNyb2IM3MURKhyYLrq9u9qMPKV2BF8uPfjt9fMHHe0meaEDZ9sRSpaVeD6/OjTzsvS7f7psX8nZVAVCCQ2QYGPjoNXR8CyLDe5+VO/Mh7zWTU6VNpDDx1dzyi1INWAppZjXvHsL0lL+/X0zWl7BaNAdSGbAXmiu5frGgsTnQal2wqsRkrQIn5WmIXDi7bClKuqnFycAAAAAWJLR0Smt7AblQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+ELGBcGGK/upsMAAAHRSURBVCjPXdHpV5JBFAbwe8EWEBVxydByI9PMJSkXWlQwjSTJpSgNJK1MK3OpXDK03CWy0mzPzJ7/s/sCL3SYDzP3zO+cmTvPEEWHRhtZWR0qUBIOHDx0WKdPThSNQZ+SmmZMB0wJYkK0yEDm/5KVDRzJORq+x4zcuOTh2PH8gsKi4hTLCeaSk3HRlYaXslPlp1FRiaq45FTHWjxTYz17rlaVuno02M7natT3aHEhIhdRrr3UiCY02x0t1Zdb2644cVWRdriudZD7emdXZndGz42bnk4334JN5HZvH+7E7omm4/WJNPX7KyhR7mKAaPDe/SQyPZDNoYfDimSJjPge0eO2J6M0BDwdM2McEx3dxZjkkWd4Ti9gn5qGZ6YKmKWXmHul7wvMB6axQGR4/UanxFm6KFM/5CgjlsyQDpZBdVgh6nWKNPhEDGZuXRVZg4kC60QbQZG3IeZ32BzAeyWDYCo55olqQlJ/GGdeKGJHSziddny0zBFZBqXekq1tKyMvkuiUkfCJXKK0k8aMzy5Es/aADC76Agk7/St/a2Tfd/V/8MPolE42ibZ/8q9dG2I/9xslsGbDvucF/gDQxsQ9qav3e/cr/f7Vnd2txb9livwD9Sh4LT5K7IsAAAAASUVORK5CYII="/>
																	</svg>
																</div>
																<p>Ванильный капкейк с начинкой из черники, украшен нежным сливочно... <a class="details" href="#">Подробнее</a></p>
															</div>
															<div class="shop_card-info">
																<span class="date">4.250 <span>₽</span></span>
																<span class="separator"></span>
																<span class="item-weight">2.380 г</span>
																<span class="separator"></span>
																<div class="rating">
																	<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
																	<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
																	<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
																	<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
																	<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
																	<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
																	<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
																	<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
																	<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
																	<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
																</div>
															</div>
															<div class="button-and-like" >
																<a href="">
																	<div class="myButton-cart">
																		<div class="row no-gutters">
																			<div class="col-4 no-pad"><i class="icon-basket-loaded" aria-hidden="true"></i></div>
																			<div class="col-8 no-pad"><p>В корзину</p></div>
																		</div>
																	</div>
																</a>

																<a href="">
																	<div class="myButton-favourite">
																	<i class="icon-heart" aria-hidden="true"></i>
																	</div>
																</a>
															</div>
														</div>
													</div>
												</a>
						</div> <!-- /.shop_card -->
					</div>
				</div>

			</div> <!-- /.row -->
		</div> <!-- /.shop_cards -->

			<div class="row">
				<div class="col-12"><a href="#" class="more"><span class="more_pic"></span><span>Показать ещё</span></a></div>
			</div>

		</div> <!-- / .container -->

	</section>
	<!-- ======================== SECTION SHOP END ======================= -->



	<div class="bg-wrap"> <!-- BACKGROUND IMAGE -->


	<!-- ======================== SECTION CATEGORIES START ======================= -->
	<section class="categories">

		<div class="container">
			
			<div class="row">
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Торты</span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Десерты</span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Наборы</span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Акции</span>
						</a>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Доставка</span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Оплата</span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>О нас</span>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 colors">
					<div class="nav-block">
						<a href="#">
						<div class="icon-block"></div>
						<span>Вопрос-ответ</span>
						</a>
					</div>
				</div>
			</div>

		</div>
		
	</section>
	<!-- ======================== SECTION CATEGORIES END ======================= -->


	<!-- ======================== SECTION ABOUT END ======================= -->
	<section class="about">

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Что про нас говорят</h2>
				</div>
			</div>
		</div>

		<div class="container-fluid relative">

			<div class="svg-line"></div>

			<div class="slider slider_about">


				<div class="slider_item slider_item1">

					<div class="slider_img">
						<img src="img/about-sl1.png" alt="Новинка" class="img-responsive">
					</div>

					<div class="slider_content">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h4>Александр Константиновский</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</div>
					</div> <!-- / slider_content -->

				</div> <!-- / slider_item -->

				<div class="slider_item slider_item2">

					<div class="slider_img">
						<img src="img/about-sl2-1.png" alt="Новинка" class="img-responsive">
					</div>

					<div class="slider_content">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h4>Наталья Александрова</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</div>
					</div> <!-- / slider_content -->

				</div> <!-- / slider_item -->

				<div class="slider_item slider_item3">

					<div class="slider_img">
						<img src="img/about-sl3.png" alt="Новинка" class="img-responsive">
					</div>

					<div class="slider_content">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h4>Иван Сергеев</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</div>
					</div> <!-- / slider_content -->

				</div> <!-- / slider_item -->

				<div class="slider_item slider_item2">

					<div class="slider_img">
						<img src="img/about-sl2-1.png" alt="Новинка" class="img-responsive">
					</div>

					<div class="slider_content">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<h4>Александр Константиновский</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</div>
					</div> <!-- / slider_content -->

				</div> <!-- / slider_item -->

			</div> <!-- / .slider_main -->

		</div> <!-- / .container-fluid -->

	</section> <!-- / .about -->
	<!-- ======================== SECTION ABOUT END ======================= -->

	</div> <!-- / BACKGROUND IMAGE -->

	<section class="advantages">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="advantages_content">
						<div class="advantages_logo">
							<img src="img/adv-logo.png" alt="logo">
						</div>
						<div class="advantages_list">
							<ul>
								<li>
									<h3>Быстрая доставка</h3>
									<p>Доставка тортов осуществляется в специально оборудованном транспорте прямо до Вашего дома</p>
								</li>
								<li>
									<h3>Удобные способы оплаты</h3>
									<p>Оплата производится наличными курьеру или банковскими картами VISA, MASTERCARD. Можно оплатить через сайт</p>
								</li>
								<li>
									<h3>Вкусно и качественно</h3>
									<p>Неповторимый вкус наших тортов удовлетворяет даже самых взыскательных шеф-кондитеров</p>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>






	<!-- =====================================
	FOOTER START
	===================================== -->
	<?php include("blocks/footer.php");?>
	<!-- =====================================
	FOOTER END
	===================================== -->


	





	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>
	<script>
		$(function(){

			if($(window).width() > 1024) {
				$(".shop_card").mouseover(function() {
	        $(this).find('.button-and-like').show()
	    	});

	    	$(".shop_card").mouseout(function() {
	        $(this).find('.button-and-like').hide()
	    	});
			}
			
		});
	</script>
	

</body>
</html>
