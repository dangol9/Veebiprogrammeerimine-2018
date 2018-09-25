<?php
require("functions.php");
$notice = null;
if (isset($_POST["submitMessage"])){
if ($_POST["message"] != "Siia sisesta oma sõnum ..." and !empty($_POST["message"])){
	$message = test_input($_POST["message"]);
	$notice = saveamsg($message);
	} else {
	$notice = "Palun kirjuta sõnum!";
	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	  Anonuumse sonumi lisamine</title>
</head>
<body>
	<h1>Sonumi lisamine</h1>

	
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <label>Sõnum(max 256 märki): </label>
	  <br>
	<textarea rows="4" cols="64" name="message">Siia sisesta oma sõnum ...</textarea>
	  <input type="submit" name="submitMessage" value="Salvesta sõnum">
    </form>
	<hr>
	<p><?php echo $notice ?></p>
	
	</body>
</html>










