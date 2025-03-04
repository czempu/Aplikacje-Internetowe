
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator Kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">

<a href="<?php print(_APP_ROOT); ?>/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
<!--  add credit calc from  -->
<form action="<?php print(_APP_URL);?>/app/calcCred.php" method="post"  class="pure-form pure-form-stacked">
	<legend>Kalkulator Kredytowy</legend>

	<label for="id_KwotaKredytu">Kwota Kredytu</label>
	<input id="id_KwotaKredytu" type="text" name="KwotaKredytu" value="<?php if(isset($KwotaKredytu)){print($KwotaKredytu);} ?>" /><br />
	<label for="id_Oprocentowanie">Oprocentowanie</label>
	<input id="id_Oprocentowanie" type="text" name="Oprocentowanie" value="<?php if(isset($Oprocentowanie)){print($Oprocentowanie);} ?>" /><br />
	<label for="id_Lata">Ile lat</label>
	<input id="id_Lata" type="text" name="Lata" value="<?php if(isset($Lata)){print($Lata);} ?>" /><br />
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
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
<?php echo 'Miesięczna Rata: '.$result; ?>
</div>
<?php } ?>
</div>
</body>
</html>