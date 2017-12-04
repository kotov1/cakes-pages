






/*====================== Наши скрипты =============================*/

$(function() {

	//Верхний слайдер главной страницы
	$(".slider_main").slick({
		infinite: true,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [{

		breakpoint: 576,
			settings: {
			adaptiveHeight: true,
			arrows: false
			}

		}]
	});

	//отмена действия ссылок по умолчанию
	$('a.shop_card-link').on('click', function(e) {
			e.preventDefault();
		});
	


	//Слайдер в секции отзывы главной страницы
	$(".slider_about").slick({
		infinite: true,
		arrows: true,
		autoplay: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplaySpeed: 5000,

		responsive: [

		{
		breakpoint: 1200,
		settings: {
			slidesToShow: 2
			}
		},

		{
		breakpoint: 768,
		settings: {
			slidesToShow: 1
			}
		},

		{
		breakpoint: 576,
		settings: {
			slidesToShow: 1,
			adaptiveHeight: true,
			arrows: false
			}

		}]
	});


	//Плавный скролл к якорю секции интернет магазин тортов 
	$(".scrollDown").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 500);
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

	/*masonry на странице Блог*/
	/* https://masonry.desandro.com */
	$('.companyBlog_wrap').masonry({
		itemSelector: '.companyBlog_post',
		gutter: 30
	});



});
