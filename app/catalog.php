<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Oh, my cake</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
</head>

<body class="main"> <!-- ATTENTION!!!!!!!! -->

	<!-- =====================================
	HEADER START
	===================================== -->
	<?php include("blocks/header.php");?>
	<!-- =====================================
	HEADER END
	===================================== -->
	<div class="shop catalog" id="shop">
		<div class="content_wrap">
		<!-- <div class="page_head"> -->
		<div class="container no-pad">
			<div class="row no-gutters">
				<div class="col-12">
					<div class="breadcrumb_wrap">
						<ul class="breadcrumb">
							<li><a href="index.html">Главная</a></li>
							<span class="breadcrumb_segment-separator">&#8260;</span>
							<li><a href="blog.html">Торты и пироги</a></li>
							<span class="breadcrumb_segment-separator">&#8260;</span>
							<li><a href="blog.html">Торты</a></li>
							<span class="breadcrumb_segment-separator">&#8260;</span>
							<li><a href="blog.html">Слоеные</a></li>
							<span class="breadcrumb_segment-separator">&#8260;</span>
							<li><a href="blog.html">Торт черный лес</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	<div class="container">
		<div class="row">

			<div class="col-20">
				<div class="left-navigation">
				<h3>Категория</h3>
				<ul class="catalog-first-ul">
					<li>Торты <span class="grey-text">(84)</span><img class="navigation-ar deg90" src="img/right-arrow.svg" alt="right-arrow" style="width:13px;float:right;"></li>
						<ul class="catalog-second-ul">
							<li class="active">
								<div class="row">
									<div class="col-12">
										<svg width="100%" height="20" viewBox="0 0 2000 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
		    							<line stroke-dasharray="10, 30" x1="-4000" y1="10" x2="32000" y2="10" />
										</svg>
									</div>
									<div class="col-12">
										Слоеные <span class="grey-text">(52)</span>
									</div>
								</div>

							</li>
							<li>
								<div class="row">
									<div class="col-12">
										<svg width="100%" height="20" viewBox="0 0 2000 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
		    							<line stroke-dasharray="10, 30" x1="-4000" y1="10" x2="32000" y2="10" />
										</svg>
									</div>
									<div class="col-12">
										Кремовое <span class="grey-text">(52)</span>
									</div>
								</div>
						</ul>
					<li>Пироги <span class="grey-text">(194)</span> <img class="navigation-ar" src="img/right-arrow.svg" alt="right-arrow" style="width:13px;float:right;"></li>
					<li>Чизкейк  <span class="grey-text">(41)</span> <img class="navigation-ar" src="img/right-arrow.svg" alt="right-arrow" style="width:13px;float:right;"></li>
				</ul>
				<h3 class="second-h3">Цена (от, до, a)</h3>
				<div id="slider"></div>
				<h3 class="third-h3">Крем <img class="navigation-ar deg90" src="img/right-arrow.svg" alt="right-arrow" style="width:13px;float:right;"></h3>
				<div class="chek-cream">
					<div class="col-12 no-pad"><input id="chkTest2" class="cream" type="checkbox"><label for="chkTest2" class="checkbox-catalog">Заварной <span class="grey-text">(234)</span></label></div>
					<svg width="100%" height="20" viewBox="0 0 2000 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
						<line stroke-dasharray="10, 30" x1="-4000" y1="10" x2="32000" y2="10" />
					</svg>
					<div class="col-12 no-pad"><input id="chkTest3" class="cream" type="checkbox"><label for="chkTest3" class="checkbox-catalog">Сливочный  <span class="grey-text">(28)</span></label></div>
					<svg width="100%" height="20" viewBox="0 0 2000 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
						<line stroke-dasharray="10, 30" x1="-4000" y1="10" x2="32000" y2="10" />
					</svg>
					<div class="col-12 no-pad"><input id="chkTest4" class="cream" type="checkbox"><label for="chkTest4" class="checkbox-catalog">Прочее   <span class="grey-text">(31)</span></label></div>
				</div>
			</div>
		</div>
			<div class="col-80">
				<div class="row">
					<div class="col-12">
						<div class="catalog-selectrs">
						<div class="row no-gutters">
							<div class="col-12">
								<h3>Для кого</h3>
							</div>
							<div class="col-12 col-xl-5 col-lg-12">
								<!-- <select name="" id="" class="catalogSelector cc-top">
									<option value="">Со скидкой</option>
									<option value="">Со скидкой</option>
									<option value="">Со скидкой</option>
									<option value="">Со скидкой</option>
								</select> -->
								<div class="cheking">
									<input type="checkbox" name="sales" value="" class="catalogSelector cc-top">
									<label for="sales">Со скидкой</label>
								</div>

								<!-- <select name="" id="" class="catalogSelector cc-top">
									<option value="">Для детей</option>
									<option value="">Для детей</option>
									<option value="">Для детей</option>
									<option value="">Для детей</option>
								</select> -->
								<div class="cheking">
									<input type="checkbox" name="children" value="" class="catalogSelector cc-top">
									<label for="children">Для детей</label>
								</div>

								<!-- <select name="" id="" class="catalogSelector cc-top">
									<option value="">Для компании</option>
									<option value="">Для компании</option>
									<option value="">Для компании</option>
									<option value="">Для компании</option>
								</select> -->
								<div class="cheking">
									<input type="checkbox" name="company" value="" class="catalogSelector cc-top">
									<label for="company">Для компании</label>
								</div>

								<svg class="svg-select" width="20" height="40" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
    							<line stroke-dasharray="20, 25" x1="10" y1="600" x2="190" y2="10" />
								</svg>
							</div>
							<div class="col-12 col-xl-3 col-lg-12 h-480">
								<!-- <select name="" id="" class="catalogSelector cc-top">
									<option value="">Топ</option>
									<option value="">Топ</option>
									<option value="">Топ</option>
									<option value="">Топ</option>
								</select> -->
								<div class="cheking">
									<input type="checkbox" name="top" value="" class="catalogSelector cc-top">
									<label for="top">Топ</label>
								</div>
								<!-- <select name="" id="" class="catalogSelector cc-top">
									<option value="">Эксклюзив</option>
									<option value="">Эксклюзив</option>
									<option value="">Эксклюзив</option>
									<option value="">Эксклюзив</option>
								</select> -->
								<div class="cheking">
									<input type="checkbox" name="vip" value="" class="catalogSelector cc-top">
									<label for="vip">Эксклюзив</label>
								</div>

								<svg class="svg-select" width="20" height="40" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
    							<line stroke-dasharray="20, 25" x1="10" y1="600" x2="190" y2="10" />
								</svg>
							</div>
							<div class="col-12 col-xl-4 col-lg-12 relative-left">
								<!-- <select name="" id="" class="catalogSelector">
									<option value="">Цена</option>
									<option value="">Цена</option>
									<option value="">Цена</option>
									<option value="">Цена</option>
								</select> -->
								<div class="cheking white-duck">
									<input type="checkbox" name="price" value="" class="catalogSelector cc-top">
									<label for="price">Цена <i class="icon-arrow-up-circle" aria-hidden="true"></i></label>
								</div>

								<p class="selectTitle grey-text">Отображать на странице:</p>
								<select name="" id="" class="catalogSelector">
									<option value="">50</option>
									<option value="">50</option>
									<option value="">50</option>
									<option value="">50</option>
								</select>
							</div>
						</div>
						</div>
					</div>



					<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
						<div class="shop_card">
						<a href="#" class="shop_card-link">
							<div class="shop_card-post">
								<style media="screen">
									.shop_card-img {
										background-image: url(../img/shop_pipe.jpg);
									}
								</style>
								<div class="shop_card-img"></div>
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

				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
					<div class="shop_card">
					<a href="#" class="shop_card-link">
						<div class="shop_card-post">
							<style media="screen">
								.shop_card-img {
									background-image: url(../img/shop_pipe.jpg);
								}
							</style>
							<div class="shop_card-img"></div>
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

			<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
				<div class="shop_card">
				<a href="#" class="shop_card-link">
					<div class="shop_card-post">
						<style media="screen">
							.shop_card-img {
								background-image: url(../img/shop_pipe.jpg);
							}
						</style>
						<div class="shop_card-img"></div>
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

		<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
			<div class="shop_card">
			<a href="#" class="shop_card-link">
				<div class="shop_card-post">
					<style media="screen">
						.shop_card-img {
							background-image: url(../img/shop_pipe.jpg);
						}
					</style>
					<div class="shop_card-img"></div>
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

	<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
		<div class="shop_card">
		<a href="#" class="shop_card-link">
			<div class="shop_card-post">
				<style media="screen">
					.shop_card-img {
						background-image: url(../img/shop_pipe.jpg);
					}
				</style>
				<div class="shop_card-img"></div>
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

