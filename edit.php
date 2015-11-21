<?
$attorney = file('attorney.txt');
$lawyer = file('lawyer.txt');
$billing = file('billing.txt');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Edit</title>
	<link rel="stylesheet"  href="edit_style.css" />
</head>
<body>

<div class="wrapper">
	<input type=radio id="list1" name="select" /><label for="list1">Юридические услуги</label>
	<input type=radio id="list2" name="select" /><label for="list2">Договора</label>
	<input type=radio id="list3" name="select" /><label for="list3">Бухгалтерские услуги</label>
	<input type=radio id="list4" name="select" /><label for="list4">Бухгалтерские доп.</label>
	
	<div class="edit__form">
		<form action="editfile_exec.php" method="post" >
			<textarea name="data"><? echo file_get_contents('attorney.txt'); ?></textarea><br>
			<input type="hidden" name="file" value="attorney.txt">
			<input type="submit"><span></span><input type="password" name="pass" />
		</form>
	</div>
	<div class="edit__form">
		<form action="editfile_exec.php" method="post" >
			<textarea name="data"><? echo file_get_contents('lawyer.txt'); ?></textarea><br>
			<input type="hidden" name="file" value="lawyer.txt">
			<input type="submit"><span></span><input type="password" name="pass" />
		</form>
	</div>
	<div class="edit__form">
		<form action="editfile_exec.php" method="post" >
			<textarea name="data"><? echo file_get_contents('billing.txt'); ?></textarea><br>
			<input type="hidden" name="file" value="billing.txt">
			<input type="submit"><span></span><input type="password" name="pass" />
		</form>
	</div>
	<div class="edit__form">
		<form action="editfile_exec.php" method="post" >
			<textarea name="data"><? echo file_get_contents('billing-add.txt'); ?></textarea><br>
			<input type="hidden" name="file" value="billing-add.txt">
			<input type="submit"><span></span><input type="password" name="pass" />
		</form>
	</div>
</div>

</body>




