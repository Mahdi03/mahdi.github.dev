<?php
	echo "<h1>Results To HTML Quiz</h1>";
    $servername = "hsmscreativitycenter.org";
	$username = "Mahdi03";
	$password = "Fawaz030";
	$dbname = "Health_Finals_Results";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "You Have Been Connected Successfully To The Server!!!";
    
    $sql = "SELECT id, firstName, lastName, testDate, testTime, testScore, answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10 FROM HTMLQuizResults1";
    $result = $conn->query($sql);
    
    if (mysqli_num_rows($result) > 0) {
        //Loop
        while($row = mysqli_fetch_assoc($result)) {
		$answer1 = $row["answer1"];
		$answer2 = $row["answer2"];
		$answer3 = $row["answer3"];
		$answer4 = $row["answer4"];
		$answer5 = $row["answer5"];
		$answer6 = $row["answer6"];
		$answer7 = $row["answer7"];
		$answer8 = $row["answer8"];
		$answer9 = $row["answer9"];
		$answer10 = $row["answer10"];
		
        echo "
		<br />
		<table>
			<tr>
				<th>Id:</th>
				<th>Name:</th>
				<th>Date:</th>
                <th>Time Submitted:</th>
				<th>Percentage:</th>
				<th>1.</th>
				<th>2.</th>
				<th>3.</th>
				<th>4.</th>
				<th>5.</th>
				<th>6.</th>
				<th>7.</th>
				<th>8.</th>
				<th>9.</th>
				<th>10.</th>
			</tr>
			<tr>
				<td>". $row["id"]."</td>
				<td>". $row["lastName"]. ", ". $row["firstName"]."</td>
				<td>". $row["testDate"]."</td>
                <td>". $row["testTime"]."</td>
				<td>". $row["testScore"]."%</td>
				<td>";
				if ($answer1 !== "Hyper-Text Markup Language") {echo "<p style='color:red'>$answer1</p>";}
				if ($answer1 == "Hyper-Text Markup Language") {echo $answer1;}
				echo "</td><td>";
				if ($answer2 !== "B") {echo "<p style='color:red'>$answer2</p>";}
				if ($answer2 == "B") {echo $answer2;}
				echo "</td><td>";
				if ($answer3 !== "4") {echo "<p style='color:red'>$answer3</p>";}
				if ($answer3 == "4") {echo $answer3;}
				echo "</td><td>";
				if ($answer4 !== "E") {echo "<p style='color:red'>$answer4</p>";}
				if ($answer4 == "E") {echo $answer4;}
				echo "</td><td>";
				if ($answer5 !== "F") {echo "<p style='color:red'>$answer5</p>";}
				if ($answer5 == "F") {echo $answer5;}
				echo "</td><td>";
				if ($answer6 !== "C") {echo "<p style='color:red'>$answer6</p>";}
				if ($answer6 == "C") {echo $answer6;}
				echo "</td><td>";
				if ($answer7 !== "B") {echo "<p style='color:red'>$answer7</p>";}
				if ($answer7 == "B") {echo $answer7;}
				echo "</td><td>";
				if ($answer8 !== "D") {echo "<p style='color:red'>$answer8</p>";}
				if ($answer8 == "D") {echo $answer8;}
				echo "</td><td>";
				if ($answer9 !== "T") {echo "<p style='color:red'>$answer9</p>";}
				if ($answer9 == "T") {echo $answer9;}
				echo "</td><td>";
				if ($answer10 !== "F") {echo "<p style='color:red'>$answer10</p>";}
				if ($answer10 == "F") {echo $answer10;}
				echo "</td>
			</tr>
		</table>
		<br />
		";
    }
} else {
    echo "No results found. Check With Admin <b><u>to fix the code</u></b>!!!!";
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML Quiz Results</title>
	<link href="HTMLQuiz.css" rel="stylesheet">
</head>
<body>

</body>
</html>