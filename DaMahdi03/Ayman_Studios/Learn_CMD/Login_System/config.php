<?php
	$servername = "hsmscreativitycenter.org";
	$username = "Mahdi03";
	$password = "Fawaz030";
	$dbname = "Health_Finals_Results";

	$link = mysqli_connect($servername, $username, $password, $dbname);

	if (!$link) {
		die("Connection Failed: " . mysqli_connect_error());
	}
	else {
		echo "<p>Successfully Connected To Server!!!</p>";
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

</body>
</html>