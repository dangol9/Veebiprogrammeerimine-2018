<?php
require("functions.php");
$notice = listallmessages();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	  Anonuumsete sonumite lisamine</title>
</head>
<body>
	<h1>Sonumid</h1>
<?php
echo $notice;
?>
	
	</body>
</html>










