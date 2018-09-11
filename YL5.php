<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Time to get serious</title>
</head>
<body>
    <h1>Nimi</h1>
    <form action=""method="get">
        Sisesta oma nimi <input type="text" name="nimi"><br>
        <input type="submit" value="Saada" name="saada">
    </form>
</body>
</html>

<?php
if (isset ($_GET['saada'])) {
	#Teeb tähed suureks
	$nimi = $_GET['nimi'];
	echo '<br>';
	echo ucwords($nimi),'<br>';
	
	#Lisab tähtede vahele punktid
	$nr=0;
	while($nr<=strlen($nimi)){
		echo strtoupper(substr($nimi,$nr,1));
		if ($nr <= strlen($nimi) - 2){
			echo '.';
		}
		$nr++;
	}
	echo '<br><hr><br>';
}
?>

<!doctype html>
<body>
    <h1>Ropud sõnad asendatakse tärnidega</h1>
    <form action=""method="get">
		Sisesta sõnum <input type="text" name="xd"><br>
        <input type="submit" value="Saada" name="saada">
    </form>
</body>
</html>

<?php
$roppused = array('türa','puts','vitt','perse','hoorapurikas');
$asenda = array('****','****','****','*****','************');
	if (isset ($_GET['saada'])) {
		$msg = $_GET['xd'];
		echo str_replace($roppused, $asenda, $msg);
	}
	echo '<br><hr><br>';
?>

<!doctype html>
<body>
    <h1>E-posti aadressi tegemine</h1>
    <form action=""method="get">
		Sisesta eesnimi <input type="text" name="enimi"><br>
        Sisesta perekonnanimi <input type="text" name="pnimi"><br>
        <input type="submit" value="Loo e-posti aadress" name="saada">
    </form>
</body>
</html>

<?php
	if (isset ($_GET['saada'])) {
		$enimi = ($_GET['enimi']);
		$pnimi = ($_GET['pnimi']);
		$tapitahed = array('ä','ö','ü','õ');
		$asendused = array('a','o','y','o');
		str_replace($tapitahed, $asendused, $nimi);
		echo 'Sinu uus e-posti aadress on: ',strtolower(str_replace($tapitahed, $asendused, $enimi)),'.',strtolower(str_replace($tapitahed, $asendused, $pnimi)),'@tlu.ee';
	}
?>