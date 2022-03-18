<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>Zadanie 1</title>
</head>
<body>
<form action='' method="POST">
	</br>
    <input type="text" name="imie" value="podaj imię">
    <input type="text" name="nazwisko" value="podaj nazwisko">
    <input type="number" name="numer" value="podaj numer">
	<input type="submit" name="przycisk" value="Podaj">
</form>
<?php
if (isset($_POST['przycisk'])){
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $numer=$_POST['numer'];

    $rest = substr($nazwisko, 0, $numer-1);
    $rest3 = substr($nazwisko, $numer, null);

    $rest1 = substr($imie, 0, $numer-1);
    $rest2 = substr($imie, $numer, null);
echo $imie.' '.$nazwisko;
echo ('<br>');
echo $rest1.$rest2.' '.$rest.$rest3;
}
?>
</body>
</html>