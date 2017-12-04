<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Header</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
<link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body class="blog"> <!-- ATTENTION!!!!!!!! -->


<!-- =====================================
HEADER START
===================================== -->

<header>
	<div class="headmain">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="toggleMenu"><span></span></div>
					<div class="menuHead" id="head__menu">
						<ul class="menuHead__Items">
							<li><a href="#" class="menuHead__Href">Главная</a></li>
							<li><a href="#" class="menuHead__Href">О нас</a></li>
							<li><a href="#" class="menuHead__Href">Доставка и оплата</a></li>
							<li class="menuHead__ItemText">
								<div class="menuHead__Text">
									<p>доставка от 600 р.</p>
									<p>бесплатная доставка от 2. 500 р</p>
								</div>
							</li>
							<li><a href="#" class="menuHead__Href">Вопросы и ответы</a></li>
							<li><a href="#" class="menuHead__Href">Контакты</a></li>
						</ul>
					</div>

					<div class="menuSocial">
						<a href="card.html" class="menuSocial__Items_size"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="#" class="link_FB menuSocial__Items_size"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#" class="link_OK menuSocial__Items_size"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
						<a href="#" class="link_Inst menuSocial__Items_size"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>

					<div class="NameTown">
						<p class="NameTown__Oure">Ваш город:</p>
						<select name="" id="" class="NameTownSelect">
							<option value="Санкт-Петербург">Санкт-Петербург</option>
							<option value="Москва">Москва</option>
							<option value="Казань">Казань</option>
							<option value="Орел">Орел</option>
						</select>
					</div>

				</div>
			</div>


		</div>
	</div>


	<div class="HeadinfMain">

		<div class="container">
			<div class="row">

				<div class="col-lg-12">
					<div class="Headinf">
						<div class="Headinf__Logo">
							<img src="img/logo.png" alt="" class="img-responsive">
						</div>
						<div class="Headinf__telephone">
							<p class="Headinf__telephone_time">с 09:00 до 20:00</p>
							<p class="Headinf__telephone_number">+7(812)<span>123-45-67</span></p>
							<a href="#" class="Headinf__telephone_link">Заказать обратный звонок</a>
						</div>	
					</div>

					<div class="HeadKabinet">
						<div class="HeadKabinetFace"></div>		
						<div class="HeadKabinetLove"></div>		
						<div class="HeadKabinetKart">
							<div class="HeadKabinetKart__Korzina">
								<div class="HeadKabinetKart__number">2</div>							
							</div>
							
						</div>


					</div>

					<div class="HeadSearch">
						<div class="HeadSearch__content">
							<form action="">
								<input type="text" placeholder="поиск по ассортименту"  class="HeadSearch__Text">
							</form>
							<div class="HeadSearch__logo1"></div>
							<div class="HeadSearch__logo2"></div>							
						</div>
					</div>

					<div class="HeadSearchMini">
						<div class="HeadSearchMini__content">
							<div class="HeadSearchMini__Text"></div>
							<div class="HeadSearchMini__logo1"></div>
							<div class="HeadSearchMini__logo2"></div>
						</div>
					</div>

				</div>	
			</div>
		</div>
	</div>




	<div class="header__bottom-line">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12">
					<nav class="main-nav">
						<ul>
							<li><a href="#"><span></span>Торты и пироги</a></li>
							<li><a href="#"><span></span>Выпечка</a></li>
							<li><a href="#"><span></span>Пирожные и десерты</a></li>
							<li><a href="#"><span></span>Напитки</a></li>
							<li><a href="#"><span></span>Акции</a></li>
							<li><a href="#"><span></span>Наборы</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div><!-- header__bottom-line -->





</header>






<link rel="stylesheet" href="css/main.css">
<script src="js/scripts.min.js"></script>

<script>
	
	$(function() {

	/* https://masonry.desandro.com */
	$('.companyBlog_wrap').masonry({
		itemSelector: '.companyBlog_post',
		gutter: 30
	});



/*появление меню по клику на крестик*//////////////////////////

	$(".toggleMenu").click(function() {
		$(this).toggleClass("on");
		$("#head__menu").slideToggle();
		$("#head__menu a").click(function() {
			$("#head__menu").css("display", "none");
			$(".toggleMenu").removeClass("on");
		}); 
		return false;
	});

/*появление меню по клику на крестик*//////////////////////////


//STICKY MENU
var navPosition=$('.header__bottom-line').offset().top;

$(window).scroll(function(){
	var navTop=$(window).scrollTop();
	if(navPosition < navTop){
		$('.header__bottom-line').addClass('stickytop');
	}
	else{
		$('.header__bottom-line').removeClass('stickytop');
	}
});












});
</script>

</body>
</html>
