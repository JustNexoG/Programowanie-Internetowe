<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Liczba 1: </label>
	<input id="id_x" type="text" name="x" value="<?php print(isset($x)); ?>" /><br />
	<label for="id_op">Operacja: </label>
	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
	</select><br />
	<label for="id_y">Liczba 2: </label>
	<input id="id_y" type="text" name="y" value="<?php print(isset($y)); ?>" /><br />
	<input type="submit" name="action1" value="Oblicz działanie" />
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
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

<form action="<?php print(_APP_URL);?>/app/calc2.php" method="post">
    <h1>Oprocentowanie kredytu.</h1>
	<label for="id_xx">Kwota kredytu: </label>
	<input id="id_xx" type="text" name="xx" value="<?php print(isset($xx));?>" /><br/>
        <label for="id_yy">Lata kredytu: </label>
        <input id="id_yy" type="text" name="yy" value="<?php print(isset($xx));?>" /><br/>
        <label for="id_zz">Procent kredytu: </label>
        <input id="id_zz" type="text" name="zz" value="<?php print(isset($zz));?>" /><br/>
        <input type="submit" name="action2" value="Oblicz kredyt" />
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages2)) {
	if (count ( $messages2 ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages2 as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result2)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result2; ?>
</div>
<?php } ?>
    
</body>
</html>