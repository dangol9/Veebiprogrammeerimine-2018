<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ellab</title>
</head>
<body>
    <h1>Jagamine</h1>
    <form action=""method="get">
        Arv 1 <input type="text" name="a1"><br>
        Arv 2 <input type="text" name="a2"><br>
        <input type="submit" value="Saada" name="saada">
    </form>
</body>
</html>

<?php
echo '<br> Vastus: ';
function jagamine(){
	return $_GET['a1'] / $_GET['a2'];
}
if (isset($_GET['saada'])) {
	if ($_GET['a2'] > 0) {
	echo jagamine ();
	}
	else {
		echo "Nulliga ei saa jagada";
	}
}
echo "<br><br><hr><br><br>";
?>

<!doctype html>
<body>
    <h1>Täringumäng</h1>
    <form action=""method="get">
        <input type="submit" value="Veereta täringut" name="veereta">
    </form>
</body>
</html>

<?php
echo '<br> Veereetasid: ';
 function veereta(){
	 return rand(1,6);
 }
if (isset($_GET['veereta'])){
	echo veereta();
}
echo "<br><br><hr><br><br>";
?>

<!doctype html>
<body>
    <h1>Kolmnurk</h1>
    <form action=""method="get">
		Külg a kilomeetrites <input type="text" name="akylg"><br>
        Külg b kilomeetrites <input type="text" name="bkylg"><br>
        <input type="submit" value="Arvuta viimane külg" name="arvuta">
    </form>
</body>
</html>

<?php
echo '<br> Külg c: ';
 function pythagoras(){
	 return sqrt(pow($_GET['akylg'],2) + pow($_GET['bkylg'],2));
 }
if (isset($_GET['arvuta'])){
	echo round(pythagoras());
}
echo " km<br><br><br><br><br>";
?>