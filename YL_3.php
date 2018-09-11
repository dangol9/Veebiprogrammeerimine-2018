<form action="" method="get">
<table align="center">
		Sisestage arv <br><input type="text" name="arv"><br><br>
		<input type="submit" value="Kontrolli" name="vastus">
	</form>

<?php
// Daniel Golubkov IT-15 6.10.2016

if(isset($_GET['vastus'])){
	$arv = $_GET['arv'];
	$jaak = $arv%3;
	if($jaak>0) {
		echo "see arv ei jagu kolmega ja jaak on '$jaak'";
		}else{
		echo "'$arv' see arv jagab kolmega";
	
	}
	}
?>