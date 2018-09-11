<form action="" method="get">
<table align="center">
		Sisestage max punkti <br><input type="text" name="max"><br><br>
		Sisestage kui palju punkte Te saite <br><input type="text" name="punktid"><br>
		<input type="submit" value="Tulemus" name="tulemus">
	</form>
	
	<?php
	// Daniel Golubkov IT-15 6.10.2016
	$protsent = ($_GET['punktid'] / $_GET['max'])* 100;
	if($protsent < 45){
		echo "Hinne 2";
	}
	elseif($protsent >=45 && $protsent <=69){
		echo "Hinne 3";
	}
	elseif ($protsent >=70 && $protsent <=89){
		echo "Hinne 4";
	}
	elseif ($protsent >89){
		echo "Hiine 5";
	}
	
	?>