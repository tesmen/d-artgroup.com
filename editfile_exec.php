<?php
if ($_POST['pass'] == "191023"){
	$file = fopen($_POST['file'], "w");
	$input = $_POST['data'];
	function fwrite_stream($fp, $string) {
		for ($written = 0; $written < strlen($string); $written += $fwrite) {
			$fwrite = fwrite($fp, substr($string, $written));
			if ($fwrite === false) {
				return $written;
			}
		}
		return $written;
	}

	fwrite_stream($file, $input);
	header("location:edit.php");
} else {
	echo "Неверный пароль"; 
}

?>