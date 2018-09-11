<?php
#For tsükkel on eelkontrolliga tsükkel
for($number = 14; $number <= 28; $number ++) {
	echo $number,'<br>';
}
$number = 90;
echo '<br><br>';
#do...while tsükkel on järelkontrolliga tsükkel
do{
	echo $number.'<br>';
	$number--;
} while($number >= 80);
echo '<br><br>';
$number = 49;
#while tsükkel on eelkontrolliga
while($number <= 70){
	$number++;
	if($number <= 69){
		echo $number.', ';
	}
}
echo 70;
echo '<br><br>';
for($number = 1; $number <= 40; $number ++) {
	if($number % 2 == 0) {
		echo $number,'<br>';
	}
}
?>