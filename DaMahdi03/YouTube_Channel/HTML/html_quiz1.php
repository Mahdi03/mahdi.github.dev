<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>
	What is HTML?
</title>
<link href="html_quiz1.css" rel="stylesheet">
</head>
<body style="background-color:black">
<style>
p {
	text-align: center;
	font-size: 80px;
	font-family: 'Impact';
	color: white;

}
</style>
<?php
$guess = $_POST['htmlguess'];
if ($guess == "HyperText Markup Language") {
	echo "<p>Lucky Guess!!! That was correct!</p>";
}
else {
	echo "<p>Nice try! But it actually stands for...</p>";
}
?>
<meta http-equiv="refresh" content="2;url=what_is_html.html#htmlstandsfor" />
</body>
</html>