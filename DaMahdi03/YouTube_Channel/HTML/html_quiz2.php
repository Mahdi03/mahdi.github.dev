<!DOCTYPE HTML>
<html>
<head>
	<title>Score</title>
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
    
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
	$answer7 = $_POST['question-7-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "C") { $totalCorrect++; };
    if ($answer2 == "D") { $totalCorrect++; };
    if ($answer3 == "D") { $totalCorrect++; };
    if ($answer4 == "B") { $totalCorrect++; };
    if ($answer5 == "D") { $totalCorrect++; };
    if ($answer6 == "C") { $totalCorrect++; };
    if ($answer7 == "D") { $totalCorrect++; };
    
    echo "<div id='results'><p style='text-align:center;font-size:100px;font-family:'Courier';'><em><b><i>You got $totalCorrect/7 correct!!</i></b></em></p></div>";
?>
<link href="test.css" rel="stylesheet">
<button width="500" class="button" onclick="window.location.href='what_is_html.html#attributes'"><span>Next Lesson </span></button>
</body>
</html>
