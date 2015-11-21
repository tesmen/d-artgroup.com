<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" itemprop="keywords" content="Группа компаний Д.Арт" />
	<title>Д.Арт: Контакты</title>
	<link rel="stylesheet"  href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
<div class="wrapper">
	<? include "mod_header.html" ?>
	<? 	include "mod_menu.html"	?>
	<div class="content">	

			<h3>Адрес: г. Санкт-Петербург, ул. Садовая, д. 28, оф. 304, 305,</h3>
			<span></span><span class="common__text">8 (812)</span> <span class="title__text">310 - 06 - 16</span><span></span><span class="common__text"> отдел проектирования</span><br>
			<span></span><span class="common__text">8 (952)</span> <span class="title__text">266 - 80 - 22</span><span></span><span class="common__text"> бухгалтерский отдел</span><br>
			<span></span><span class="common__text">8 (931)</span> <span class="title__text">264 - 64 - 66</span><span></span><span class="common__text"> юридический отдел</span><br>
			

	
		<!-- yandex maps widget start-->
		<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script type="text/javascript">
			ymaps.ready(init);
			var myMap, 
				myPlacemark;

			function init(){ 
				myMap = new ymaps.Map("map", {
					center: [59.928938, 30.323315],
					zoom: 16
				}); 
				
				myPlacemark = new ymaps.Placemark([59.929772, 30.325408], {
					hintContent: 'Наш офис',
					balloonContent: 'ул. Садовая, д. 28'
				});
				
				myMap.geoObjects.add(myPlacemark);
			}
		</script>
		<div id="map" style="width: 600px; height: 400px"></div>
		<!-- yandex maps widget end-->
		
		
		<img src="img/line.png" class="closer"/>
	</div>

</div>
<? include "mod_footer.html" ?>

</body>
</html>