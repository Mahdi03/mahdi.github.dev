<!DOCTYPE HTML>
<html>
<head>
	<title>My First HTML Project</title>
	<style>
		.button {
		border-radius: 4px;
		background-color: #0b3705;
		border: none;
		color: royalblue;
		text-align: center;
		font-size: 25px;
		font-family: 'Elephant';
		padding: 20px;
		width: 150px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
		}

		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

			.button span:after {
				content: '\00bb';
				position: absolute;
				opacity: 0;
				top: 0;
				right: -20px;
				transition: 0.5s;
			}

		.button:hover span {
			padding-right: 25px;
		}

			.button:hover span:after {
				opacity: 1;
				right: 0;
			}
		.button span {
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
		}

			.button span:after {
				content: '\00bb';
				position: absolute;
				opacity: 0;
				top: 0;
				right: -20px;
				transition: 0.5s;
			}

		.button:hover span {
			padding-right: 25px;
		}

			.button:hover span:after {
				opacity: 1;
				right: 0;
			}
			.button {
				text-align: center;

			}
	</style>
</head>
<body>
<?php
$code = $_POST['code_terminal'];
if ($code == "<!DOCTYPE HTML>
<html>
<head>
<title>My First HTML Project</title>
</head>
<body>
<!--Please Type In Your Code After This Line!(This is a Comment in HTML Code)-->
<h1>Hello World!</h1>
<p>Hello World!</p>
</body>
</html>
") {
	echo "<h1>Hello World!</h1><p>Hello World!</p>";
}
else {
	echo "<h1>I'm Sorry But Your Code Was Incorrect. Please Go Back And Try To Fix It!</h1>	<style>
		body {
			background-color: blue;
		}
		h1 {
			color: white;
			text-align: center;
			font-size: 75px;
		}
	</style>";
}
?>
<button width="500" class="button" onclick="window.location.href='what_is_html.html#htmlproject1'"><span>Go Back </span></button>
<a href="HTML Project 1.html" download>Download Your Code Here!!!!</a>
</body>
</html>