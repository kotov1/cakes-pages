<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Заголовок</title> <!-- Загаловок -->
	<!-- <link href="img/faicon.ico" rel="shortcut icon" type="img/x-icon"> --> <!-- Иконка -->
	<meta name="description" content=""> <!-- Описание -->
	<meta name="keywords" content=""> <!-- Ключивые слова -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
</head>
<body>

	<!-- =====================================
	HEADER START
	===================================== -->
	<?php include("blocks/header.php");?>
	<!-- =====================================
	HEADER END
	===================================== -->

<!-- ================================** body **==================================== -->
<div class="question-cart-page all-style-text">
	<div class="content_wrap">

		<div class="page_head">

	<div class="link-navigation">
		<div class="row">
			<div class="col no-pad">
				<ul>
					<li><a href="">Главная</a></li>
					<li>/</li>
					<li><a href="">Вопрос ответ</a></li>
				</ul>
			</div><!-- col end -->
		</div><!-- row end -->
	</div><!-- link navigation end -->

	<div class="question-articl">
		<div class="row">
			<div class="col">
				<img src="img/left-arrow-in-a-circle.svg" alt="arrow-left" style="width: 25px;top: 7px;position: relative;left: -25px;">
				<h1><img class="humanQ" src="img/icon-question.svg" alt="human question">Когда доставка десертов? Я могу заказать на определенное время в день заказа?</h1>
			</div><!-- col end -->
			<div class="col-12">
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup
					</h2>
			</div>
			<div class="col pad-left">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae </p>
			</div>

			<div class="col">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae </p>
			</div>
		</div><!-- row end -->



</div><!-- container end -->
</div>
</div><!-- all-style -->

<!-- =====================================
HEADER START
===================================== -->
<?php include("blocks/footer.php");?>
<!-- =====================================
HEADER END
===================================== -->




<!-- ================================** CSS **==================================== -->

<!-- <link rel="stylesheet" type="text/css" href="css/fonts.css"> -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="libs/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<!-- ================================** JS **==================================== -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="libs/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
$(document).ready(function () {
		$("#owl-carusel").owlCarousel({
				navigation: false,
				slideSpeed: 300,
				paginationSpeed: 400,
				singleItem: true,
				afterInit: makePages,
				afterUpdate: makePages
		});

		function makePages() {
				$.each(this.owl.userItems, function(i) {
						$('.owl-controls .owl-page').eq(i)
								.css({
										'background': 'url(' + $(this).find('img').attr('src') + ')',
										'background-size': 'cover'
								})
				});
		}
});

$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');
			});
});
</script>

</body>
</html>
