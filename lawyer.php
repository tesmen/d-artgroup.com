<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" itemprop="keywords" content="Группа компаний Д.Арт" />
	<title>Д.Арт: Юридические услуги</title>
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
		<p>Компания "D.ART" предлагает широкий спектр юридических услуг.</p>
		
		<table class="lawyer">
			<thead>
				<tr>
					<tr><td colspan=2 class="category">Прейскурант цен на юридические услуги</td></tr>
				</tr>
			</thead>
			<tbody>
				<?
					$lines = file('attorney.txt');
					for ($i = 0; $i < count($lines); $i+=3):
				?>
					<tr>
						<td class="left"><?= $lines[$i] ?></td>
						<td><?= $lines[$i+1] ?></td>
					</tr>
				<? 
					endfor 
				?>
				<tr><td colspan=2 class="category">Адвокат по гражданским делам</td></tr>
				<?
					$lines = file('lawyer.txt');
					for ($i = 0; $i < count($lines); $i+=3):
				?>
					<tr>
						<td class="left"><?= $lines[$i] ?></td>
						<td><?= $lines[$i+1] ?></td>
					</tr>
				<? 
					endfor 
				?>
			</tbody>
		</table>
		
		<img src="img/line.png" class="closer"/>
		<br>
		<span class="title__text">Адвокат по гражданским делам</span>
		<ul >
			<li class="common__text">Семейные споры</li>
			<li class="common__text">Трудовые споры</li>
			<li class="common__text">Наследственные споры</li>
			<li class="common__text">Споры по правам на недвижимое имущество, квартиры, земельные участки, здания</li>
		</ul>
		
	</div>

</div>
<? include "mod_footer.html" ?>

</body>
</html>