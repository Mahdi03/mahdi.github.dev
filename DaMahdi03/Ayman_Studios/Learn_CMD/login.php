<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<?php
    $servername = "hsmscreativitycenter.org";
	$username = "Mahdi03";
	$password = "Fawaz030";
    $dbname = "Health_Finals_Results";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection Failed: " . mysqli_connect_error());
	}
	else {
		echo "<p>Successfully Connected To Server!!!</p>";
	}

	$sqlToCreateTable = "CREATE TABLE Learn_CMD (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(25) NOT NULL,
	email VARCHAR(50) NOT NULL,
	userName VARCHAR(25) NOT NULL UNIQUE,
	pass VARCHAR(40) NOT NULL,
	signedUpDate VARCHAR(20) NOT NULL,
	XMLdirectories TEXT
	)";

	$sqlToDeleteTable = "DROP TABLE Learn_CMD";

	if (mysqli_query($conn, $sqlToCreateTable)) {
		echo "Table Learn_CMD created successfully";
	}
	else {
		echo "Error creating table: " . mysqli_error($conn);
	}

    $input_password = $_POST['password'];
    $input_username = $_POST['username'];
	$input_username = stripslashes($input_username);
	$input_password = stripslashes($input_password);
	$input_username = mysql_real_escape_string($input_username);
	$input_password = mysql_real_escape_string($input_password);

	$sql = "SELECT * FROM Learn_CMD WHERE userName = '$input_username' AND userName = '$input_password'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
		$_SESSION['signedIn'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $input_username;
	}

	if (isset($_POST['login']) && !empty($input_username) && !empty($input_password)) {
				
               if ($input_password == "hi") {
                  
                  echo "You logged in on ". date("d/m/Y"). " at ". date("h:i:sa"). "<br>";
                  viewDatabase();
               }
			   else {
                  $msg = '<p style="color:red;">Wrong username or password!!!!</p>';
               }
            }
?>

<?php
			//Global Variables
			$input_username = $_POST['username'];
			//Error Message
            $msg = '';
			//DB Login Credentials
			$servername = "hsmscreativitycenter.org";
			$username = "Mahdi03";
			$password = "Fawaz030";
			$dbname = "Health_Finals_Results";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			$input_username = $_POST['username'];
			$input_password = $_POST['password'];

			//main login function
            
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register Now!!!</title>
		<link href="style.css" rel="stylesheet">
	</head>
	<body id="body-color">
		<div id="Sign-Up">
			<fieldset style="width:30%">
				<legend>Register Now!!!</legend>
				<table>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
						<h4><?php echo $msg; ?></h4>
						<tr>
							<td class="user_info">Username:</td>
							<td> <input type="text" name="username" required></td>
						</tr>
						<tr>
							<td class="user_info">Password:</td>
							<td> <input type="password" name="password" required></td>
						</tr>
						<tr>
							<td class="user_info">Email:</td>
							<td> <input type="email" name="email" required></td>
						<tr>
							<td><button class="button" name="login"><span>Sign In </span></button></td>
						</tr>
					</form>
				</table>
			</fieldset>
		</div>
	</body>
</html>