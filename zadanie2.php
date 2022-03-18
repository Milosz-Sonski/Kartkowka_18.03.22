<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>Zadanie 2</title>
</head>
<body>
<form action='' method="POST">
	</br>
    <input type="text" name="liczba" value="podaj liczbę (silnia)">
    <input type="text" name="liczba1" value="podaj liczbę (ciąg fibonacciego)">
	<input type="submit" name="przycisk" value="Podaj">
</form>
<?php
/*silnia*/

if (isset($_POST['przycisk'])){
$liczba=$n = $_POST['liczba'];
$silnia = 1;
       for ($i=1; $i<=$n; $i++) {
         $silnia *= $i;
       }
       echo ("$n! = $silnia");
       echo("<br>");

/*ciąg fibonacciego*/

$liczba1=$number = $_POST['liczba1'];
function fibonacci($number)
{
    if ($number <= 2) {
        return 1;
    }
    return fibonacci($number - 1) + fibonacci($number - 2);
}
echo fibonacci($liczba1);

/*trzeba uzupełnić obie dane!*/
}
?>
</body>
</html>