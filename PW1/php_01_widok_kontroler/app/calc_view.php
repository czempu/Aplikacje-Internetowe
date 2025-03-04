<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>


<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<input type="hidden" name="mode" value="1">  <!--  adding mode for calc  -->
	<label for="id_x">Liczba 1: </label>
	<input id="id_x" type="text" name="x" value="<?php if(isset($x)){print($x);}  ?>" /><br />
	<label for="id_op">Operacja: </label>
	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
	</select><br />
	<label for="id_y">Liczba 2: </label>
	<input id="id_y" type="text" name="y" value="<?php if(isset($y)){print($y);} ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<!--  add credit calc from  -->
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	
	<input type="hidden" name="mode" value="2">  <!--  adding mode for credit calc  -->
	
	<label for="id_x">Kwota Kredytu - </label>
	<input id="id_x" type="text" name="x1" value="<?php if(isset($x1)){print($x1);} ?>" /><br />
	<label for="id_y">Oprocentowanie - </label>
	<input id="id_y" type="text" name="y1" value="<?php if(isset($y1)){print($y1);} ?>" /><br />
	<label for="id_z">Ile lat - </label>
	<input id="id_z" type="text" name="z1" value="<?php if(isset($z1)){print($z1);} ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	







<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo $result; ?>
</div>
<?php } ?>

</body>
</html>