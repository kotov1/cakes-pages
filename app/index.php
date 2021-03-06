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
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="55" viewBox="0 0 61 62">
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
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="55" viewBox="0 0 61 62">
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

				<div class="col-lg-8 col-sm-12">

					<div class="category category-hits">
						<div class="row">
							<div class="col-lg-12">
								<div class="shop_card-wrap">
									<div class="shop_card">
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
											</div> <!-- /.shop_card-content -->
										</div> <!-- /.shop_card-post -->
									</div> <!-- /.shop_card -->
								</div> <!-- /.shop_card-wrap -->
							</div> <!-- /.col-lg-12 -->

						</div> <!-- / .row -->
					</div> <!-- / .category-hits -->

					<div class="category category-hot">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="shop_card-wrap">
									<div class="shop_card">
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
											</div> <!-- /.shop_card-content -->
										</div> <!-- /.shop_card-post -->
									</div> <!-- /.shop_card -->
								</div> <!-- /.shop_card-wrap -->
							</div> <!-- /.col-lg-6.col-md-6.col-sm-12 -->

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="shop_card-wrap">
									<div class="shop_card">
										<div class="shop_card-post">
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
											</div> <!-- /.shop_card-content -->
										</div> <!-- /.shop_card-post -->
									</div> <!-- /.shop_card -->
								</div> <!-- /.shop_card-wrap -->
							</div>
							<!-- <div class="col-6">

							</div> -->
						</div>
					</div>

				</div>

				<div class="col-lg-4 col-md-12">
					<div class="category category-new">
						<div class="row">

							<div class="col-lg-12 col-md-6 col-sm-12">
								<div class="shop_card-wrap">
									<div class="shop_card">
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
											</div> <!-- /.shop_card-content -->
										</div> <!-- /.shop_card-post -->
									</div> <!-- /.shop_card -->
								</div> <!-- /.shop_card-wrap -->
							</div> <!-- /.col-lg-12.col-md-6.col-sm-12 -->

							<div class="col-lg-12 col-md-6 col-sm-12">
								<div class="shop_card-wrap">
									<div class="shop_card">
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
									</div> <!-- /.shop_card -->
								</div>
							</div>
						</div>
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
				<div class="col-lg-3 col-sm-6 col-12 colors">
					<div class="nav-block">
						<a href="#">
						<!-- <div class="icon-block"></div> -->
						<div class="svg-wrap">
							<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 39.41 39.26"><defs><style>.cls-11{fill:none;}.cls-21{clip-path:url(#clip-path);}</style><clipPath id="clip-path" transform="translate(-8.65 -8.87)"><rect class="cls-10" x="8.65" y="8.87" width="39.41" height="39.26"/></clipPath></defs><title>Vector Smart Object1</title><g class="cls-20"><path d="M47.41,43.25H45.23V35.67a3.08,3.08,0,0,0-3.08-3.08H41.2v-7.9a2.76,2.76,0,0,0-2.75-2.75H30.77V15.58a0.65,0.65,0,0,0-.65-0.65H29V14a2.13,2.13,0,0,0,1.48-2c0-1-1.26-2.44-1.65-2.86a0.65,0.65,0,0,0-1,0c-0.39.42-1.65,1.87-1.65,2.86a2.13,2.13,0,0,0,1.48,2v1H26.6a0.65,0.65,0,0,0-.65.65v6.35H18.27a2.76,2.76,0,0,0-2.75,2.75v5.7a0.65,0.65,0,0,0,1.3,0v-5.7a1.46,1.46,0,0,1,1.46-1.46H38.45a1.46,1.46,0,0,1,1.46,1.46v7.9H14.57a3.08,3.08,0,0,0-3.08,3.08V41a0.65,0.65,0,0,0,1.3,0V35.67a1.78,1.78,0,0,1,1.78-1.78H42.15a1.78,1.78,0,0,1,1.78,1.78v7.58H9.3a0.65,0.65,0,0,0-.65.65,4.23,4.23,0,0,0,4.23,4.23H43.83a4.23,4.23,0,0,0,4.23-4.23,0.65,0.65,0,0,0-.65-0.65M28.36,10.52a3.93,3.93,0,0,1,.83,1.42,0.83,0.83,0,1,1-1.66,0,3.93,3.93,0,0,1,.83-1.42m-1.12,5.71h2.23v5.71H27.24V16.23ZM43.83,46.83H12.88A2.94,2.94,0,0,1,10,44.55H46.69a2.94,2.94,0,0,1-2.86,2.29" transform="translate(-8.65 -8.87)"/><path d="M18.86,26.34a1.73,1.73,0,0,1,1,.78A2.83,2.83,0,0,0,22,28.36h0A2.87,2.87,0,0,0,24,27.13a1.87,1.87,0,0,1,1.17-.83,1.78,1.78,0,0,1,1.13.75,3,3,0,0,0,2.11,1.17h0a3.06,3.06,0,0,0,2.13-1.15,1.82,1.82,0,0,1,1.07-.71h0a1.49,1.49,0,0,1,.92.73,2.57,2.57,0,0,0,1.89,1.2,2.89,2.89,0,0,0,2.07-1.11,1.89,1.89,0,0,1,1.17-.76,0.65,0.65,0,0,0,0-1.3,3,3,0,0,0-2.11,1.13A1.84,1.84,0,0,1,34.5,27a1.49,1.49,0,0,1-.92-0.73,2.57,2.57,0,0,0-1.89-1.2,2.79,2.79,0,0,0-2,1.09,1.94,1.94,0,0,1-1.22.78h0a1.85,1.85,0,0,1-1.19-.78A2.91,2.91,0,0,0,25.2,25h0a3,3,0,0,0-2.12,1.25,1.81,1.81,0,0,1-1.1.8h0a1.76,1.76,0,0,1-1.09-.8,2.77,2.77,0,0,0-2-1.22h0a0.65,0.65,0,0,0,0,1.3h0" transform="translate(-8.65 -8.87)"/><path d="M14.76,37.12A1.89,1.89,0,0,1,16,38a3,3,0,0,0,2.2,1.33h0A3.05,3.05,0,0,0,20.37,38a2.08,2.08,0,0,1,1.33-.93h0a2,2,0,0,1,1.27.84,3.2,3.2,0,0,0,2.27,1.26h0a3.3,3.3,0,0,0,2.29-1.24,2,2,0,0,1,1.23-.8,1.66,1.66,0,0,1,1.06.82,2.76,2.76,0,0,0,2,1.29,3.07,3.07,0,0,0,2.22-1.19,2.15,2.15,0,0,1,1.33-.85,1.69,1.69,0,0,1,1.13.78,2.78,2.78,0,0,0,2,1.19h0a3.3,3.3,0,0,0,2.29-1.24,2,2,0,0,1,1.23-.8,0.65,0.65,0,1,0,0-1.3A3,3,0,0,0,39.93,37a2.22,2.22,0,0,1-1.37.87,1.66,1.66,0,0,1-1.08-.76,2.84,2.84,0,0,0-2.07-1.22h0a3.26,3.26,0,0,0-2.22,1.22,2.1,2.1,0,0,1-1.27.82,1.66,1.66,0,0,1-1.06-.82,2.76,2.76,0,0,0-2-1.29A3,3,0,0,0,26.62,37a2.21,2.21,0,0,1-1.38.87h0A2.07,2.07,0,0,1,23.91,37a3.13,3.13,0,0,0-2.2-1.23h0a3.2,3.2,0,0,0-2.27,1.35,2,2,0,0,1-1.25.89h0a2,2,0,0,1-1.23-.9,3,3,0,0,0-2.17-1.31,0.65,0.65,0,0,0,0,1.3h0" transform="translate(-8.65 -8.87)"/></g></svg>

							<!-- SVG с обводкой -->
							<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 39.41 39.26"><defs><style>.cls-100{fill:none; stroke:#fff;stroke-miterlimit:1;stroke-width:4px;stroke-opacity: 1;}.cls-200{clip-path:url(#clip-path); stroke:#fff;stroke-miterlimit:1;stroke-width:4px;stroke-opacity: 1;}</style><clipPath id="clip-path" transform="translate(-8.65 -8.87)"><rect class="cls-100" x="8.65" y="8.87" width="39.41" height="39.26"/></clipPath></defs><title>Vector Smart Object1</title><g class="cls-200"><path d="M47.41,43.25H45.23V35.67a3.08,3.08,0,0,0-3.08-3.08H41.2v-7.9a2.76,2.76,0,0,0-2.75-2.75H30.77V15.58a0.65,0.65,0,0,0-.65-0.65H29V14a2.13,2.13,0,0,0,1.48-2c0-1-1.26-2.44-1.65-2.86a0.65,0.65,0,0,0-1,0c-0.39.42-1.65,1.87-1.65,2.86a2.13,2.13,0,0,0,1.48,2v1H26.6a0.65,0.65,0,0,0-.65.65v6.35H18.27a2.76,2.76,0,0,0-2.75,2.75v5.7a0.65,0.65,0,0,0,1.3,0v-5.7a1.46,1.46,0,0,1,1.46-1.46H38.45a1.46,1.46,0,0,1,1.46,1.46v7.9H14.57a3.08,3.08,0,0,0-3.08,3.08V41a0.65,0.65,0,0,0,1.3,0V35.67a1.78,1.78,0,0,1,1.78-1.78H42.15a1.78,1.78,0,0,1,1.78,1.78v7.58H9.3a0.65,0.65,0,0,0-.65.65,4.23,4.23,0,0,0,4.23,4.23H43.83a4.23,4.23,0,0,0,4.23-4.23,0.65,0.65,0,0,0-.65-0.65M28.36,10.52a3.93,3.93,0,0,1,.83,1.42,0.83,0.83,0,1,1-1.66,0,3.93,3.93,0,0,1,.83-1.42m-1.12,5.71h2.23v5.71H27.24V16.23ZM43.83,46.83H12.88A2.94,2.94,0,0,1,10,44.55H46.69a2.94,2.94,0,0,1-2.86,2.29" transform="translate(-8.65 -8.87)"/><path d="M18.86,26.34a1.73,1.73,0,0,1,1,.78A2.83,2.83,0,0,0,22,28.36h0A2.87,2.87,0,0,0,24,27.13a1.87,1.87,0,0,1,1.17-.83,1.78,1.78,0,0,1,1.13.75,3,3,0,0,0,2.11,1.17h0a3.06,3.06,0,0,0,2.13-1.15,1.82,1.82,0,0,1,1.07-.71h0a1.49,1.49,0,0,1,.92.73,2.57,2.57,0,0,0,1.89,1.2,2.89,2.89,0,0,0,2.07-1.11,1.89,1.89,0,0,1,1.17-.76,0.65,0.65,0,0,0,0-1.3,3,3,0,0,0-2.11,1.13A1.84,1.84,0,0,1,34.5,27a1.49,1.49,0,0,1-.92-0.73,2.57,2.57,0,0,0-1.89-1.2,2.79,2.79,0,0,0-2,1.09,1.94,1.94,0,0,1-1.22.78h0a1.85,1.85,0,0,1-1.19-.78A2.91,2.91,0,0,0,25.2,25h0a3,3,0,0,0-2.12,1.25,1.81,1.81,0,0,1-1.1.8h0a1.76,1.76,0,0,1-1.09-.8,2.77,2.77,0,0,0-2-1.22h0a0.65,0.65,0,0,0,0,1.3h0" transform="translate(-8.65 -8.87)"/><path d="M14.76,37.12A1.89,1.89,0,0,1,16,38a3,3,0,0,0,2.2,1.33h0A3.05,3.05,0,0,0,20.37,38a2.08,2.08,0,0,1,1.33-.93h0a2,2,0,0,1,1.27.84,3.2,3.2,0,0,0,2.27,1.26h0a3.3,3.3,0,0,0,2.29-1.24,2,2,0,0,1,1.23-.8,1.66,1.66,0,0,1,1.06.82,2.76,2.76,0,0,0,2,1.29,3.07,3.07,0,0,0,2.22-1.19,2.15,2.15,0,0,1,1.33-.85,1.69,1.69,0,0,1,1.13.78,2.78,2.78,0,0,0,2,1.19h0a3.3,3.3,0,0,0,2.29-1.24,2,2,0,0,1,1.23-.8,0.65,0.65,0,1,0,0-1.3A3,3,0,0,0,39.93,37a2.22,2.22,0,0,1-1.37.87,1.66,1.66,0,0,1-1.08-.76,2.84,2.84,0,0,0-2.07-1.22h0a3.26,3.26,0,0,0-2.22,1.22,2.1,2.1,0,0,1-1.27.82,1.66,1.66,0,0,1-1.06-.82,2.76,2.76,0,0,0-2-1.29A3,3,0,0,0,26.62,37a2.21,2.21,0,0,1-1.38.87h0A2.07,2.07,0,0,1,23.91,37a3.13,3.13,0,0,0-2.2-1.23h0a3.2,3.2,0,0,0-2.27,1.35,2,2,0,0,1-1.25.89h0a2,2,0,0,1-1.23-.9,3,3,0,0,0-2.17-1.31,0.65,0.65,0,0,0,0,1.3h0" transform="translate(-8.65 -8.87)"/></g></svg>

						

						</div>
						<!-- <svg id="Layer_line_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 844.8 5.02" style="position: relative;top: 18px;"><defs><style>.cls-line-1,.cls-line-3{fill:none;}.cls-line-2{clip-path:url(#clip-path);}.cls-line-3{stroke:#0b0b0b;stroke-miterlimit:10;}</style><clipPath id="clip-path" transform="translate(0 -15.98)"><rect class="cls-line-1" y="15.98" width="844.8" height="5.02"/></clipPath>
					</defs><title>Vector Smart Object2</title><g class="cls-line-2"><path class="cls-line-3" d="M844.57,16.49h-0.26c-6,0-6,4-12.07,4s-6-4-12.07-4-6,4-12.07,4-6-4-12.07-4-6,4-12.06,4-6-4-12.07-4-6,4-12.07,4-6-4-12.07-4-6,4-12.07,4-6-4-12.07-4-6,4-12.06,4-6-4-12.06-4-6,4-12.07,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.05-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4-6,4-12.06,4-6-4-12.06-4" transform="translate(0 -15.98)"/></g></svg> -->



						<span>Торты</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- <div class="icon-block"></div> -->
						<div class="svg-wrap">
							<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 42.29 45.03"><defs><style>.cls-11{fill:none;}.cls-21{clip-path:url(#clip-path);}.cls-31{fill:#231f20;}.cls-41{clip-path:url(#clip-path-2);}</style><clipPath id="clip-path" transform="translate(-5.83 -5.84)"><rect class="cls-1" x="5.83" y="5.03" width="42.96" height="46.8"/></clipPath><clipPath id="clip-path-2" transform="translate(-5.83 -5.84)"><rect class="cls-1" x="5.83" y="5.03" width="42.96" height="46.8"/></clipPath></defs><title>Vector Smart Object</title><g class="cls-21"><path class="cls-31" d="M14.86,14.79a3.37,3.37,0,0,0,2.39-1,0.8,0.8,0,0,0-1.13-1.13,1.79,1.79,0,0,1-2.52,0,0.8,0.8,0,0,0-1.13,1.13,3.37,3.37,0,0,0,2.39,1" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M18.78,39.26a0.8,0.8,0,1,0-1.45.68l2.21,4.72a0.8,0.8,0,0,0,.73.46A0.8,0.8,0,0,0,21,44Z" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M39,38.87a0.8,0.8,0,0,0-1.07.39L35.76,44A0.8,0.8,0,0,0,36.14,45a0.81,0.81,0,0,0,.34.07,0.79,0.79,0,0,0,.72-0.46l2.21-4.72A0.8,0.8,0,0,0,39,38.87" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M32.18,40.48a0.8,0.8,0,0,0-.91.67l-0.73,4.72a0.8,0.8,0,0,0,.66.91h0.13a0.8,0.8,0,0,0,.79-0.68l0.74-4.72a0.8,0.8,0,0,0-.67-0.91" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M24.56,40.48a0.8,0.8,0,0,0-.67.91l0.74,4.72a0.8,0.8,0,0,0,.79.68h0.13a0.8,0.8,0,0,0,.67-0.91l-0.74-4.72a0.8,0.8,0,0,0-.91-0.67" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M28.38,22a33.6,33.6,0,0,0,9.53-1.28,0.8,0.8,0,1,0-.46-1.53,32,32,0,0,1-9.07,1.21,0.8,0.8,0,0,0,0,1.6" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M13.69,28a21.2,21.2,0,0,0,2.55,1.12,0.85,0.85,0,0,0,.27,0,0.8,0.8,0,0,0,.27-1.55,20.05,20.05,0,0,1-2.35-1A0.8,0.8,0,1,0,13.69,28" transform="translate(-5.83 -5.84)"/><path class="cls-31" d="M23.31,30.71a39.53,39.53,0,0,0,4.86.3,41,41,0,0,0,5.32-.35,0.8,0.8,0,1,0-.21-1.59,39.12,39.12,0,0,1-9.78.05,0.8,0.8,0,1,0-.19,1.59" transform="translate(-5.83 -5.84)"/></g><g class="cls-4"><path class="cls-31" d="M37.07,29.2a0.79,0.79,0,0,0,1,.56A23.14,23.14,0,0,0,42.76,28,0.8,0.8,0,0,0,42,26.54a21.59,21.59,0,0,1-4.39,1.68,0.8,0.8,0,0,0-.56,1" transform="translate(-5.83 -5.84)"/><path class="cls-31"
							d="M48.12,30.9a6.76,6.76,0,0,0-2.9-5.17,5,5,0,0,0,.08-0.9c0-2.35-1.63-4.55-4.62-6.21-0.07-1.63-.56-6.88-3.92-9.93a9.05,9.05,0,0,0-7.32-2.16,0.8,0.8,0,0,0-.64.44,0.81,0.81,0,0,0,0,.77c0.51,0.82,1.4,2.81.91,3.7a1.71,1.71,0,0,1-1.58.59,25.75,25.75,0,0,0-5.89.73,7.62,7.62,0,0,0-.82-1,8.42,8.42,0,0,0-6.75-2.53,6.17,6.17,0,0,0-1.63-2C11.48,6,9.27,5.58,6.52,6a0.8,0.8,0,1,0,.24,1.58c2.28-.35,4.08,0,5.32.94a4.37,4.37,0,0,1,1,1.1,6.2,6.2,0,0,0-2.25,1.43l-0.73.73c-2.73,2.73-2.4,7.5.73,10.64,0.19,0.19.4,0.37,0.6,0.53a4.83,4.83,0,0,0-.29,2.77,6.75,6.75,0,0,0-2.9,5.17,5.91,5.91,0,0,0,1.55,3.85l3,7.44,0,0.08c2.55,4.68,4.7,5.88,9.35,7.66a18.39,18.39,0,0,0,6.19.93,18.23,18.23,0,0,0,6.18-.93c4.66-1.8,6.81-3,9.31-7.58l3.88-9.52h0a5.26,5.26,0,0,0,.38-1.93m-36.89-18L12,12.18a4.64,4.64,0,0,1,1.77-1.09,5.47,5.47,0,0,1,.12.57,0.8,0.8,0,0,0,.8.73H14.7a0.8,0.8,0,0,0,.73-0.86,6.46,6.46,0,0,0-.13-0.72h0.17a7,7,0,0,1,4.85,2.12,5.8,5.8,0,0,1,.9,1.16h0a5.92,5.92,0,0,1,.82,2.74s0,0.08,0,.12a5.57,5.57,0,0,1,0,.88s0,0.06,0,.09a5.91,5.91,0,0,1-.51,1.73l0,0.1a6,6,0,0,1-.45.76l-0.07.1a6.22,6.22,0,0,1-.59.7,6,6,0,0,1-.76.63l-0.06,0a6.3,6.3,0,0,1-.84.48l0,0a5.89,5.89,0,0,1-2.86.53H15.71a6.06,6.06,0,0,1-.93-0.15l-0.09,0a5.84,5.84,0,0,1-.91-0.31l0,0A5.67,5.67,0,0,1,12.87,22h0a5.93,5.93,0,0,1-.9-0.74c-2.51-2.51-2.84-6.27-.73-8.38m1.28,13.78a0.8,0.8,0,0,0,.29-0.87,3.56,3.56,0,0,1-.15-1,3.24,3.24,0,0,1,.16-1L13,23.92a7.33,7.33,0,0,0,1.33.47l0.21,0.05,0.4,0.08,0.24,0,0.41,0h0.23l0.36,0a7.64,7.64,0,0,0,1.14-.09h0.09l0.52-.11h0a7.54,7.54,0,0,0,1.58-.58h0l0.38-.22,0.21-.12,0.3-.2,0.3-.22L21,22.88c0.17-.14.34-0.29,0.5-0.45a8,8,0,0,0,.67-0.78l0.13-.17a7.23,7.23,0,0,0,.95-1.8l0.05-.14a7.38,7.38,0,0,0,.38-2c0-.08,0-0.14,0-0.22s0-.16,0-0.24a7.49,7.49,0,0,0-.23-1.81,0.29,0.29,0,0,0,0-.07,7.19,7.19,0,0,0-.34-1,24.76,24.76,0,0,1,5.1-.57,3.14,3.14,0,0,0,3-1.42c0.7-1.27.17-3-.34-4.15a7.15,7.15,0,0,1,4.87,1.8C39.08,13,39.1,19,39.1,19.1a0.8,0.8,0,0,0,.43.72c2.69,1.4,4.18,3.18,4.18,5a3.5,3.5,0,0,1-.15,1,0.8,0.8,0,0,0,.29.87c1.22,0.9,2.67,2.36,2.67,4.21a3.4,3.4,0,0,1-.11.88h0a3.33,3.33,0,0,0-.65-0.22H45.64A3.62,3.62,0,0,0,45,31.45H44.9a4.8,4.8,0,0,0-.73.06l-0.15,0a5.41,5.41,0,0,0-.75.2l-0.14,0a7.92,7.92,0,0,0-.78.33l-0.06,0c-0.27.14-.55,0.3-0.83,0.48l-0.17.11c-0.27.18-.56,0.38-0.84,0.59l-0.16.13c-0.3.24-.59,0.49-0.9,0.76-2.12-1.44-5.09-.48-7.31,1.43a6,6,0,0,0-7.3,0c-0.17-.15-0.34-0.28-0.51-0.41l-0.16-.11-0.4-.27-0.17-.11L23,34.41h0l-0.57-.28-0.16-.06-0.44-.17-0.17-.06-0.58-.17c-0.2,0-.39-0.08-0.58-0.1l-0.16,0-0.44,0H19.72a4.45,4.45,0,0,0-1.12.15l-0.15,0-0.4.15-0.14.07a4.33,4.33,0,0,0-.5.28l-0.56-.49-0.18-.15-0.38-.3-0.21-.16-0.35-.25-0.22-.14-0.33-.21-0.22-.13-0.32-.18-0.22-.11L14.09,32l-0.2-.09-0.33-.12-0.18-.06L13,31.59l-0.12,0-0.48-.08H12.3l-0.37,0H11.77l-0.29,0-0.17,0L11,31.54l-0.17,0-0.25.08-0.16.07-0.24.11-0.15.08L10,32a3.67,3.67,0,0,1-.16-1.07c0-1.84,1.45-3.31,2.67-4.21M42.44,41.63c-2.25,4.13-4,5.1-8.45,6.82a19.65,19.65,0,0,1-11.22,0c-4.43-1.7-6.19-2.67-8.49-6.89l-3-7.5h0l-0.31-.76c2-1.11,5.21,1.9,5.88,2.56l0.56,0.55,0.56-.55c1.77-1.75,4.73-.1,6.29,1.43l0.57,0.56,0.56-.56a4.42,4.42,0,0,1,6.21,0l0.56,0.56,0.57-.56c1.42-1.41,4-2.92,5.79-1.76a2.37,2.37,0,0,1,.41.33l0.56,0.56L40,35.85l0.38-.37,0.05,0,0.22-.2,0.11-.1L41,35l0.15-.12,0.19-.16,0.19-.14,0.19-.15,0.22-.15,0.2-.13L42.33,34l0.2-.12,0.24-.14L43,33.6l0.24-.12,0.22-.1,0.24-.1,0.23-.07,0.23-.07,0.25,0,0.21,0H45a1.86,1.86,0,0,1,.81.24Z" transform="translate(-5.83 -5.84)"/></g></svg>

							<!-- SVG с обводкой -->
							<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 42.29 45.03"><defs><style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{stroke:#fff;stroke-miterlimit:1;stroke-width:4px;stroke-opacity: 1;}.cls-4{clip-path:url(#clip-path-2);}</style><clipPath id="clip-path" transform="translate(-5.83 -5.84)"><rect class="cls-1" x="5.83" y="5.03" width="42.96" height="46.8"/></clipPath><clipPath id="clip-path-2" transform="translate(-5.83 -5.84)"><rect class="cls-1" x="5.83" y="5.03" width="42.96" height="46.8"/></clipPath></defs><title>Vector Smart Object</title><g class="cls-2"><path class="cls-3" d="M14.86,14.79a3.37,3.37,0,0,0,2.39-1,0.8,0.8,0,0,0-1.13-1.13,1.79,1.79,0,0,1-2.52,0,0.8,0.8,0,0,0-1.13,1.13,3.37,3.37,0,0,0,2.39,1" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M18.78,39.26a0.8,0.8,0,1,0-1.45.68l2.21,4.72a0.8,0.8,0,0,0,.73.46A0.8,0.8,0,0,0,21,44Z" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M39,38.87a0.8,0.8,0,0,0-1.07.39L35.76,44A0.8,0.8,0,0,0,36.14,45a0.81,0.81,0,0,0,.34.07,0.79,0.79,0,0,0,.72-0.46l2.21-4.72A0.8,0.8,0,0,0,39,38.87" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M32.18,40.48a0.8,0.8,0,0,0-.91.67l-0.73,4.72a0.8,0.8,0,0,0,.66.91h0.13a0.8,0.8,0,0,0,.79-0.68l0.74-4.72a0.8,0.8,0,0,0-.67-0.91" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M24.56,40.48a0.8,0.8,0,0,0-.67.91l0.74,4.72a0.8,0.8,0,0,0,.79.68h0.13a0.8,0.8,0,0,0,.67-0.91l-0.74-4.72a0.8,0.8,0,0,0-.91-0.67" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M28.38,22a33.6,33.6,0,0,0,9.53-1.28,0.8,0.8,0,1,0-.46-1.53,32,32,0,0,1-9.07,1.21,0.8,0.8,0,0,0,0,1.6" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M13.69,28a21.2,21.2,0,0,0,2.55,1.12,0.85,0.85,0,0,0,.27,0,0.8,0.8,0,0,0,.27-1.55,20.05,20.05,0,0,1-2.35-1A0.8,0.8,0,1,0,13.69,28" transform="translate(-5.83 -5.84)"/><path class="cls-3" d="M23.31,30.71a39.53,39.53,0,0,0,4.86.3,41,41,0,0,0,5.32-.35,0.8,0.8,0,1,0-.21-1.59,39.12,39.12,0,0,1-9.78.05,0.8,0.8,0,1,0-.19,1.59" transform="translate(-5.83 -5.84)"/></g><g class="cls-4"><path class="cls-3" d="M37.07,29.2a0.79,0.79,0,0,0,1,.56A23.14,23.14,0,0,0,42.76,28,0.8,0.8,0,0,0,42,26.54a21.59,21.59,0,0,1-4.39,1.68,0.8,0.8,0,0,0-.56,1" transform="translate(-5.83 -5.84)"/><path class="cls-3"
							d="M48.12,30.9a6.76,6.76,0,0,0-2.9-5.17,5,5,0,0,0,.08-0.9c0-2.35-1.63-4.55-4.62-6.21-0.07-1.63-.56-6.88-3.92-9.93a9.05,9.05,0,0,0-7.32-2.16,0.8,0.8,0,0,0-.64.44,0.81,0.81,0,0,0,0,.77c0.51,0.82,1.4,2.81.91,3.7a1.71,1.71,0,0,1-1.58.59,25.75,25.75,0,0,0-5.89.73,7.62,7.62,0,0,0-.82-1,8.42,8.42,0,0,0-6.75-2.53,6.17,6.17,0,0,0-1.63-2C11.48,6,9.27,5.58,6.52,6a0.8,0.8,0,1,0,.24,1.58c2.28-.35,4.08,0,5.32.94a4.37,4.37,0,0,1,1,1.1,6.2,6.2,0,0,0-2.25,1.43l-0.73.73c-2.73,2.73-2.4,7.5.73,10.64,0.19,0.19.4,0.37,0.6,0.53a4.83,4.83,0,0,0-.29,2.77,6.75,6.75,0,0,0-2.9,5.17,5.91,5.91,0,0,0,1.55,3.85l3,7.44,0,0.08c2.55,4.68,4.7,5.88,9.35,7.66a18.39,18.39,0,0,0,6.19.93,18.23,18.23,0,0,0,6.18-.93c4.66-1.8,6.81-3,9.31-7.58l3.88-9.52h0a5.26,5.26,0,0,0,.38-1.93m-36.89-18L12,12.18a4.64,4.64,0,0,1,1.77-1.09,5.47,5.47,0,0,1,.12.57,0.8,0.8,0,0,0,.8.73H14.7a0.8,0.8,0,0,0,.73-0.86,6.46,6.46,0,0,0-.13-0.72h0.17a7,7,0,0,1,4.85,2.12,5.8,5.8,0,0,1,.9,1.16h0a5.92,5.92,0,0,1,.82,2.74s0,0.08,0,.12a5.57,5.57,0,0,1,0,.88s0,0.06,0,.09a5.91,5.91,0,0,1-.51,1.73l0,0.1a6,6,0,0,1-.45.76l-0.07.1a6.22,6.22,0,0,1-.59.7,6,6,0,0,1-.76.63l-0.06,0a6.3,6.3,0,0,1-.84.48l0,0a5.89,5.89,0,0,1-2.86.53H15.71a6.06,6.06,0,0,1-.93-0.15l-0.09,0a5.84,5.84,0,0,1-.91-0.31l0,0A5.67,5.67,0,0,1,12.87,22h0a5.93,5.93,0,0,1-.9-0.74c-2.51-2.51-2.84-6.27-.73-8.38m1.28,13.78a0.8,0.8,0,0,0,.29-0.87,3.56,3.56,0,0,1-.15-1,3.24,3.24,0,0,1,.16-1L13,23.92a7.33,7.33,0,0,0,1.33.47l0.21,0.05,0.4,0.08,0.24,0,0.41,0h0.23l0.36,0a7.64,7.64,0,0,0,1.14-.09h0.09l0.52-.11h0a7.54,7.54,0,0,0,1.58-.58h0l0.38-.22,0.21-.12,0.3-.2,0.3-.22L21,22.88c0.17-.14.34-0.29,0.5-0.45a8,8,0,0,0,.67-0.78l0.13-.17a7.23,7.23,0,0,0,.95-1.8l0.05-.14a7.38,7.38,0,0,0,.38-2c0-.08,0-0.14,0-0.22s0-.16,0-0.24a7.49,7.49,0,0,0-.23-1.81,0.29,0.29,0,0,0,0-.07,7.19,7.19,0,0,0-.34-1,24.76,24.76,0,0,1,5.1-.57,3.14,3.14,0,0,0,3-1.42c0.7-1.27.17-3-.34-4.15a7.15,7.15,0,0,1,4.87,1.8C39.08,13,39.1,19,39.1,19.1a0.8,0.8,0,0,0,.43.72c2.69,1.4,4.18,3.18,4.18,5a3.5,3.5,0,0,1-.15,1,0.8,0.8,0,0,0,.29.87c1.22,0.9,2.67,2.36,2.67,4.21a3.4,3.4,0,0,1-.11.88h0a3.33,3.33,0,0,0-.65-0.22H45.64A3.62,3.62,0,0,0,45,31.45H44.9a4.8,4.8,0,0,0-.73.06l-0.15,0a5.41,5.41,0,0,0-.75.2l-0.14,0a7.92,7.92,0,0,0-.78.33l-0.06,0c-0.27.14-.55,0.3-0.83,0.48l-0.17.11c-0.27.18-.56,0.38-0.84,0.59l-0.16.13c-0.3.24-.59,0.49-0.9,0.76-2.12-1.44-5.09-.48-7.31,1.43a6,6,0,0,0-7.3,0c-0.17-.15-0.34-0.28-0.51-0.41l-0.16-.11-0.4-.27-0.17-.11L23,34.41h0l-0.57-.28-0.16-.06-0.44-.17-0.17-.06-0.58-.17c-0.2,0-.39-0.08-0.58-0.1l-0.16,0-0.44,0H19.72a4.45,4.45,0,0,0-1.12.15l-0.15,0-0.4.15-0.14.07a4.33,4.33,0,0,0-.5.28l-0.56-.49-0.18-.15-0.38-.3-0.21-.16-0.35-.25-0.22-.14-0.33-.21-0.22-.13-0.32-.18-0.22-.11L14.09,32l-0.2-.09-0.33-.12-0.18-.06L13,31.59l-0.12,0-0.48-.08H12.3l-0.37,0H11.77l-0.29,0-0.17,0L11,31.54l-0.17,0-0.25.08-0.16.07-0.24.11-0.15.08L10,32a3.67,3.67,0,0,1-.16-1.07c0-1.84,1.45-3.31,2.67-4.21M42.44,41.63c-2.25,4.13-4,5.1-8.45,6.82a19.65,19.65,0,0,1-11.22,0c-4.43-1.7-6.19-2.67-8.49-6.89l-3-7.5h0l-0.31-.76c2-1.11,5.21,1.9,5.88,2.56l0.56,0.55,0.56-.55c1.77-1.75,4.73-.1,6.29,1.43l0.57,0.56,0.56-.56a4.42,4.42,0,0,1,6.21,0l0.56,0.56,0.57-.56c1.42-1.41,4-2.92,5.79-1.76a2.37,2.37,0,0,1,.41.33l0.56,0.56L40,35.85l0.38-.37,0.05,0,0.22-.2,0.11-.1L41,35l0.15-.12,0.19-.16,0.19-.14,0.19-.15,0.22-.15,0.2-.13L42.33,34l0.2-.12,0.24-.14L43,33.6l0.24-.12,0.22-.1,0.24-.1,0.23-.07,0.23-.07,0.25,0,0.21,0H45a1.86,1.86,0,0,1,.81.24Z" transform="translate(-5.83 -5.84)"/></g></svg>
						</div>
						<span>Десерты</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- <div class="icon-block"></div> -->
						<div class="svg-wrap">
							<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.42 102.97"><defs><style>.cls-111{stroke:#231f20;stroke-miterlimit:10;stroke-width:0.5px;}</style></defs><title>Vector Smart Object4</title><path class="cls-111" d="M55.4,99l-5.14,1.4a1.19,1.19,0,0,0,.31,2.34,1.14,1.14,0,0,0,.31,0L56,101.34A1.19,1.19,0,0,0,55.4,99h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M69.79,109.36l-3.58-1.19a1.19,1.19,0,0,0-1.51.75,1.2,1.2,0,0,0,.76,1.51L69,111.63a1.28,1.28,0,0,0,.38.06,1.2,1.2,0,0,0,.38-2.33h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M92.45,96a1.19,1.19,0,0,0-1.19,1.19V102a1.19,1.19,0,1,0,2.38,0V97.19A1.19,1.19,0,0,0,92.45,96h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M63.45,83.23a1.19,1.19,0,1,0,1.77-1.59l-2.52-2.8a1.19,1.19,0,1,0-1.77,1.59Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M91.16,89.5l3.57,1.19a1.23,1.23,0,0,0,.38.06,1.19,1.19,0,0,0,.38-2.32l-3.58-1.19a1.19,1.19,0,1,0-.75,2.26h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M78.67,104.27a1.18,1.18,0,0,0-1.26,1.12l-0.1,1.68a1.19,1.19,0,0,0,1.12,1.26H78.5a1.19,1.19,0,0,0,1.19-1.12l0.1-1.68a1.19,1.19,0,0,0-1.12-1.26h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M87,110.74a1.19,1.19,0,0,0,1.68-1.68l-1.19-1.19a1.19,1.19,0,0,0-1.69,1.68Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M54,108.46a1.19,1.19,0,1,0-1.69,1.69l1.19,1.19a1.19,1.19,0,0,0,1.69-1.68Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M87.92,84.85H88A1.19,1.19,0,0,0,89.1,83.6L89,81.92a1.19,1.19,0,0,0-2.39.1l0.08,1.68a1.2,1.2,0,0,0,1.19,1.14h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M51.13,91.06a1.24,1.24,0,0,0,.29,0,1.2,1.2,0,0,0,.87-1.44l-1.19-4.77a1.19,1.19,0,0,0-2.31.58L50,90.16a1.19,1.19,0,0,0,1.16.9h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M45,94.44a1.19,1.19,0,1,0-1.69,1.69l1.19,1.19a1.19,1.19,0,0,0,1.69-1.69Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M78.89,84.25a1.19,1.19,0,0,0,1.69-1.69l-1.19-1.19a1.19,1.19,0,0,0-1.69,1.69Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111"
							d="M105.55,100.14V97.31a1.09,1.09,0,0,0-.09-0.44c0-.15,0-0.29,0-0.44s0-.41,0-0.62,0-.42-0.07-0.64,0-.41-0.08-0.62-0.07-.42-0.11-0.63S105,93.51,105,93.31s-0.1-.41-0.15-0.61-0.1-.41-0.17-0.61-0.12-.4-0.19-0.59-0.13-.41-0.21-0.61-0.15-.38-0.23-0.57-0.16-.4-0.25-0.6l-0.27-.56c-0.1-.2-0.19-0.4-0.3-0.59l-0.3-.55c-0.11-.19-0.22-0.39-0.34-0.58s-0.22-.35-0.33-0.53l-0.38-.57c-0.12-.17-0.24-0.34-0.37-0.51l-0.41-.56c-0.13-.17-0.27-0.33-0.4-0.49l-0.45-.55-0.42-.47-0.49-.53-0.45-.45-0.52-.51-0.49-.44-0.56-.49-0.52-.43-0.59-.48L95.66,80,95,79.55l-0.57-.39-0.64-.43-0.59-.37L92.54,78l-0.62-.35-0.7-.38-0.65-.33-0.72-.36-0.68-.31-0.74-.33-0.72-.29c-0.25-.1-0.49-0.21-0.75-0.3L86.22,75l-0.76-.28-0.78-.25-0.77-.24L83.1,74l-0.78-.21-0.84-.2-0.79-.19-0.89-.18L79,73.07l-0.93-.15-0.76-.12-1-.12-0.74-.1-1.06-.09-0.69-.06-1.24-.07-0.52,0q-0.9,0-1.8,0c-19.38,0-35.14,11.22-35.14,25,0,1,.09,7.74.09,7.74s0,0.09,0,.13v3.37c0,13.74,15.38,24.5,35,24.5,19.43,0,35.24-11.21,35.24-25v-7.92h0Zm-2.48-2.84c0,0.22,0,.55,0,1s0.05,1.15.06,1.92v0.7c0,2.29-.29,5.13-1.49,6.44a2.1,2.1,0,0,1-1.54.7,0.62,0.62,0,0,1-.35-0.15,0.62,0.62,0,0,1-.2-0.45,1.19,1.19,0,1,0-2.38,0V111A0.6,0.6,0,1,1,96,111a1.19,1.19,0,0,0-2.38,0v4.77a0.6,0.6,0,0,1-1.19,0v-1.19a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,0,0-2.38,0v6a0.59,0.59,0,1,1-1.19,0v-4.17a1.19,1.19,0,1,0-2.39,0,1.19,1.19,0,0,1-2.38,0,1.19,1.19,0,1,0-2.38,0v4.17a0.6,0.6,0,0,1-1.19,0v-1.79a1.19,1.19,0,1,0-2.38,0,1.19,1.19,0,0,1-2.38,0,1.19,1.19,0,1,0-2.38,0v4.76a1.19,1.19,0,1,1-2.38,0v-4.17a1.19,1.19,0,1,0-2.39,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,1,0-2.38,0v1.79a1.19,1.19,0,1,1-2.39,0V117a1.19,1.19,0,0,0-2.38,0,0.59,0.59,0,1,1-1.19,0,1.19,1.19,0,0,0-2.39,0v2.39a0.6,0.6,0,0,1-1.19,0v-6a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,1,0-2.38,0v2.38a0.6,0.6,0,0,1-1.19,0V111a1.19,1.19,0,0,0-2.38,0,0.6,0.6,0,1,1-1.19,0v-5.74a1.28,1.28,0,0,0-.33-0.83,1.19,1.19,0,0,0-2.07.67,0.58,0.58,0,0,1-1.16,0c0-3.3,0-7.79,0-7.79,0-12.48,14.65-22.63,32.66-22.63s32.76,10.15,32.76,22.63h0ZM70.32,130.66c-18.31,0-32.65-9.71-32.65-22.11V108a2.72,2.72,0,0,0,.57.06,2.89,2.89,0,0,0,.59-0.06v3a3,3,0,0,0,3,3,2.93,2.93,0,0,0,.6-0.06v1.84a3,3,0,0,0,5.91.53,3.21,3.21,0,0,0,1.24,0v3a3,3,0,0,0,5.91.52,3,3,0,0,0,1.23,0v1.25a3.58,3.58,0,0,0,7,1.09,3.09,3.09,0,0,0,1.36,0v1.25a3.57,3.57,0,0,0,7.15,0v-1.4a3.68,3.68,0,0,0,2.75-.16,3,3,0,0,0,5.59-1.42v-0.8a3.71,3.71,0,0,0,2.38,0v0.8a3,3,0,1,0,6,0v-3a3,3,0,0,0,1.65-.13,3,3,0,0,0,5.5-1.59v-1.84a2.89,2.89,0,0,0,.59.06,3,3,0,0,0,3-3v-0.65a3.29,3.29,0,0,0,.64.05,4.42,4.42,0,0,0,2.9-1.2c-0.87,11.94-15.26,21.46-32.82,21.46h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M57.9,96.11a5.69,5.69,0,0,0,.6,2.48,0.69,0.69,0,0,0,0,.1c1.72,3.44,6.73,5.75,12.47,5.75s10.76-2.32,12.48-5.75a0.7,0.7,0,0,0,0-.1,5.68,5.68,0,0,0,.6-2.48c0-4.67-5.75-8.34-13.1-8.34s-13.1,3.66-13.1,8.34h0Zm3.51,2.6,0.09,0c0.63-.23,1.28-0.44,2-0.62L63.73,98c0.67-.17,1.35-0.33,2.06-0.45l0.41-.07c0.7-.12,1.41-0.21,2.14-0.27l0.35,0c0.77-.06,1.54-0.1,2.31-0.1s1.55,0,2.32.1l0.36,0c0.72,0.06,1.43.16,2.14,0.27l0.41,0.07c0.7,0.12,1.38.27,2.05,0.45l0.29,0.08c0.67,0.19,1.33.39,2,.62l0.09,0c-1.8,2-5.51,3.36-9.6,3.36s-7.8-1.33-9.6-3.36h0ZM71,90.16c5.81,0,10.72,2.73,10.72,6a3.08,3.08,0,0,1,0,.47h0c-0.73-.28-1.48-0.52-2.26-0.74l-0.34-.1c-0.75-.2-1.51-0.37-2.29-0.51l-0.42-.08c-0.78-.13-1.59-0.24-2.4-0.31l-0.34,0c-0.86-.07-1.72-0.11-2.6-0.11s-1.74,0-2.59.11l-0.34,0c-0.81.08-1.61,0.18-2.4,0.31l-0.42.08c-0.78.14-1.54,0.31-2.29,0.52l-0.34.1c-0.77.21-1.53,0.46-2.26,0.74h0a2.46,2.46,0,0,1,0-.46c0-3.23,4.91-6,10.72-6h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M47.18,57.31L42,58.71A1.19,1.19,0,0,0,42.34,61a1.14,1.14,0,0,0,.31,0l5.14-1.39a1.19,1.19,0,0,0-.62-2.3h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M47.18,57.31" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M57.25,68.71l2.3,0.77c0.42-.7.87-1.38,1.36-2.06l-2.91-1a1.19,1.19,0,0,0-1.51.75A1.2,1.2,0,0,0,57.25,68.71Z" transform="translate(-26.7 -30.32)"/><path class="cls-111"
							d="M55.23,41.5A1.19,1.19,0,1,0,57,39.91l-2.52-2.8a1.19,1.19,0,1,0-1.77,1.59Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M82.94,47.78l3.24,1.08c0.6-.26,1.23-0.48,1.85-0.7a1.18,1.18,0,0,0-.76-1.45l-3.58-1.19A1.19,1.19,0,1,0,82.94,47.78Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M45.76,66.74a1.19,1.19,0,1,0-1.69,1.69l1.19,1.19A1.19,1.19,0,0,0,47,67.93Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M45.76,66.74" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M79.7,43.13h0.05a1.19,1.19,0,0,0,1.13-1.24L80.81,40.2a1.19,1.19,0,0,0-2.39.1L78.5,42a1.2,1.2,0,0,0,1.19,1.14h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M42.91,49.34a1.24,1.24,0,0,0,.29,0,1.2,1.2,0,0,0,.87-1.44l-1.19-4.77a1.19,1.19,0,0,0-2.31.58l1.19,4.76a1.19,1.19,0,0,0,1.16.9h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M42.91,49.34" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M36.82,52.72a1.19,1.19,0,0,0-1.69,1.69l1.19,1.19A1.19,1.19,0,0,0,38,53.91Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M36.82,52.72" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M70.67,42.53a1.19,1.19,0,1,0,1.69-1.69l-1.19-1.19a1.19,1.19,0,1,0-1.69,1.69Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M62.1,33C75.79,33,87.53,38.79,92.42,47q1.26-.21,2.54-0.3l-0.25-.45c-0.11-.19-0.22-0.39-0.34-0.58s-0.22-.35-0.33-0.53l-0.38-.57c-0.12-.17-0.24-0.34-0.37-0.51l-0.41-.56c-0.13-.17-0.27-0.33-0.4-0.49L92,42.5,91.6,42l-0.49-.53L90.65,41l-0.52-.51-0.49-.44-0.56-.49-0.52-.43L88,38.69l-0.54-.41-0.62-.45-0.57-.39L85.6,37,85,36.64l-0.68-.41-0.62-.35L83,35.5l-0.65-.33-0.72-.36-0.68-.31-0.74-.33-0.72-.29c-0.25-.1-0.49-0.21-0.75-0.3L78,33.29,77.24,33l-0.78-.25-0.77-.24-0.81-.23-0.78-.21-0.84-.2-0.79-.19-0.89-.18-0.77-.16-0.93-.15-0.76-.12-1-.12-0.74-.1-1.06-.09-0.69-.06-1.24-.07-0.52,0q-0.9,0-1.8,0C42.72,30.57,27,41.79,27,55.59c0,1,.09,7.74.09,7.74s0,0.09,0,.13v3.37c0,6.1,3,11.61,8.13,15.85a18.09,18.09,0,0,1,1.54-1.77c-4.57-3.8-7.29-8.68-7.29-14.07V66.25a2.72,2.72,0,0,0,.57.06,2.89,2.89,0,0,0,.59-0.06v3a3,3,0,0,0,3,3,2.93,2.93,0,0,0,.6-0.06V74a3,3,0,0,0,5.91.53,3.21,3.21,0,0,0,1.24,0V77q1.16-.83,2.38-1.57V71.67a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,1,0-2.38,0v2.38a0.6,0.6,0,0,1-1.19,0V69.28a1.19,1.19,0,0,0-2.38,0,0.6,0.6,0,1,1-1.19,0V63.54a1.28,1.28,0,0,0-.33-0.83,1.19,1.19,0,0,0-2.07.67,0.58,0.58,0,0,1-1.16,0c0-3.3,0-7.79,0-7.79C29.43,43.11,44.08,33,62.1,33Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M50.31,57C52,60.42,57,62.73,62.78,62.73a21,21,0,0,0,2.12-.11A22.21,22.21,0,0,1,67,59.85a17.89,17.89,0,0,1-4.24.5c-4.09,0-7.8-1.33-9.6-3.36l0.09,0c0.63-.23,1.29-0.44,2-0.62l0.29-.08c0.67-.17,1.35-0.33,2.06-0.45L58,55.74c0.7-.12,1.41-0.21,2.14-0.27l0.35,0c0.77-.06,1.54-0.1,2.31-0.1s1.55,0,2.32.1l0.36,0c0.72,0.06,1.43.16,2.14,0.27L68,55.81c0.7,0.12,1.38.27,2.05,0.45l0.29,0.08,0.41,0.13a22.07,22.07,0,0,1,2.71-1.62h0c-0.73-.28-1.48-0.52-2.26-0.74L70.84,54c-0.75-.2-1.51-0.37-2.29-0.51l-0.42-.08c-0.78-.13-1.59-0.24-2.4-0.31l-0.34,0C64.53,53,63.66,53,62.78,53s-1.74,0-2.59.11l-0.34,0c-0.81.08-1.61,0.18-2.4,0.31L57,53.49c-0.78.14-1.54,0.31-2.29,0.52l-0.34.1c-0.77.21-1.53,0.46-2.26,0.74h0a2.46,2.46,0,0,1,0-.46c0-3.23,4.91-6,10.72-6s10.72,2.73,10.72,6a3.09,3.09,0,0,1,0,.46,23.26,23.26,0,0,1,2.37-1.05c-0.46-4.38-6-7.75-13.06-7.75-7.34,0-13.1,3.66-13.1,8.34a5.69,5.69,0,0,0,.6,2.48A0.68,0.68,0,0,0,50.31,57Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M62.78,48.44" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M125.77,73a1.19,1.19,0,0,0-1.19,1.19V79A1.19,1.19,0,1,0,127,79V74.19A1.19,1.19,0,0,0,125.77,73h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M96.77,60.22a1.19,1.19,0,1,0,1.77-1.59L96,55.83a1.19,1.19,0,1,0-1.77,1.59Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M124.48,66.5L128,67.69a1.23,1.23,0,0,0,.38.06,1.19,1.19,0,0,0,.38-2.32l-3.58-1.19a1.19,1.19,0,1,0-.75,2.26h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111"
							d="M112,81.27a1.18,1.18,0,0,0-1.26,1.12l-0.1,1.68a1.19,1.19,0,0,0,1.12,1.26h0.08A1.19,1.19,0,0,0,113,84.21l0.1-1.68A1.19,1.19,0,0,0,112,81.27h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M112,81.27" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M120.36,87.74A1.19,1.19,0,1,0,122,86.06l-1.19-1.19a1.19,1.19,0,0,0-1.69,1.68Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M121.24,61.85h0.05a1.19,1.19,0,0,0,1.13-1.24l-0.07-1.68A1.19,1.19,0,0,0,120,59L120,60.71a1.2,1.2,0,0,0,1.19,1.14h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M84.45,68.06a1.24,1.24,0,0,0,.29,0,1.2,1.2,0,0,0,.87-1.44l-1.19-4.77a1.19,1.19,0,0,0-2.31.58l1.19,4.76a1.19,1.19,0,0,0,1.16.9h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M112.22,61.25a1.19,1.19,0,1,0,1.69-1.69l-1.19-1.19A1.19,1.19,0,0,0,111,60.06Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M138.87,78V74.3a1.09,1.09,0,0,0-.09-0.44c0-.15,0-0.29,0-0.44s0-.41,0-0.62,0-.42-0.07-0.64,0-.41-0.08-0.62-0.07-.42-0.11-0.63-0.08-.41-0.13-0.62-0.1-.41-0.15-0.61-0.1-.41-0.17-0.61-0.12-.4-0.19-0.59-0.13-.41-0.21-0.61-0.15-.38-0.23-0.57-0.16-.4-0.25-0.6l-0.27-.56c-0.1-.2-0.19-0.4-0.3-0.59l-0.3-.55c-0.11-.19-0.22-0.39-0.34-0.58s-0.22-.35-0.33-0.53l-0.38-.57c-0.12-.17-0.24-0.34-0.37-0.51l-0.41-.56c-0.13-.17-0.27-0.33-0.4-0.49l-0.45-.55-0.42-.47-0.49-.53-0.45-.45-0.52-.51-0.49-.44-0.56-.49-0.52-.43-0.59-.48L129,57l-0.62-.45-0.57-.39-0.64-.43-0.59-.37-0.68-.41-0.62-.35-0.7-.38-0.65-.33-0.72-.36-0.68-.31-0.74-.33L121,52.59c-0.25-.1-0.49-0.21-0.75-0.3L119.54,52l-0.76-.28L118,51.48l-0.77-.24L116.42,51l-0.78-.21-0.84-.2L114,50.4l-0.89-.18-0.77-.16-0.93-.15-0.76-.12-1-.12-0.74-.1-1.06-.09-0.69-.06L106,49.35l-0.52,0q-0.9,0-1.8,0c-15.78,0-29.13,7.45-33.55,17.66a14,14,0,0,1,2.54.28c4.3-9,16.57-15.55,31-15.55,18.06,0,32.76,10.15,32.76,22.63,0,0.22,0,.55,0,1s0.05,1.15.06,1.92v0.7c0,2.29-.29,5.13-1.49,6.44a2.1,2.1,0,0,1-1.54.7,0.62,0.62,0,0,1-.35-0.15,0.62,0.62,0,0,1-.2-0.45,1.19,1.19,0,1,0-2.38,0V88a0.6,0.6,0,1,1-1.19,0A1.19,1.19,0,0,0,127,88v4.77a0.6,0.6,0,0,1-1.19,0V91.58a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,0,0-2.38,0v6a0.59,0.59,0,1,1-1.19,0V93.36a1.19,1.19,0,1,0-2.39,0,1.19,1.19,0,0,1-2.38,0,1.19,1.19,0,1,0-2.38,0v4.17a0.6,0.6,0,0,1-.6.59h0a13.87,13.87,0,0,1-.28,2.35,2.79,2.79,0,0,0,.3,0,3,3,0,0,0,3-3v-0.8a3.71,3.71,0,0,0,2.38,0v0.8a3,3,0,0,0,6,0v-3a3,3,0,0,0,1.65-.13,3,3,0,0,0,5.5-1.59V90.92a2.9,2.9,0,0,0,.59.06,3,3,0,0,0,3-3V87.35a3.29,3.29,0,0,0,.64.05,4.42,4.42,0,0,0,2.9-1.2c-0.75,10.29-11.55,18.77-25.77,20.92a20.9,20.9,0,0,1-.33,2.46c16.23-2.23,28.53-12.38,28.53-24.52V78Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M104.32,64.78c-6,0-11,2.46-12.56,5.92a15.58,15.58,0,0,1,2.25.83c1.29-2.49,5.48-4.37,10.3-4.37,5.81,0,10.72,2.73,10.72,6a3.08,3.08,0,0,1,0,.47h0c-0.73-.28-1.48-0.52-2.26-0.74l-0.34-.1c-0.75-.2-1.51-0.37-2.29-0.51l-0.42-.08c-0.78-.13-1.59-0.24-2.4-0.31l-0.34,0c-0.86-.07-1.72-0.11-2.6-0.11s-1.74,0-2.59.11l-0.34,0c-0.81.08-1.61,0.18-2.4,0.31l-0.42.08c-0.78.14-1.54,0.31-2.29,0.52l-0.08,0a15.3,15.3,0,0,1,2.26,1.85l0.06,0.06,0.6-.13,0.41-.07c0.7-.12,1.41-0.21,2.14-0.27l0.35,0c0.77-.06,1.54-0.1,2.31-0.1s1.55,0,2.32.1l0.36,0c0.72,0.06,1.43.16,2.14,0.27l0.41,0.07c0.7,0.12,1.38.27,2.05,0.45l0.29,0.08c0.67,0.19,1.33.39,2,.62l0.09,0c-1.8,2-5.51,3.36-9.6,3.36a18.47,18.47,0,0,1-2-.11c0.63,0.8,1.23,1.63,1.78,2.49h0.17c5.75,0,10.76-2.32,12.48-5.75a0.69,0.69,0,0,0,0-.1,5.68,5.68,0,0,0,.6-2.48C117.43,68.44,111.67,64.78,104.32,64.78Z" transform="translate(-26.7 -30.32)"/><path class="cls-111" d="M104.32,67.16" transform="translate(-26.7 -30.32)"/></svg>
							
							<!-- SVG с обводкой ПОНЧИК -->
							<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.42 102.97"><defs><style>.cls-0111{stroke:#fff;stroke-miterlimit:10;stroke-width:4px;stroke-opacity: 1;}</style></defs><title>Vector Smart Object4</title><path class="cls-0111" d="M55.4,99l-5.14,1.4a1.19,1.19,0,0,0,.31,2.34,1.14,1.14,0,0,0,.31,0L56,101.34A1.19,1.19,0,0,0,55.4,99h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M69.79,109.36l-3.58-1.19a1.19,1.19,0,0,0-1.51.75,1.2,1.2,0,0,0,.76,1.51L69,111.63a1.28,1.28,0,0,0,.38.06,1.2,1.2,0,0,0,.38-2.33h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M92.45,96a1.19,1.19,0,0,0-1.19,1.19V102a1.19,1.19,0,1,0,2.38,0V97.19A1.19,1.19,0,0,0,92.45,96h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M63.45,83.23a1.19,1.19,0,1,0,1.77-1.59l-2.52-2.8a1.19,1.19,0,1,0-1.77,1.59Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M91.16,89.5l3.57,1.19a1.23,1.23,0,0,0,.38.06,1.19,1.19,0,0,0,.38-2.32l-3.58-1.19a1.19,1.19,0,1,0-.75,2.26h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M78.67,104.27a1.18,1.18,0,0,0-1.26,1.12l-0.1,1.68a1.19,1.19,0,0,0,1.12,1.26H78.5a1.19,1.19,0,0,0,1.19-1.12l0.1-1.68a1.19,1.19,0,0,0-1.12-1.26h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M87,110.74a1.19,1.19,0,0,0,1.68-1.68l-1.19-1.19a1.19,1.19,0,0,0-1.69,1.68Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M54,108.46a1.19,1.19,0,1,0-1.69,1.69l1.19,1.19a1.19,1.19,0,0,0,1.69-1.68Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M87.92,84.85H88A1.19,1.19,0,0,0,89.1,83.6L89,81.92a1.19,1.19,0,0,0-2.39.1l0.08,1.68a1.2,1.2,0,0,0,1.19,1.14h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M51.13,91.06a1.24,1.24,0,0,0,.29,0,1.2,1.2,0,0,0,.87-1.44l-1.19-4.77a1.19,1.19,0,0,0-2.31.58L50,90.16a1.19,1.19,0,0,0,1.16.9h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M45,94.44a1.19,1.19,0,1,0-1.69,1.69l1.19,1.19a1.19,1.19,0,0,0,1.69-1.69Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M78.89,84.25a1.19,1.19,0,0,0,1.69-1.69l-1.19-1.19a1.19,1.19,0,0,0-1.69,1.69Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111"
							d="M105.55,100.14V97.31a1.09,1.09,0,0,0-.09-0.44c0-.15,0-0.29,0-0.44s0-.41,0-0.62,0-.42-0.07-0.64,0-.41-0.08-0.62-0.07-.42-0.11-0.63S105,93.51,105,93.31s-0.1-.41-0.15-0.61-0.1-.41-0.17-0.61-0.12-.4-0.19-0.59-0.13-.41-0.21-0.61-0.15-.38-0.23-0.57-0.16-.4-0.25-0.6l-0.27-.56c-0.1-.2-0.19-0.4-0.3-0.59l-0.3-.55c-0.11-.19-0.22-0.39-0.34-0.58s-0.22-.35-0.33-0.53l-0.38-.57c-0.12-.17-0.24-0.34-0.37-0.51l-0.41-.56c-0.13-.17-0.27-0.33-0.4-0.49l-0.45-.55-0.42-.47-0.49-.53-0.45-.45-0.52-.51-0.49-.44-0.56-.49-0.52-.43-0.59-.48L95.66,80,95,79.55l-0.57-.39-0.64-.43-0.59-.37L92.54,78l-0.62-.35-0.7-.38-0.65-.33-0.72-.36-0.68-.31-0.74-.33-0.72-.29c-0.25-.1-0.49-0.21-0.75-0.3L86.22,75l-0.76-.28-0.78-.25-0.77-.24L83.1,74l-0.78-.21-0.84-.2-0.79-.19-0.89-.18L79,73.07l-0.93-.15-0.76-.12-1-.12-0.74-.1-1.06-.09-0.69-.06-1.24-.07-0.52,0q-0.9,0-1.8,0c-19.38,0-35.14,11.22-35.14,25,0,1,.09,7.74.09,7.74s0,0.09,0,.13v3.37c0,13.74,15.38,24.5,35,24.5,19.43,0,35.24-11.21,35.24-25v-7.92h0Zm-2.48-2.84c0,0.22,0,.55,0,1s0.05,1.15.06,1.92v0.7c0,2.29-.29,5.13-1.49,6.44a2.1,2.1,0,0,1-1.54.7,0.62,0.62,0,0,1-.35-0.15,0.62,0.62,0,0,1-.2-0.45,1.19,1.19,0,1,0-2.38,0V111A0.6,0.6,0,1,1,96,111a1.19,1.19,0,0,0-2.38,0v4.77a0.6,0.6,0,0,1-1.19,0v-1.19a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,0,0-2.38,0v6a0.59,0.59,0,1,1-1.19,0v-4.17a1.19,1.19,0,1,0-2.39,0,1.19,1.19,0,0,1-2.38,0,1.19,1.19,0,1,0-2.38,0v4.17a0.6,0.6,0,0,1-1.19,0v-1.79a1.19,1.19,0,1,0-2.38,0,1.19,1.19,0,0,1-2.38,0,1.19,1.19,0,1,0-2.38,0v4.76a1.19,1.19,0,1,1-2.38,0v-4.17a1.19,1.19,0,1,0-2.39,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,1,0-2.38,0v1.79a1.19,1.19,0,1,1-2.39,0V117a1.19,1.19,0,0,0-2.38,0,0.59,0.59,0,1,1-1.19,0,1.19,1.19,0,0,0-2.39,0v2.39a0.6,0.6,0,0,1-1.19,0v-6a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,1,0-2.38,0v2.38a0.6,0.6,0,0,1-1.19,0V111a1.19,1.19,0,0,0-2.38,0,0.6,0.6,0,1,1-1.19,0v-5.74a1.28,1.28,0,0,0-.33-0.83,1.19,1.19,0,0,0-2.07.67,0.58,0.58,0,0,1-1.16,0c0-3.3,0-7.79,0-7.79,0-12.48,14.65-22.63,32.66-22.63s32.76,10.15,32.76,22.63h0ZM70.32,130.66c-18.31,0-32.65-9.71-32.65-22.11V108a2.72,2.72,0,0,0,.57.06,2.89,2.89,0,0,0,.59-0.06v3a3,3,0,0,0,3,3,2.93,2.93,0,0,0,.6-0.06v1.84a3,3,0,0,0,5.91.53,3.21,3.21,0,0,0,1.24,0v3a3,3,0,0,0,5.91.52,3,3,0,0,0,1.23,0v1.25a3.58,3.58,0,0,0,7,1.09,3.09,3.09,0,0,0,1.36,0v1.25a3.57,3.57,0,0,0,7.15,0v-1.4a3.68,3.68,0,0,0,2.75-.16,3,3,0,0,0,5.59-1.42v-0.8a3.71,3.71,0,0,0,2.38,0v0.8a3,3,0,1,0,6,0v-3a3,3,0,0,0,1.65-.13,3,3,0,0,0,5.5-1.59v-1.84a2.89,2.89,0,0,0,.59.06,3,3,0,0,0,3-3v-0.65a3.29,3.29,0,0,0,.64.05,4.42,4.42,0,0,0,2.9-1.2c-0.87,11.94-15.26,21.46-32.82,21.46h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M57.9,96.11a5.69,5.69,0,0,0,.6,2.48,0.69,0.69,0,0,0,0,.1c1.72,3.44,6.73,5.75,12.47,5.75s10.76-2.32,12.48-5.75a0.7,0.7,0,0,0,0-.1,5.68,5.68,0,0,0,.6-2.48c0-4.67-5.75-8.34-13.1-8.34s-13.1,3.66-13.1,8.34h0Zm3.51,2.6,0.09,0c0.63-.23,1.28-0.44,2-0.62L63.73,98c0.67-.17,1.35-0.33,2.06-0.45l0.41-.07c0.7-.12,1.41-0.21,2.14-0.27l0.35,0c0.77-.06,1.54-0.1,2.31-0.1s1.55,0,2.32.1l0.36,0c0.72,0.06,1.43.16,2.14,0.27l0.41,0.07c0.7,0.12,1.38.27,2.05,0.45l0.29,0.08c0.67,0.19,1.33.39,2,.62l0.09,0c-1.8,2-5.51,3.36-9.6,3.36s-7.8-1.33-9.6-3.36h0ZM71,90.16c5.81,0,10.72,2.73,10.72,6a3.08,3.08,0,0,1,0,.47h0c-0.73-.28-1.48-0.52-2.26-0.74l-0.34-.1c-0.75-.2-1.51-0.37-2.29-0.51l-0.42-.08c-0.78-.13-1.59-0.24-2.4-0.31l-0.34,0c-0.86-.07-1.72-0.11-2.6-0.11s-1.74,0-2.59.11l-0.34,0c-0.81.08-1.61,0.18-2.4,0.31l-0.42.08c-0.78.14-1.54,0.31-2.29,0.52l-0.34.1c-0.77.21-1.53,0.46-2.26,0.74h0a2.46,2.46,0,0,1,0-.46c0-3.23,4.91-6,10.72-6h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M47.18,57.31L42,58.71A1.19,1.19,0,0,0,42.34,61a1.14,1.14,0,0,0,.31,0l5.14-1.39a1.19,1.19,0,0,0-.62-2.3h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M47.18,57.31" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M57.25,68.71l2.3,0.77c0.42-.7.87-1.38,1.36-2.06l-2.91-1a1.19,1.19,0,0,0-1.51.75A1.2,1.2,0,0,0,57.25,68.71Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111"
							d="M55.23,41.5A1.19,1.19,0,1,0,57,39.91l-2.52-2.8a1.19,1.19,0,1,0-1.77,1.59Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M82.94,47.78l3.24,1.08c0.6-.26,1.23-0.48,1.85-0.7a1.18,1.18,0,0,0-.76-1.45l-3.58-1.19A1.19,1.19,0,1,0,82.94,47.78Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M45.76,66.74a1.19,1.19,0,1,0-1.69,1.69l1.19,1.19A1.19,1.19,0,0,0,47,67.93Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M45.76,66.74" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M79.7,43.13h0.05a1.19,1.19,0,0,0,1.13-1.24L80.81,40.2a1.19,1.19,0,0,0-2.39.1L78.5,42a1.2,1.2,0,0,0,1.19,1.14h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M42.91,49.34a1.24,1.24,0,0,0,.29,0,1.2,1.2,0,0,0,.87-1.44l-1.19-4.77a1.19,1.19,0,0,0-2.31.58l1.19,4.76a1.19,1.19,0,0,0,1.16.9h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M42.91,49.34" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M36.82,52.72a1.19,1.19,0,0,0-1.69,1.69l1.19,1.19A1.19,1.19,0,0,0,38,53.91Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M36.82,52.72" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M70.67,42.53a1.19,1.19,0,1,0,1.69-1.69l-1.19-1.19a1.19,1.19,0,1,0-1.69,1.69Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M62.1,33C75.79,33,87.53,38.79,92.42,47q1.26-.21,2.54-0.3l-0.25-.45c-0.11-.19-0.22-0.39-0.34-0.58s-0.22-.35-0.33-0.53l-0.38-.57c-0.12-.17-0.24-0.34-0.37-0.51l-0.41-.56c-0.13-.17-0.27-0.33-0.4-0.49L92,42.5,91.6,42l-0.49-.53L90.65,41l-0.52-.51-0.49-.44-0.56-.49-0.52-.43L88,38.69l-0.54-.41-0.62-.45-0.57-.39L85.6,37,85,36.64l-0.68-.41-0.62-.35L83,35.5l-0.65-.33-0.72-.36-0.68-.31-0.74-.33-0.72-.29c-0.25-.1-0.49-0.21-0.75-0.3L78,33.29,77.24,33l-0.78-.25-0.77-.24-0.81-.23-0.78-.21-0.84-.2-0.79-.19-0.89-.18-0.77-.16-0.93-.15-0.76-.12-1-.12-0.74-.1-1.06-.09-0.69-.06-1.24-.07-0.52,0q-0.9,0-1.8,0C42.72,30.57,27,41.79,27,55.59c0,1,.09,7.74.09,7.74s0,0.09,0,.13v3.37c0,6.1,3,11.61,8.13,15.85a18.09,18.09,0,0,1,1.54-1.77c-4.57-3.8-7.29-8.68-7.29-14.07V66.25a2.72,2.72,0,0,0,.57.06,2.89,2.89,0,0,0,.59-0.06v3a3,3,0,0,0,3,3,2.93,2.93,0,0,0,.6-0.06V74a3,3,0,0,0,5.91.53,3.21,3.21,0,0,0,1.24,0V77q1.16-.83,2.38-1.57V71.67a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,1,0-2.38,0v2.38a0.6,0.6,0,0,1-1.19,0V69.28a1.19,1.19,0,0,0-2.38,0,0.6,0.6,0,1,1-1.19,0V63.54a1.28,1.28,0,0,0-.33-0.83,1.19,1.19,0,0,0-2.07.67,0.58,0.58,0,0,1-1.16,0c0-3.3,0-7.79,0-7.79C29.43,43.11,44.08,33,62.1,33Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M50.31,57C52,60.42,57,62.73,62.78,62.73a21,21,0,0,0,2.12-.11A22.21,22.21,0,0,1,67,59.85a17.89,17.89,0,0,1-4.24.5c-4.09,0-7.8-1.33-9.6-3.36l0.09,0c0.63-.23,1.29-0.44,2-0.62l0.29-.08c0.67-.17,1.35-0.33,2.06-0.45L58,55.74c0.7-.12,1.41-0.21,2.14-0.27l0.35,0c0.77-.06,1.54-0.1,2.31-0.1s1.55,0,2.32.1l0.36,0c0.72,0.06,1.43.16,2.14,0.27L68,55.81c0.7,0.12,1.38.27,2.05,0.45l0.29,0.08,0.41,0.13a22.07,22.07,0,0,1,2.71-1.62h0c-0.73-.28-1.48-0.52-2.26-0.74L70.84,54c-0.75-.2-1.51-0.37-2.29-0.51l-0.42-.08c-0.78-.13-1.59-0.24-2.4-0.31l-0.34,0C64.53,53,63.66,53,62.78,53s-1.74,0-2.59.11l-0.34,0c-0.81.08-1.61,0.18-2.4,0.31L57,53.49c-0.78.14-1.54,0.31-2.29,0.52l-0.34.1c-0.77.21-1.53,0.46-2.26,0.74h0a2.46,2.46,0,0,1,0-.46c0-3.23,4.91-6,10.72-6s10.72,2.73,10.72,6a3.09,3.09,0,0,1,0,.46,23.26,23.26,0,0,1,2.37-1.05c-0.46-4.38-6-7.75-13.06-7.75-7.34,0-13.1,3.66-13.1,8.34a5.69,5.69,0,0,0,.6,2.48A0.68,0.68,0,0,0,50.31,57Z" transform="translate(-26.7 -30.32)"/><path class="cls-011" d="M62.78,48.44" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M125.77,73a1.19,1.19,0,0,0-1.19,1.19V79A1.19,1.19,0,1,0,127,79V74.19A1.19,1.19,0,0,0,125.77,73h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M96.77,60.22a1.19,1.19,0,1,0,1.77-1.59L96,55.83a1.19,1.19,0,1,0-1.77,1.59Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M124.48,66.5L128,67.69a1.23,1.23,0,0,0,.38.06,1.19,1.19,0,0,0,.38-2.32l-3.58-1.19a1.19,1.19,0,1,0-.75,2.26h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111"
							d="M112,81.27a1.18,1.18,0,0,0-1.26,1.12l-0.1,1.68a1.19,1.19,0,0,0,1.12,1.26h0.08A1.19,1.19,0,0,0,113,84.21l0.1-1.68A1.19,1.19,0,0,0,112,81.27h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M112,81.27" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M120.36,87.74A1.19,1.19,0,1,0,122,86.06l-1.19-1.19a1.19,1.19,0,0,0-1.69,1.68Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M121.24,61.85h0.05a1.19,1.19,0,0,0,1.13-1.24l-0.07-1.68A1.19,1.19,0,0,0,120,59L120,60.71a1.2,1.2,0,0,0,1.19,1.14h0Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M84.45,68.06a1.24,1.24,0,0,0,.29,0,1.2,1.2,0,0,0,.87-1.44l-1.19-4.77a1.19,1.19,0,0,0-2.31.58l1.19,4.76a1.19,1.19,0,0,0,1.16.9h0Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M112.22,61.25a1.19,1.19,0,1,0,1.69-1.69l-1.19-1.19A1.19,1.19,0,0,0,111,60.06Zm0,0" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M138.87,78V74.3a1.09,1.09,0,0,0-.09-0.44c0-.15,0-0.29,0-0.44s0-.41,0-0.62,0-.42-0.07-0.64,0-.41-0.08-0.62-0.07-.42-0.11-0.63-0.08-.41-0.13-0.62-0.1-.41-0.15-0.61-0.1-.41-0.17-0.61-0.12-.4-0.19-0.59-0.13-.41-0.21-0.61-0.15-.38-0.23-0.57-0.16-.4-0.25-0.6l-0.27-.56c-0.1-.2-0.19-0.4-0.3-0.59l-0.3-.55c-0.11-.19-0.22-0.39-0.34-0.58s-0.22-.35-0.33-0.53l-0.38-.57c-0.12-.17-0.24-0.34-0.37-0.51l-0.41-.56c-0.13-.17-0.27-0.33-0.4-0.49l-0.45-.55-0.42-.47-0.49-.53-0.45-.45-0.52-.51-0.49-.44-0.56-.49-0.52-.43-0.59-.48L129,57l-0.62-.45-0.57-.39-0.64-.43-0.59-.37-0.68-.41-0.62-.35-0.7-.38-0.65-.33-0.72-.36-0.68-.31-0.74-.33L121,52.59c-0.25-.1-0.49-0.21-0.75-0.3L119.54,52l-0.76-.28L118,51.48l-0.77-.24L116.42,51l-0.78-.21-0.84-.2L114,50.4l-0.89-.18-0.77-.16-0.93-.15-0.76-.12-1-.12-0.74-.1-1.06-.09-0.69-.06L106,49.35l-0.52,0q-0.9,0-1.8,0c-15.78,0-29.13,7.45-33.55,17.66a14,14,0,0,1,2.54.28c4.3-9,16.57-15.55,31-15.55,18.06,0,32.76,10.15,32.76,22.63,0,0.22,0,.55,0,1s0.05,1.15.06,1.92v0.7c0,2.29-.29,5.13-1.49,6.44a2.1,2.1,0,0,1-1.54.7,0.62,0.62,0,0,1-.35-0.15,0.62,0.62,0,0,1-.2-0.45,1.19,1.19,0,1,0-2.38,0V88a0.6,0.6,0,1,1-1.19,0A1.19,1.19,0,0,0,127,88v4.77a0.6,0.6,0,0,1-1.19,0V91.58a1.19,1.19,0,1,0-2.38,0,0.6,0.6,0,0,1-1.19,0,1.19,1.19,0,0,0-2.38,0v6a0.59,0.59,0,1,1-1.19,0V93.36a1.19,1.19,0,1,0-2.39,0,1.19,1.19,0,0,1-2.38,0,1.19,1.19,0,1,0-2.38,0v4.17a0.6,0.6,0,0,1-.6.59h0a13.87,13.87,0,0,1-.28,2.35,2.79,2.79,0,0,0,.3,0,3,3,0,0,0,3-3v-0.8a3.71,3.71,0,0,0,2.38,0v0.8a3,3,0,0,0,6,0v-3a3,3,0,0,0,1.65-.13,3,3,0,0,0,5.5-1.59V90.92a2.9,2.9,0,0,0,.59.06,3,3,0,0,0,3-3V87.35a3.29,3.29,0,0,0,.64.05,4.42,4.42,0,0,0,2.9-1.2c-0.75,10.29-11.55,18.77-25.77,20.92a20.9,20.9,0,0,1-.33,2.46c16.23-2.23,28.53-12.38,28.53-24.52V78Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M104.32,64.78c-6,0-11,2.46-12.56,5.92a15.58,15.58,0,0,1,2.25.83c1.29-2.49,5.48-4.37,10.3-4.37,5.81,0,10.72,2.73,10.72,6a3.08,3.08,0,0,1,0,.47h0c-0.73-.28-1.48-0.52-2.26-0.74l-0.34-.1c-0.75-.2-1.51-0.37-2.29-0.51l-0.42-.08c-0.78-.13-1.59-0.24-2.4-0.31l-0.34,0c-0.86-.07-1.72-0.11-2.6-0.11s-1.74,0-2.59.11l-0.34,0c-0.81.08-1.61,0.18-2.4,0.31l-0.42.08c-0.78.14-1.54,0.31-2.29,0.52l-0.08,0a15.3,15.3,0,0,1,2.26,1.85l0.06,0.06,0.6-.13,0.41-.07c0.7-.12,1.41-0.21,2.14-0.27l0.35,0c0.77-.06,1.54-0.1,2.31-0.1s1.55,0,2.32.1l0.36,0c0.72,0.06,1.43.16,2.14,0.27l0.41,0.07c0.7,0.12,1.38.27,2.05,0.45l0.29,0.08c0.67,0.19,1.33.39,2,.62l0.09,0c-1.8,2-5.51,3.36-9.6,3.36a18.47,18.47,0,0,1-2-.11c0.63,0.8,1.23,1.63,1.78,2.49h0.17c5.75,0,10.76-2.32,12.48-5.75a0.69,0.69,0,0,0,0-.1,5.68,5.68,0,0,0,.6-2.48C117.43,68.44,111.67,64.78,104.32,64.78Z" transform="translate(-26.7 -30.32)"/><path class="cls-0111" d="M104.32,67.16" transform="translate(-26.7 -30.32)"/></svg>

						</div>
						<span>Наборы</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- Мороженное -->
						<div class="svg-wrap">
							<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 84.63 108.88"><defs><style>.cls-101{fill:none;}.cls-201{clip-path:url(#clip-path);}</style><clipPath id="clip-path" transform="translate(-40.45 -21.69)"><rect class="cls-11110" x="56.63" y="26.7" width="70.38" height="93.84" transform="translate(-22.67 46.38) rotate(-25.34)"/></clipPath></defs><title>Vector Smart Object3</title><path d="M90.74,50.45a1.4,1.4,0,0,0-2-.25L85.11,53a1.4,1.4,0,0,0,1.71,2.22l3.66-2.82a1.4,1.4,0,0,0,.26-2h0Zm9.9,11.91a1.4,1.4,0,0,0-2.52,1.23l2.44,5a1.4,1.4,0,0,0,1.87.64,1.41,1.41,0,0,0,.64-1.88Zm-8.15-.48-4.07-.06a1.4,1.4,0,0,0,0,2.81l4.06,0.06a1.4,1.4,0,1,0,0-2.8h0Zm-7.15-3.82-2-2.08a1.4,1.4,0,0,0-2,2l2,2.09a1.4,1.4,0,0,0,2,0,1.4,1.4,0,0,0,0-2h0Zm11.37-3.57a1.4,1.4,0,0,0-2.78.39l0.41,2.89a1.4,1.4,0,0,0,.94,1.13,1.42,1.42,0,0,0,.65.06,1.4,1.4,0,0,0,1.19-1.58Zm0,0" transform="translate(-40.45 -21.69)"/><path d="M111.78,59.94c-1.4-4.73-5.18-11.08-15.2-14.52C78.41,39.2,69.2,53.11,67.19,59c-1.65,4.83-.54,9.44,2.54,10.49a6.67,6.67,0,0,0,1.77.34l-0.33,48a1.41,1.41,0,0,0,2.52.86l29-37.93L103,80.91c3.07,1.05,6.78-1.91,8.44-6.73a24.67,24.67,0,0,0,.3-14.24h0ZM100.42,79.16L74,113.67l0.07-10.92,1.27-.62-1.23-2.52h0l0-6.33,0,0.05,2.52-1.23L75.45,89.6l-1.29.64,0.08-12.52,1.31-.64-1.23-2.52-0.05,0,0-5.4,0.23-.13A4.94,4.94,0,0,0,75,70l0.13,0.2a5.35,5.35,0,0,0,.6.74L76,71.17a5.43,5.43,0,0,0,.74.55L77,71.85a7,7,0,0,0,1.1.5,6.23,6.23,0,0,0,1.17.28l0.28,0a5.6,5.6,0,0,0,.89,0l0.37,0a5.41,5.41,0,0,0,.9-0.2l0.26-.09a4.76,4.76,0,0,0,.95-0.46,4.52,4.52,0,0,0,.46.95l0.15,0.23a5.52,5.52,0,0,0,.59.71c0.09,0.09.18,0.16,0.28,0.25a5.43,5.43,0,0,0,.72.54l0.24,0.13a6.25,6.25,0,0,0,.74.36l-1.69.83,1.23,2.52,2.52-1.23-0.86-1.75,0.34,0.06,0.27,0a7,7,0,0,0,.9,0l0.36,0a4.76,4.76,0,0,0,.9-0.21l0.25-.09a4.61,4.61,0,0,0,.95-0.47,4.6,4.6,0,0,0,.46,1l0.14,0.22a4.74,4.74,0,0,0,.59.72l0.27,0.24a5.73,5.73,0,0,0,.73.54l0.24,0.14a6.58,6.58,0,0,0,2.27.78l0.27,0a5.74,5.74,0,0,0,.9,0l0.36,0a5,5,0,0,0,.9-0.21l0.25-.09a5.14,5.14,0,0,0,.95-0.47,4.78,4.78,0,0,0,.87,1.52l0,0h0Zm3.54-.91a4.2,4.2,0,0,1-.76-0.33,1.43,1.43,0,0,0-.12-0.11c-0.53-.36-1.22-1-1-2.83,0,0,0-.07,0-0.1a8.47,8.47,0,0,1,.4-1.58,1.4,1.4,0,1,0-2.65-.91,9.13,9.13,0,0,1-.65,1.49L99.1,74c-0.9,1.54-1.94,2-3.48,1.43s-2.1-1.5-1.87-3.26a0.55,0.55,0,0,0,0-.1,9.07,9.07,0,0,1,.4-1.58,1.4,1.4,0,1,0-2.65-.91A9.14,9.14,0,0,1,90.84,71a0.56,0.56,0,0,0-.07.08c-0.9,1.53-1.94,2-3.48,1.43s-2.1-1.5-1.87-3.26c0,0,0-.07,0-0.1a9.24,9.24,0,0,1,.4-1.58,1.4,1.4,0,1,0-2.65-.91,8.67,8.67,0,0,1-.65,1.49l-0.06.08c-0.9,1.53-1.94,2-3.48,1.43s-2.07-1.46-1.88-3.17c0,0,0-.05,0-0.09a8.2,8.2,0,0,1,.4-1.69,1.4,1.4,0,1,0-2.65-.91A8.61,8.61,0,0,1,74,65.57s0,0-.06.06a3,3,0,0,1-1.44,1.28L72.46,67a2.8,2.8,0,0,1-1.83-.12c-1.34-.46-2-3.52-0.8-6.94,1.77-5.14,9.84-17.31,25.84-11.83,19.28,6.6,13.42,24.43,13.16,25.19-1.17,3.41-3.54,5.45-4.87,5h0Zm0,0" transform="translate(-40.45 -21.69)"/><path d="M94.29,83.49L93.05,81l2.52-1.23,1.23,2.52Zm-5-3.8,1.23,2.51L88,83.44l-1.23-2.52Zm1.19,8.78L89.26,86l2.52-1.23L93,87.24ZM80.58,74.61l1.23,2.52L79.3,78.35l-1.24-2.51Zm3.7,7.55-2.52,1.23-1.23-2.51L83,79.64Zm2.46,5-2.51,1.23L83,85.91l2.52-1.23Zm0,6.26-1.24-2.51L88,89.7l1.23,2.52ZM74.27,80.82l2.51-1.23L78,82.11l-2.52,1.23Zm5,3.79,1.23,2.52L78,88.37l-1.23-2.52Zm1.19,8.78L79.2,90.88l2.51-1.23,1.24,2.51Zm2.46,5-1.23-2.51,2.51-1.24,1.23,2.52Zm-5-3.8,1.23,2.52-2.51,1.24-1.23-2.52Zm1.18,8.79-1.23-2.51,2.52-1.23,1.23,2.52Zm-3.8,5-1.23-2.51,2.51-1.24,1.23,2.52Zm0,0" transform="translate(-40.45 -21.69)"/><g class="cls-2222"><path
							d="M124.93,65L104.85,22.58a1.57,1.57,0,0,0-1.51-.89c-0.77,0-19,1.31-28,13.35C68.22,44.58,49.75,48.69,45,49.61l-1.54-3.26a1.57,1.57,0,1,0-2.83,1.34l2,4.24,0,0a0.5,0.5,0,0,1,0,.06l24,50.74a9.51,9.51,0,0,1,2-1.28c0.14-.15.26-0.33,0.4-0.47l0.2-.18-2.79-5.9c0.68-.14,1.54-0.32,2.47-0.54a12.72,12.72,0,0,1-1.33-2.92c-1,.23-1.9.41-2.53,0.53L46.36,52.54c6.09-1.22,24-5.57,31.47-15.63,7-9.32,20.77-11.54,24.67-12l18.67,39.43c-1.09.15-2.54,0.39-4.18,0.75a14.64,14.64,0,0,1,.18,1.7,8.18,8.18,0,0,1-.1,1.52,45.55,45.55,0,0,1,6.54-1.08A1.57,1.57,0,0,0,124.93,65Z" transform="translate(-40.45 -21.69)"/><path d="M78.86,121.16a10.15,10.15,0,0,1-3,1.06l3.53,7.46a1.57,1.57,0,1,0,2.83-1.34Z" transform="translate(-40.45 -21.69)"/><path d="M121.17,64.34" transform="translate(-40.45 -21.69)"/></g></svg>

							<!-- SVG с обводкой Мороженное -->
							<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 84.63 108.88"><defs><style>.cls-1011{fill:none;}.cls-2011{clip-path:url(#clip-path);}</style><clipPath id="clip-path" transform="translate(-40.45 -21.69)"><rect class="cls-111100" x="56.63" y="26.7" width="70.38" height="93.84" transform="translate(-22.67 46.38) rotate(-25.34)"/></clipPath></defs><title>Vector Smart Object3</title><path d="M90.74,50.45a1.4,1.4,0,0,0-2-.25L85.11,53a1.4,1.4,0,0,0,1.71,2.22l3.66-2.82a1.4,1.4,0,0,0,.26-2h0Zm9.9,11.91a1.4,1.4,0,0,0-2.52,1.23l2.44,5a1.4,1.4,0,0,0,1.87.64,1.41,1.41,0,0,0,.64-1.88Zm-8.15-.48-4.07-.06a1.4,1.4,0,0,0,0,2.81l4.06,0.06a1.4,1.4,0,1,0,0-2.8h0Zm-7.15-3.82-2-2.08a1.4,1.4,0,0,0-2,2l2,2.09a1.4,1.4,0,0,0,2,0,1.4,1.4,0,0,0,0-2h0Zm11.37-3.57a1.4,1.4,0,0,0-2.78.39l0.41,2.89a1.4,1.4,0,0,0,.94,1.13,1.42,1.42,0,0,0,.65.06,1.4,1.4,0,0,0,1.19-1.58Zm0,0" transform="translate(-40.45 -21.69)"/><path d="M111.78,59.94c-1.4-4.73-5.18-11.08-15.2-14.52C78.41,39.2,69.2,53.11,67.19,59c-1.65,4.83-.54,9.44,2.54,10.49a6.67,6.67,0,0,0,1.77.34l-0.33,48a1.41,1.41,0,0,0,2.52.86l29-37.93L103,80.91c3.07,1.05,6.78-1.91,8.44-6.73a24.67,24.67,0,0,0,.3-14.24h0ZM100.42,79.16L74,113.67l0.07-10.92,1.27-.62-1.23-2.52h0l0-6.33,0,0.05,2.52-1.23L75.45,89.6l-1.29.64,0.08-12.52,1.31-.64-1.23-2.52-0.05,0,0-5.4,0.23-.13A4.94,4.94,0,0,0,75,70l0.13,0.2a5.35,5.35,0,0,0,.6.74L76,71.17a5.43,5.43,0,0,0,.74.55L77,71.85a7,7,0,0,0,1.1.5,6.23,6.23,0,0,0,1.17.28l0.28,0a5.6,5.6,0,0,0,.89,0l0.37,0a5.41,5.41,0,0,0,.9-0.2l0.26-.09a4.76,4.76,0,0,0,.95-0.46,4.52,4.52,0,0,0,.46.95l0.15,0.23a5.52,5.52,0,0,0,.59.71c0.09,0.09.18,0.16,0.28,0.25a5.43,5.43,0,0,0,.72.54l0.24,0.13a6.25,6.25,0,0,0,.74.36l-1.69.83,1.23,2.52,2.52-1.23-0.86-1.75,0.34,0.06,0.27,0a7,7,0,0,0,.9,0l0.36,0a4.76,4.76,0,0,0,.9-0.21l0.25-.09a4.61,4.61,0,0,0,.95-0.47,4.6,4.6,0,0,0,.46,1l0.14,0.22a4.74,4.74,0,0,0,.59.72l0.27,0.24a5.73,5.73,0,0,0,.73.54l0.24,0.14a6.58,6.58,0,0,0,2.27.78l0.27,0a5.74,5.74,0,0,0,.9,0l0.36,0a5,5,0,0,0,.9-0.21l0.25-.09a5.14,5.14,0,0,0,.95-0.47,4.78,4.78,0,0,0,.87,1.52l0,0h0Zm3.54-.91a4.2,4.2,0,0,1-.76-0.33,1.43,1.43,0,0,0-.12-0.11c-0.53-.36-1.22-1-1-2.83,0,0,0-.07,0-0.1a8.47,8.47,0,0,1,.4-1.58,1.4,1.4,0,1,0-2.65-.91,9.13,9.13,0,0,1-.65,1.49L99.1,74c-0.9,1.54-1.94,2-3.48,1.43s-2.1-1.5-1.87-3.26a0.55,0.55,0,0,0,0-.1,9.07,9.07,0,0,1,.4-1.58,1.4,1.4,0,1,0-2.65-.91A9.14,9.14,0,0,1,90.84,71a0.56,0.56,0,0,0-.07.08c-0.9,1.53-1.94,2-3.48,1.43s-2.1-1.5-1.87-3.26c0,0,0-.07,0-0.1a9.24,9.24,0,0,1,.4-1.58,1.4,1.4,0,1,0-2.65-.91,8.67,8.67,0,0,1-.65,1.49l-0.06.08c-0.9,1.53-1.94,2-3.48,1.43s-2.07-1.46-1.88-3.17c0,0,0-.05,0-0.09a8.2,8.2,0,0,1,.4-1.69,1.4,1.4,0,1,0-2.65-.91A8.61,8.61,0,0,1,74,65.57s0,0-.06.06a3,3,0,0,1-1.44,1.28L72.46,67a2.8,2.8,0,0,1-1.83-.12c-1.34-.46-2-3.52-0.8-6.94,1.77-5.14,9.84-17.31,25.84-11.83,19.28,6.6,13.42,24.43,13.16,25.19-1.17,3.41-3.54,5.45-4.87,5h0Zm0,0" transform="translate(-40.45 -21.69)"/><path d="M94.29,83.49L93.05,81l2.52-1.23,1.23,2.52Zm-5-3.8,1.23,2.51L88,83.44l-1.23-2.52Zm1.19,8.78L89.26,86l2.52-1.23L93,87.24ZM80.58,74.61l1.23,2.52L79.3,78.35l-1.24-2.51Zm3.7,7.55-2.52,1.23-1.23-2.51L83,79.64Zm2.46,5-2.51,1.23L83,85.91l2.52-1.23Zm0,6.26-1.24-2.51L88,89.7l1.23,2.52ZM74.27,80.82l2.51-1.23L78,82.11l-2.52,1.23Zm5,3.79,1.23,2.52L78,88.37l-1.23-2.52Zm1.19,8.78L79.2,90.88l2.51-1.23,1.24,2.51Zm2.46,5-1.23-2.51,2.51-1.24,1.23,2.52Zm-5-3.8,1.23,2.52-2.51,1.24-1.23-2.52Zm1.18,8.79-1.23-2.51,2.52-1.23,1.23,2.52Zm-3.8,5-1.23-2.51,2.51-1.24,1.23,2.52Zm0,0" transform="translate(-40.45 -21.69)"/><g class="cls-222200"><path
							d="M124.93,65L104.85,22.58a1.57,1.57,0,0,0-1.51-.89c-0.77,0-19,1.31-28,13.35C68.22,44.58,49.75,48.69,45,49.61l-1.54-3.26a1.57,1.57,0,1,0-2.83,1.34l2,4.24,0,0a0.5,0.5,0,0,1,0,.06l24,50.74a9.51,9.51,0,0,1,2-1.28c0.14-.15.26-0.33,0.4-0.47l0.2-.18-2.79-5.9c0.68-.14,1.54-0.32,2.47-0.54a12.72,12.72,0,0,1-1.33-2.92c-1,.23-1.9.41-2.53,0.53L46.36,52.54c6.09-1.22,24-5.57,31.47-15.63,7-9.32,20.77-11.54,24.67-12l18.67,39.43c-1.09.15-2.54,0.39-4.18,0.75a14.64,14.64,0,0,1,.18,1.7,8.18,8.18,0,0,1-.1,1.52,45.55,45.55,0,0,1,6.54-1.08A1.57,1.57,0,0,0,124.93,65Z" transform="translate(-40.45 -21.69)"/><path d="M78.86,121.16a10.15,10.15,0,0,1-3,1.06l3.53,7.46a1.57,1.57,0,1,0,2.83-1.34Z" transform="translate(-40.45 -21.69)"/><path d="M121.17,64.34" transform="translate(-40.45 -21.69)"/></g></svg>

						</div>
						<span>Акции</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- <div class="icon-block"></div> -->
						<div class="svg-wrap">
							<!-- <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 96.21 96.55"><defs><style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{clip-path:url(#clip-path-2);}</style><clipPath id="clip-path" transform="translate(-34.23 -31.95)"><rect class="cls-11111" x="34.23" y="31.79" width="96.35" height="97.01"/></clipPath><clipPath id="clip-path-2" transform="translate(-34.23 -31.95)"><rect class="cls-11111" x="-143.12" y="-142.21" width="446.61" height="449.66"/></clipPath></defs><title>Vector Smart Object5</title><g class="cls-22222"><path d="M130.07,33.91a1.82,1.82,0,0,0-1.59-1.59A49.85,49.85,0,0,0,87.11,46.55L74.95,58.71,57.39,61a1.83,1.83,0,0,0-1.06.52L39.41,78.42a1.82,1.82,0,0,0,1,3.08l12.8,2.37,2.51,2.52-5.35,2.9a1.82,1.82,0,0,0-.42,2.9l20.3,20.3a1.83,1.83,0,0,0,1.29.53l0.26,0a1.83,1.83,0,0,0,1.34-.94l2.9-5.35,2.51,2.52L80.89,122A1.83,1.83,0,0,0,84,123l16.92-16.93a1.82,1.82,0,0,0,.52-1.06l2.26-17.56,12.16-12.16a49.85,49.85,0,0,0,14.22-41.37h0ZM53.44,80.22l-9-1.67,14-14,12.25-1.58Zm17.61,28L54.21,91.33l4.16-2.25L73.31,104Zm26.82-4.26-14,14-1.67-9L99.45,91.67ZM113.26,72.7L80.21,105.75,56.63,82.18,89.69,49.13a46.47,46.47,0,0,1,17.1-10.83A21.83,21.83,0,0,0,124.09,55.6a46.48,46.48,0,0,1-10.83,17.1h0Zm11.92-20.61A18.2,18.2,0,0,1,110.3,37.21a46.56,46.56,0,0,1,16.3-1.41,46.55,46.55,0,0,1-1.41,16.3h0Zm0,0" transform="translate(-34.23 -31.95)"/></g><path d="M87.91,58.83a11.07,11.07,0,1,0,15.66,0,11.08,11.08,0,0,0-15.66,0h0ZM101,71.9a7.42,7.42,0,1,1,0-10.5,7.43,7.43,0,0,1,0,10.5h0Zm0,0" transform="translate(-34.23 -31.95)"/><path d="M58,104.74a1.82,1.82,0,0,0-2.58,0L39.75,120.4A1.82,1.82,0,1,0,42.33,123L58,107.32a1.82,1.82,0,0,0,0-2.58h0Zm0,0" transform="translate(-34.23 -31.95)"/><path d="M60.4,109.73l-7.05,7.05a1.83,1.83,0,0,0,2.58,2.58L63,112.31a1.83,1.83,0,1,0-2.58-2.58h0Zm0,0" transform="translate(-34.23 -31.95)"/><path d="M50.88,120a1.82,1.82,0,1,0,1.68,1.13A1.84,1.84,0,0,0,50.88,120h0Zm0,0" transform="translate(-34.23 -31.95)"/><path d="M52.56,121.14h0Zm0,0" transform="translate(-34.23 -31.95)"/><g class="cls-33333"><path d="M45.71,124.42l-1,1A1.82,1.82,0,0,0,47.32,128l1-1a1.83,1.83,0,0,0-2.58-2.58h0Zm0,0" transform="translate(-34.23 -31.95)"/><path d="M44.4,108.36a1.83,1.83,0,0,0-2.58,0l-7.05,7.05A1.83,1.83,0,0,0,37.34,118l7.05-7.05a1.83,1.83,0,0,0,0-2.58h0Zm0,0" transform="translate(-34.23 -31.95)"/></g><path d="M47.31,107.66a1.82,1.82,0,1,0-2-.76s0,0,0,0h0a1.85,1.85,0,0,0,2,.75h0Zm0,0" transform="translate(-34.23 -31.95)"/><path d="M52,103.31l1-1a1.82,1.82,0,1,0-2.58-2.58l-1,1A1.82,1.82,0,1,0,52,103.31h0Zm0,0" transform="translate(-34.23 -31.95)"/></svg> -->



						</div>
						<span>Доставка</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- <div class="icon-block"></div> -->
						<div class="svg-wrap">
							<!-- <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.68 105.28"><title>Vector Smart Object6</title><path d="M35.91,46.14a1.76,1.76,0,0,0-1.46-3.21,14.24,14.24,0,0,0-3.38,2.18,1.76,1.76,0,0,0-.17,2.48,1.76,1.76,0,0,0,2.49.18,10.24,10.24,0,0,1,2.53-1.62h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M42.06,45.18h3.53a1.76,1.76,0,1,0,0-3.52H42.06a1.76,1.76,0,1,0,0,3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M52.63,45.18h3.53a1.76,1.76,0,0,0,0-3.52H52.63a1.76,1.76,0,1,0,0,3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M45.58,66.32H42.06a1.76,1.76,0,1,0,0,3.52h3.53a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M66.71,66.32H63.2a1.76,1.76,0,1,0,0,3.52h3.52a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M56.15,66.32H52.63a1.76,1.76,0,1,0,0,3.52h3.53a1.76,1.76,0,0,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M35.91,65.37a10.67,10.67,0,0,1-2.53-1.62,1.76,1.76,0,1,0-2.31,2.66,13.66,13.66,0,0,0,3.37,2.17,1.71,1.71,0,0,0,.73.16,1.76,1.76,0,0,0,.73-3.36h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M77.28,66.32H73.77a1.76,1.76,0,1,0,0,3.52h3.52a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M109,66.32h-3.53a1.76,1.76,0,1,0,0,3.52H109a1.76,1.76,0,0,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M119.55,66.32H116a1.76,1.76,0,1,0,0,3.52h3.52a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M87.85,66.32H84.33a1.76,1.76,0,0,0,0,3.52h3.53a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M98.42,66.32H94.9a1.76,1.76,0,1,0,0,3.52h3.53a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M35.91,118.21a10.67,10.67,0,0,1-2.53-1.62,1.76,1.76,0,1,0-2.31,2.66,13.66,13.66,0,0,0,3.37,2.17,1.71,1.71,0,0,0,.73.16,1.76,1.76,0,0,0,.73-3.36h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M56.15,119.17H52.63a1.76,1.76,0,1,0,0,3.52h3.53a1.76,1.76,0,0,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M45.58,119.17H42.06a1.76,1.76,0,1,0,0,3.52h3.53a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M87.85,119.17H84.33a1.76,1.76,0,0,0,0,3.52h3.53a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M93.13,120.93a1.76,1.76,0,0,0,1.76,1.75h3.53a1.76,1.76,0,1,0,0-3.52H94.9a1.76,1.76,0,0,0-1.76,1.76h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M105.47,122.68H109a1.76,1.76,0,0,0,0-3.52h-3.53a1.76,1.76,0,1,0,0,3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M77.28,119.17H73.77a1.76,1.76,0,1,0,0,3.52h3.52a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M116,122.68h3.52a1.76,1.76,0,1,0,0-3.52H116a1.76,1.76,0,1,0,0,3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M66.71,119.17H63.2a1.76,1.76,0,1,0,0,3.52h3.52a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M103.7,92.74a7,7,0,1,0,7-7,7.05,7.05,0,0,0-7,7h0Zm7-3.53a3.52,3.52,0,1,1-3.52,3.53,3.53,3.53,0,0,1,3.52-3.53h0Zm0,0" transform="translate(-26.21 -24.46)"/><path
							d="M101.85,34.62L92.27,25a2,2,0,0,0-2.83,0l-3.6,3.6L82.23,25a2,2,0,0,0-2.84,0l-9.57,9.57H40.29a14.11,14.11,0,0,0-14.09,14.1v68.42a12.62,12.62,0,0,0,12.6,12.6h93.08V34.62h-30Zm-11-6,30.67,30.67H112L92.18,39.43a1.91,1.91,0,0,0-2.68,0L69.68,59.28H60.19L88.32,31.14Zm16.2,30.67H74.66l16.19-16.2ZM80.81,28.61l2.53,2.53L55.2,59.28H50.14L74.8,34.62ZM40.29,38.14h26l-3.63,3.63a1.69,1.69,0,0,0-1.11,1.12L45.16,59.28H40.29a10.57,10.57,0,0,1,0-21.14h0Zm88.07,63.41H109a8.81,8.81,0,1,1,0-17.61h19.37v17.61Zm0-35.23h-1.75a1.76,1.76,0,1,0,0,3.52h1.75V80.41H109a12.33,12.33,0,1,0,0,24.66h19.37v14.1h-1.75a1.76,1.76,0,1,0,0,3.52h1.75v3.52H38.81a9.08,9.08,0,0,1-9.07-9.07v-3.89a1.75,1.75,0,0,0,.42-1.68,10.5,10.5,0,0,1-.42-3V60.41a1.75,1.75,0,0,0,.42-1.68c0-.11,0-0.23-0.08-0.34l0.48,0.49L31,59.3c0.2,0.17.4,0.34,0.6,0.5s0.33,0.26.51,0.38,0.43,0.3.65,0.44,0.35,0.22.54,0.33,0.46,0.26.71,0.38l0.56,0.28,0.77,0.3,0.58,0.22c0.28,0.09.56,0.15,0.84,0.23l0.56,0.15c0.32,0.07.64,0.11,1,.16l0.49,0.07a13.92,13.92,0,0,0,1.49.09h88.07v3.52Zm-1.86-7-14.1-14.1h0.1a1.76,1.76,0,1,0,0-3.52H109l-0.09,0-3.54-3.54h23V59.28H126.5Zm0,0" transform="translate(-26.21 -24.46)"/><path d="M123.08,41.67h-3.53a1.76,1.76,0,0,0,0,3.52h3.53a1.76,1.76,0,1,0,0-3.52h0Zm0,0" transform="translate(-26.21 -24.46)"/></svg> -->



						</div>
						<span>Оплата</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- <div class="icon-block"></div> -->
						<div class="svg-wrap">
							<!-- <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.31 109.36"><title>Vector Smart Object41</title><path d="M63.3,92.84A3.86,3.86,0,1,1,59.43,89a3.86,3.86,0,0,1,3.86,3.86h0Zm0,0" transform="translate(-32.13 -25.33)"/><path d="M106,92.84A3.86,3.86,0,1,1,102.14,89,3.86,3.86,0,0,1,106,92.84h0Zm0,0" transform="translate(-32.13 -25.33)"/><path d="M59.43,80.46a7.84,7.84,0,0,0-5.58,2.31,2.06,2.06,0,1,0,2.92,2.92,3.77,3.77,0,0,1,5.33,0A2.06,2.06,0,1,0,65,82.77a7.84,7.84,0,0,0-5.58-2.31h0Zm0,0" transform="translate(-32.13 -25.33)"/><path d="M96.56,82.77a2.06,2.06,0,0,0,2.92,2.92,3.77,3.77,0,0,1,5.33,0,2.06,2.06,0,0,0,2.92-2.92,7.9,7.9,0,0,0-11.16,0h0Zm0,0" transform="translate(-32.13 -25.33)"/><path d="M84.76,109.23a5.62,5.62,0,0,1-7.94,0,2.06,2.06,0,1,0-2.92,2.92,9.74,9.74,0,0,0,13.78,0,2.06,2.06,0,0,0-2.92-2.92h0Zm0,0" transform="translate(-32.13 -25.33)"/><path d="M129.44,90.85a11.45,11.45,0,0,0-9.37-11.25V45.1a13.32,13.32,0,0,0-17.74-12.56l-12.95-4.4a51.38,51.38,0,0,0-30.28-1c-12.91,3.56-20.31,11.1-21.46,21.8a15.65,15.65,0,0,0-2.36,4.45l-1,3a3.58,3.58,0,0,0,5.88,3.72,7.17,7.17,0,0,1,1.34-1V79.6a11.43,11.43,0,0,0,.64,22.59A39.6,39.6,0,0,0,53,123a38.8,38.8,0,0,0,27.81,11.69h0a39.31,39.31,0,0,0,38.7-32.5,11.45,11.45,0,0,0,10-11.34h0ZM111.83,37.44a9.05,9.05,0,0,1,4.11,7.66v27a13.4,13.4,0,0,1-11.32-13.22L104.46,36.2a9,9,0,0,1,7.37,1.25h0Zm-73,18.46,0.4-1.19A11.55,11.55,0,0,1,55,47.94a15.77,15.77,0,0,0,18.36-3.82l0.51-.58a2.06,2.06,0,1,0-3.09-2.73l-0.51.58A11.62,11.62,0,0,1,56.75,44.2,15.69,15.69,0,0,0,44,44c-0.37.16-.73,0.34-1.09,0.52,2.4-6.39,8.2-10.89,17.33-13.41A47.27,47.27,0,0,1,88.06,32l12.28,4.17,0.16,10.65a36.43,36.43,0,0,1-49.24,8.91,11.18,11.18,0,0,0-12.46.11h0ZM36.25,90.85a7.32,7.32,0,0,1,5.25-7V95q0,1.45.1,2.88a7.32,7.32,0,0,1-5.35-7h0Zm69.39,29.41a34.93,34.93,0,0,1-24.86,10.3h0A34.71,34.71,0,0,1,55.91,120.1,35.54,35.54,0,0,1,45.63,95V58.09A7.14,7.14,0,0,1,49,59.24a40.56,40.56,0,0,0,51.51-6v5.6a17.52,17.52,0,0,0,15.44,17.38V95.4a34.93,34.93,0,0,1-10.3,24.86h0ZM120,97.88c0.05-.82.08-1.65,0.08-2.48V83.83A7.31,7.31,0,0,1,120,97.88h0Zm0,0" transform="translate(-32.13 -25.33)"/></svg> -->



						</div>
						<span>О нас</span>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-12  colors">
					<div class="nav-block">
						<a href="#">
						<!-- Вопрос-ответ -->
						<div class="svg-wrap">
							<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 89.96 86.01"><defs><style>.cls-19{fill:none;}.cls-29{clip-path:url(#clip-path);}.cls-39{stroke:#231f20;stroke-miterlimit:10;stroke-width:0.25px;}</style><clipPath id="clip-path" transform="translate(-36.23 -30.93)"><rect class="cls-019" x="36.23" y="30.93" width="90.1" height="97.61"/></clipPath></defs><title>Vector Smart Object31</title><g class="cls-029"><path d="M44.25,126.94a2,2,0,0,1-2-2.11l1.4-24.69a2,2,0,1,1,4,.23l-1.23,21.68,20.47-7.23a2,2,0,0,1,1.33,3.77l-23.31,8.22a1.91,1.91,0,0,1-.67.12h0Zm0,0" transform="translate(-36.23 -30.93)"/><path d="M81.1,120.88A44.48,44.48,0,0,1,67,118.57l1.27-3.8a41,41,0,0,0,53.51-44.72A41,41,0,0,0,40.66,81.73a40.58,40.58,0,0,0,6.66,17.19L44,101.17a45,45,0,0,1,30.8-69.78,45,45,0,1,1,6.31,89.49h0Zm0,0" transform="translate(-36.23 -30.93)"/></g><path class="cls-039" d="M72.09,68.56h0c-2.92,0-5-1.61-5.39-4.08a1.5,1.5,0,0,1,1.28-1.69,1.47,1.47,0,0,1,1.69,1.27c0.19,1.29,1.6,1.49,2.42,1.5h0c2,0,2.07-.46,2.24-1.66a1.5,1.5,0,1,1,3,.41c-0.42,3-2,4.25-5.22,4.25h0Zm0,0" transform="translate(-36.23 -30.93)"/><path class="cls-039" d="M79.55,90.69c-3,0-5.32-1.9-5.32-4.32a1.5,1.5,0,0,1,3,0c0,0.63,1,1.32,2.32,1.32s2.3-.7,2.3-1.32a1.51,1.51,0,0,1,3,0c0,2.43-2.34,4.32-5.31,4.32h0Zm0,0" transform="translate(-36.23 -30.93)"/><path class="cls-039" d="M83.35,87.87h0a1.51,1.51,0,0,1-1.5-1.51,60.46,60.46,0,0,1,.22-6.63c0.16-.68.6-1,1.93-2.05,2.78-2.16,9.28-7.21,9.28-13.48,0-7.83-4-11.8-11.83-11.8-4.32,0-7.65,1.16-9.65,3.37-1.78,2-2.51,4.75-2.16,8.28a1.5,1.5,0,1,1-3,.3c-0.44-4.41.54-8,2.91-10.6,2.58-2.85,6.69-4.36,11.88-4.36,9.44,0,14.84,5.4,14.84,14.81,0,7.74-7.32,13.43-10.45,15.86-0.36.28-.66,0.51-0.87,0.68-0.07,1-.12,3.48-0.12,5.62a1.51,1.51,0,0,1-1.5,1.51h0Zm-9.1-1.47s-0.11-4.84-.11-7.94c0-2.28,2.24-3.87,4.82-5.72,3.14-2.23,6.68-4.75,6.68-8.54,0-3.22-1-4.2-4.19-4.2-2.64,0-3.93.67-4.13,4.46a1.48,1.48,0,0,1-1.58,1.42,1.5,1.5,0,0,1-1.42-1.58c0.27-5,2.54-7.29,7.14-7.29,4.85,0,7.21,2.36,7.21,7.21,0,5.34-4.6,8.6-7.94,11-1.5,1.07-3.57,2.54-3.57,3.27,0,3.07.11,7.87,0.11,7.87Zm0,0" transform="translate(-36.23 -30.93)"/><path class="cls-039" d="M79.6,105.7a5.51,5.51,0,1,1,5.51-5.51,5.52,5.52,0,0,1-5.51,5.51h0Zm0-8a2.51,2.51,0,1,0,2.51,2.51,2.51,2.51,0,0,0-2.51-2.51h0Zm0,0" transform="translate(-36.23 -30.93)"/></svg>

							<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-20 -10 129.96 116.01"><defs><style>.cls-18{stroke:#eee;stroke-miterlimit:10;stroke-width:15px;}.cls-28{stroke:#eee;stroke-miterlimit:10;stroke-width:15px;}.cls-38{stroke:#eee;stroke-miterlimit:10;stroke-width:51px;}</style>
						<clipPath id="clip-path" transform="translate(-36.23 -30.93)"><rect class="cls-1" x="36.23" y="30.93" width="90.1" height="97.61"/>
						</clipPath></defs><title>Vector Smart Object31</title><g class="cls-28"><path d="M44.25,126.94a2,2,0,0,1-2-3.11l1.4-24.69a2,2,0,1,1,4,.23l-1.23,21.68,20.47-7.23a2,2,0,0,1,1.33,3.77l-23.31,8.22a1.91,1.91,0,0,1-.67.12h0Zm0,0" transform="translate(-36.23 -30.93)"/><path d="M81.1,120.88A44.48,44.48,0,0,1,67,118.57l1.27-3.8a41,41,0,0,0,53.51-44.72A41,41,0,0,0,40.66,81.73a40.58,40.58,0,0,0,6.66,17.19L44,101.17a45,45,0,0,1,30.8-69.78,45,45,0,1,1,6.31,89.49h0Zm0,0" transform="translate(-36.23 -30.93)"/></g><path class="cls-38" d="M72.09,68.56h0c-2.92,0-5-1.61-5.39-4.08a1.5,1.5,0,0,1,1.28-1.69,1.47,1.47,0,0,1,1.69,1.27c0.19,1.29,1.6,1.49,2.42,1.5h0c2,0,2.07-.46,2.24-1.66a1.5,1.5,0,1,1,3,.41c-0.42,3-2,4.25-5.22,4.25h0Zm0,0" transform="translate(-36.23 -30.93)"/><path class="cls-38" d="M79.55,90.69c-3,0-5.32-1.9-5.32-4.32a1.5,1.5,0,0,1,3,0c0,0.63,1,1.32,2.32,1.32s2.3-.7,2.3-1.32a1.51,1.51,0,0,1,3,0c0,2.43-2.34,4.32-5.31,4.32h0Zm0,0" transform="translate(-36.23 -30.93)"/>
						<path class="cls-38" d="M83.35,87.87h0a1.51,1.51,0,0,1-1.5-1.51,60.46,60.46,0,0,1,.22-6.63c0.16-.68.6-1,1.93-2.05,2.78-2.16,9.28-7.21,9.28-13.48,0-7.83-4-11.8-11.83-11.8-4.32,0-7.65,1.16-9.65,3.37-1.78,2-2.51,4.75-2.16,8.28a1.5,1.5,0,1,1-3,.3c-0.44-4.41.54-8,2.91-10.6,2.58-2.85,6.69-4.36,11.88-4.36,9.44,0,14.84,5.4,14.84,14.81,0,7.74-7.32,13.43-10.45,15.86-0.36.28-.66,0.51-0.87,0.68-0.07,1-.12,3.48-0.12,5.62a1.51,1.51,0,0,1-1.5,1.51h0Zm-9.1-1.47s-0.11-4.84-.11-7.94c0-2.28,2.24-3.87,4.82-5.72,3.14-2.23,6.68-4.75,6.68-8.54,0-3.22-1-4.2-4.19-4.2-2.64,0-3.93.67-4.13,4.46a1.48,1.48,0,0,1-1.58,1.42,1.5,1.5,0,0,1-1.42-1.58c0.27-5,2.54-7.29,7.14-7.29,4.85,0,7.21,2.36,7.21,7.21,0,5.34-4.6,8.6-7.94,11-1.5,1.07-3.57,2.54-3.57,3.27,0,3.07.11,7.87,0.11,7.87Zm0,0" transform="translate(-36.23 -30.93)"/><path class="cls-8" d="M79.6,105.7a5.51,5.51,0,1,1,5.51-5.51,5.52,5.52,0,0,1-5.51,5.51h0Zm0-8a2.51,2.51,0,1,0,2.51,2.51,2.51,2.51,0,0,0-2.51-2.51h0Zm0,0" transform="translate(-36.23 -30.93)"/></svg>


						</div>
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

					<div class="slider_img rotate-bg-right">
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


	





	<link rel="stylesheet" href="css/mainPage.css">
	<script src="js/scripts.js"></script>
	<script>
		$(function(){

			if($(window).width() > 1024) {
				$(".shop_card").mouseover(function() {
	        $(this).find('.button-and-like').show()
	    	});

	    	$(".shop_card").mouseout(function() {
	        $(this).find('.button-and-like').hide()
	    	});
			} else if($(window).width() < 768) {
				$(".shop_card").click(function() {
	        $(this).find('.button-and-like').fadeToggle()
	    	});
			}
			
		});
	</script>
	

</body>
</html>
