<?php
require("../../config.php");
//echo $GLOBALS["serverUsername"];
//sisestuse kontroll

//sonumi salvestamine
function saveamsg($msg){
$notice = "";
//serveri uhendus (server, kasutaja, pswd, database)
$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
// inserting
$stmt = $mysqli->prepare("INSERT INTO vpamsg (message) VALUES(?)");
echo $mysqli->error;
// change question mark (datatype, data itself)
// s - string, i - integer, d - decimal
$stmt->bind_param("s", $msg);
 if ($stmt->execute()){
	 $notice = 'Sõnum: "' .$msg .'" on salvestatud.';
 } else {
$notice = "Sõnumi salvestamisel tekkis tõrge: " .$stmt->error;	 
}
$stmt->close();
$mysqli->close();
return $notice;
}

function listallmessages(){
	$msgHTML = "";
$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
$stmt = $mysqli->prepare("SELECT message FROM vpamsg");
	echo $mysqli->error;
	$stmt->bind_result($msg);
	$stmt->execute();
	while($stmt->fetch()){
		$msgHTML .= "<p>" .$msg ."</p> \n";
	};
	$stmt->close();
$mysqli->close();
return $msgHTML;
	}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>