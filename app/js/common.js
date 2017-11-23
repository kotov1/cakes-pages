$(function() {

	/*Masonry in blog.html*/
	/* https://masonry.desandro.com */
	$('.companyBlog_wrap').masonry({
		itemSelector: '.companyBlog_post',
		gutter: 30
	});


	$(".slider").slick({
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

});
