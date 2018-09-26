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
    $sql = "CREATE TABLE HTMLQuizResults1 (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstName VARCHAR(20) NOT NULL,
lastName VARCHAR(20) NOT NULL,
testDate VARCHAR(10) NOT NULL,
testTime VARCHAR(10) NOT NULL,
testScore INT NOT NULL,
answer1 VARCHAR(27) NOT NULL,
answer2 CHAR NOT NULL,
answer3 INT NOT NULL,
answer4 CHAR NOT NULL,
answer5 CHAR NOT NULL,
answer6 CHAR NOT NULL,
answer7 CHAR NOT NULL,
answer8 CHAR NOT NULL,
answer9 CHAR NOT NULL,
answer10 CHAR NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table HTMLQuizResults created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

?>