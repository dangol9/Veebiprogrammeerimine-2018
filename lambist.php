<!DOCTYPE HTML>
<html>
<head>
<style>
</style>
<meta charset="utf-8">
<title>Pendulum 2018</title>
</head>
<body background="pildid/bg.jpg">
<h1 style="color:white;">Pendulum</h1>
<a href="http://www.wiki.com" style="color:white;">The Island</a><br>
<img src="pildid/island_pendulum.jpg" alt="album cover" height="400 px" width="400 px">
<h1>Starset</h1>
<a href="http://www.wiki.com" style="color:orange;"><h2>Vessels</h1></a><br>
<a href="http://www.starset.com">
<img border="0" alt="Starset" src="pildid/starset_vessels.jpg" width="400 px" height="400 px">
</a><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">




<?php
echo '<select name="month">' . PHP_EOL;
    for ($m=1; $m<=12; $m++) {
        echo '  <option value="' . $m . '">' . date('M', mktime(0,0,0,$m)) . '</option>' . PHP_EOL;
    }
    echo '</select>' . PHP_EOL;
$date = date("d.m.Y");
$hour = date("G");
$part = "";
if ($hour < 8){
	$part = "varane hommik";
}
if ($hour >= 8 and $hour < 16) {
	$part = "koolipäev";
}
if ($hour >= 16) {
	$part = "yhtu";
}
echo "<h1>Tänane kuupäev on ". $date, " ja " .$hour, " on kellaeg praegu.</h1>";
echo "<h1>Lehe avamisel oli ". $part, " vist haha</h1>";
?>
</body>


</html>
