<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" itemprop="keywords" content="Группа компаний Д.Арт" />
	<title>Д.Арт: Просмотр изображения</title>
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
		<? for ($i = 0; $i <= (count($_GET)-1); $i++): ?>
		<img src="<?=$_GET['photo' . $i] ?>" class="show__photo" width=640 />
		<? endfor ?>
	</div>

</div>
<? include "mod_footer.html" ?>

</body>
</html>