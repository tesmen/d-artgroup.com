<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" itemprop="keywords" content="веб-разработка, программирование, веб-студия, веб-дизайн, верстка" />
	<title>Группа компаний Д.Арт</title>
	<link rel="stylesheet"  href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="js/slides.js"></script>
	
	<script>
		$(function(){
			$("#slides").slides({
				responsive: true,
				height: 400
			});
		});
		$("document").ready(function(){
			$("#slides").slides("play");
		});
	</script>
</head>
<body>
<div class="wrapper">
	<? include "mod_header.html" ?>
	<? 	include "mod_menu.html"	?>
	<div class="content">	
		<div id="container">
			<div id="slides">
				<img src="/img/slide-1.jpg" width="100%" alt="Slide 1">
				<img src="/img/slide-2.jpg" width="100%" alt="Slide 2">
				<img src="/img/slide-3.jpg" width="100%" alt="Slide 3">
				<img src="/img/slide-4.jpg" width="100%" alt="Slide 4">
				<img src="/img/slide-5.jpg" width="100%" alt="Slide 5">
				<img src="/img/slide-6.jpg" width="100%" alt="Slide 6">
				<img src="/img/slide-7.jpg" width="100%" alt="Slide 7">
				<img src="/img/slide-8.jpg" width="100%" alt="Slide 8">
				<img src="/img/slide-9.jpg" width="100%" alt="Slide 9">
			</div>
		</div>

	</div>
	
</div>
<? include "mod_footer.html" ?>

</body>
</html>