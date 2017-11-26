$(function() {



	$('.companyBlog_wrap').masonry({
		itemSelector: '.companyBlog_post',
		gutter: 30
	});



	$(".slider_main").slick({
		// normal options...
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

	$(".slider_about").slick({
		infinite: true,
		arrows: true,
		// autoplay: true,
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


	//Плавный скролл к якорю
	$(".scrollDown").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 500);
	});



});
