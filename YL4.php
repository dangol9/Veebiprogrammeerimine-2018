<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jõle pull</title>
</head>
<body>
    <h1>Õnnitlemine</h1>
    <form action=""method="get">
        Sisesta oma nimi: <input type="text" name="t1"><br>
        Sisesta oma vanus nüüd: <input type="text" name="t2"><br>
        <input type="submit" value="Saada" name="saada">
    </form>
</body>
</html>

<?php
if (isset($_GET['saada'])) {
	$vanus=$_GET['t2'];
$nimi=$_GET['t1'];
	for($nr=1;$nr<=$vanus;$nr++) {
		echo "Palju õnne, ".$nimi.", sa oled juba ".$vanus."&nbspaastat vana!<br>";
	}
}

?>