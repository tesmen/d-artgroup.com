<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" itemprop="keywords" content="Группа компаний Д.Арт" />
	<title>Д.Арт: Бухгалтерские услуги</title>
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
		<p>Компания "D.ART" предлагает широкий спектр услуг по бухгалтерскому сопровождению огранизаций.</p>
		<table class="billing">
			<thead>
				<tr>
					<tr><td colspan=4 class="category">Бухгалтерский учет и отчетность</td></tr>
					<td rowspan=2 width=200>Количество документов* в месяц(без операций по зарплате и расчетов с физ.лицами)</td>
					<td colspan=3>Стоимость в зависимости от системы налогообложения</td>
				</tr>
				<tr>
					<td>ОСН, УСН 15%</td>
					<td>УСН 6%, ЕНВД</td>
					<td>только ИП на УСН 6%</td>

				</tr>
			</thead>
			<tbody>
				<?
					$lines = file('billing.txt');
					for ($i = 0; $i < count($lines); $i+=5):
				?>
					<tr>
						<td class="left"><?= $lines[$i] ?></td>
						<td><?= $lines[$i+1] ?></td>
						<td><?= $lines[$i+2] ?></td>
						<td><?= $lines[$i+3] ?></td>
					</tr>
				<? 
					endfor 
				?>
			</tbody>
		</table>
		
		<img src="img/line.png" class="closer"/>
		
		<table border=0 width=100% cellspacing=0 class="billing">
			<thead>
				<tr>
					<tr><td colspan=2 class="category">Дополнительные услуги</td></tr>
				</tr>
			</thead>
			<tbody>
				<?
					$lines = file('billing-add.txt');
					for ($i = 0; $i < count($lines); $i+=3):
				?>
					<tr>
						<td class="left" width=550><?= $lines[$i] ?></td>
						<td><?= $lines[$i+1] ?></td>
					</tr>
				<? 
					endfor 
				?>
			</tbody>
		</table>
		
		<img src="img/line.png" class="closer"/>
	</div>

</div>
<? include "mod_footer.html" ?>

</body>
</html>