<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
	<div class="shop_card">
	<a href="#" class="shop_card-link">
		<div class="shop_card-post">
			<style media="screen">
				.shop_card-img {
					background-image: url(../img/shop_pipe.jpg);
				}
			</style>
			<div class="shop_card-img"></div>
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
				<div class="row">
					<div class="col-12"><a href="#" class="more"><span class="more_pic"></span><span>Показать ещё</span></a></div>
				</div>
			</div>
		</div>
	<!-- </div> -->
	</div>
</div>
</div>



	<section class="advantages advantages-catalog" style="background:#fff url('./img/catalog-bg-footer.png') no-repeat top; background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="advantages_content">
						<img class="chief" src="img/chief.png" alt="chief">
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







	<!-- =====================================
	FOOTER START
	===================================== -->
	<?php include("blocks/footer.php");?>
	<!-- =====================================
	FOOTER END
	===================================== -->
<link href="libs/noUiSlider/nouislider.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/9.0.0/nouislider.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.0.4/wNumb.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript">
		$(function(){

			if($(window).width() > 1024) {
				$(".shop_card").mouseover(function() {
	        $(this).find('.button-and-like').show()
	    	});

	    	$(".shop_card").mouseout(function() {
	        $(this).find('.button-and-like').hide()
	    	});
			}

			$(".navigation-ar").click(function(){
				var deg = $(this).css('transform');
				if(deg == 0){
					$(this).toggleClass('deg0');
				} else {
					$(this).toggleClass('deg90');
				}
			});

			$(".cheking").on("click",function(event) {
			    var target = $(event.target);
			    if (target.is('input:checkbox')) return;

			    var checkbox = $(this).find("input[type='checkbox']");

			    if( !checkbox.prop("checked") ){
			        checkbox.prop("checked",true);
							$(this).addClass("active");
							$(this).find("i").removeClass("icon-arrow-up-circle");
							$(this).find("i").addClass("icon-arrow-down-circle");
			    } else {
			        checkbox.prop("checked",false);
							$(this).removeClass("active");
							$(this).find("i").removeClass("icon-arrow-down-circle");
							$(this).find("i").addClass("icon-arrow-up-circle");
			    }
			});
		});

	if(slider != null) {
		noUiSlider.create(slider, {
		  start: [20, 15000],
		  connect: true,
		  step:  1,
		  tooltips: true,

		  range: {
		    'min': 200,
		    'max': 50000
		  },
		  format: {
			  to: function ( value ) {
					if(value >= 1000){
						return Math.round(value)/1000  + '';
					} else {
						return Math.round(value)  + '';
					}
			  },
			  from: function ( value ) {
				return value.replace('', '');
			  }
			}
		});
}

	</script>




	<link rel="stylesheet" href="css/main.css">
	<script src="js/scripts.min.js"></script>


</body>
</html>
