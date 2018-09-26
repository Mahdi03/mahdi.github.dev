<?php
    $servername = "hsmscreativitycenter.org";
	$username = "Mahdi03";
	$password = "Fawaz030";
	$dbname = "Health_Finals_Results";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
    echo "Connected Successfully";


    //Global Vars
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
	$testDate = date("m/d/Y");
	$testTime = date("h:i:sa");
    $answer1 = $_POST['answer1']; //Hyper-Text Markup Language
    $answer2 = $_POST['answer2']; //B
	$answer3 = $_POST['answer3']; //4
	$answer4 = $_POST['answer4']; //E
	$answer5 = $_POST['answer5']; //F
	$answer6 = $_POST['answer6']; //C
	$answer7 = $_POST['answer7']; //B
	$answer8 = $_POST['answer8']; //D
	$answer9 = $_POST['answer9']; //T
	$answer10 = $_POST['answer10']; //F

    $totalCorrect = 0;
    
    echo "<br />";
    echo "Your name is  $firstName $lastName";
    echo "<br />";
    echo "This test was submitted on $testDate";
    if ($answer1 == "Hyper-Text Markup Language") {
        echo "<p style='color:green;'>You got 1. Correct!!! It was $answer1.</p>";
        $totalCorrect++;
    };
    if ($answer1 !== "Hyper-Text Markup Language") { echo "<p style='color:red;'>You got 1. Incorrect!!! The Correct Answer Is 'Hyper-Text Markup Language'.</p>"; };
    
    if ($answer2 == "B") {
        echo "<p style='color:green;'>You got 2. Correct!!! It was $answer2.</p>";
        $totalCorrect++;
    };
    if ($answer2 !== "B") { echo "<p style='color:red;'>You got 2. Incorrect!!! The Correct Answer Was 'B'.</p>"; };

	if ($answer3 == "4") {
        echo "<p style='color:green;'>You got 3. Correct!!! It was $answer3.</p>";
        $totalCorrect++;
    };
    if ($answer3 !== "4") { echo "<p style='color:red;'>You got 3. Incorrect!!! The Correct Answer Was '4'.</p>"; };

	if ($answer4 == "E") {
        echo "<p style='color:green;'>You got 4. Correct!!! It was $answer4.</p>";
        $totalCorrect++;
    };
    if ($answer4 !== "E") { echo "<p style='color:red;'>You got 4. Incorrect!!! The Correct Answer Was 'E'.</p>"; };

	if ($answer5 == "F") {
        echo "<p style='color:green;'>You got 5. Correct!!! It was $answer5.</p>";
        $totalCorrect++;
    };
    if ($answer5 !== "F") { echo "<p style='color:red;'>You got 5. Incorrect!!! The Correct Answer Was 'F'.</p>"; };

	if ($answer6 == "C") {
        echo "<p style='color:green;'>You got 6. Correct!!! It was $answer6.</p>";
        $totalCorrect++;
    };
    if ($answer6 !== "C") { echo "<p style='color:red;'>You got 6. Incorrect!!! The Correct Answer Was 'C'.</p>"; };

	if ($answer7 == "B") {
        echo "<p style='color:green;'>You got 7. Correct!!! It was $answer7.</p>";
        $totalCorrect++;
    };
    if ($answer7 !== "B") { echo "<p style='color:red;'>You got 7. Incorrect!!! The Correct Answer Was 'B'.</p>"; };

	if ($answer8 == "D") {
        echo "<p style='color:green;'>You got 8. Correct!!! It was $answer8.</p>";
        $totalCorrect++;
    };
    if ($answer8 !== "D") { echo "<p style='color:red;'>You got 8. Incorrect!!! The Correct Answer Was 'D'.</p>"; };

	if ($answer9 == "T") {
        echo "<p style='color:green;'>You got 9. Correct!!! It was $answer9.</p>";
        $totalCorrect++;
    };
    if ($answer9 !== "T") { echo "<p style='color:red;'>You got 9. Incorrect!!! The Correct Answer Was 'T'.</p>"; };

	if ($answer10 == "F") {
        echo "<p style='color:green;'>You got 10. Correct!!! It was $answer10.</p>";
        $totalCorrect++;
    };
    if ($answer10 !== "F") { echo "<p style='color:red;'>You got 10. Incorrect!!! The Correct Answer Was 'F'.</p>"; };
    $testScore = ($totalCorrect / 10) * 100;
    echo "You got $totalCorrect/10 which amounts to a $testScore%.";

	//Put Results Into Database
	$sql = "INSERT INTO HTMLQuizResults1 (firstName, lastName, testDate, testTime, testScore, answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10)
	VALUES ('$firstName', '$lastName', '$testDate', '$testTime', '$testScore%', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10')";

	if (mysqli_query($conn, $sql)) {
		echo "Your Test Results Have Been Submitted!!";
	}
	else {
		echo "Error: " . $sql . "<br />" . mysqli_error($conn);
	}















?>