<!DOCTYPE HTML>
<html>
<head>
	<title>Score</title>
	<link href="test.css" rel="stylesheet"/>
</head>
<body style="background-color:powderblue;">
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
<?php
    
    $answer5 = $_POST['question-5-answers'];
    
    if ($answer5 == "/p") {
		echo "<div id='results'><p style='text-align:center;font-size:100px;font-family:'Courier';'><em><b><i>You got it correct!!</i></b></em></p></div>";
	};
	if ($answer5 != "/p") {
		echo "<div id='results'><p style='text-align:center;font-size:100px;font-family:'Courier';'><em><b><i>I'm Sorry But You Had It Wrong!</i></b></em></p></div>";
	};
?>
<meta http-equiv="refresh" content="3;url=html_question_6.html" />
</body>
</html>