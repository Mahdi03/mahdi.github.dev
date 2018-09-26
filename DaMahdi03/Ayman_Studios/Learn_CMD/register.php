<?php
   session_start();
   /*if ( @$_SESSION['signedIn'] != true ) {
	   header("Location: login.php");
	   exit();
   }*/
?>
<?php
			//Global Variables
			//DB Login Credentials
			$servername = "hsmscreativitycenter.org";
			$username = "Mahdi03";
			$password = "Fawaz030";
			$dbname = "Health_Finals_Results";

			$conn = mysqli_connect($servername, $username, $password, $dbname);


			$input_name = $_POST['name'];
			/*$input_name = stripslashes($input_name);
			$input_name = mysql_real_escape_string($input_name);
			*/
			$input_email = $_POST['email'];
			/*$input_email = stripslashes($input_email);
			$input_email = mysql_real_escape_string($input_email);
			*/
			$input_username = $_POST['username'];
			/*$input_username = stripslashes($input_username);
			$input_username = mysql_real_escape_string($input_username);
			*/
			$input_password = $_POST['password'];
			/*$input_password = stripslashes($input_password);
			$input_password = mysql_real_escape_string($input_password);
			*/
			$signedUpDate = date("m/d/Y");
			

			//main register function
            if (isset($_POST['login']) && !empty($input_username) && !empty($input_password) && !empty($input_email)) {
				//Start Directory
				$xmlDir = '<?xml version="1.0"?><C:><Users><' . $input_name . '></' . $input_name . '></Users></C:>';
				echo "<style>
					#Sign-Up {
						display: none;
					}
				</style><p>Hi!!!!!!!!! *or bye*</p>";

				$sql = "INSERT INTO Learn_CMD (name, email, userName, pass, signedUpDate, XMLdirectories)
				VALUES ('" . $input_name . "', '" . $input_email . "', '" . $input_username . "', '" . md5($input_password) . "', '" . $signedUpDate . "', '" . $xmlDir . "')";
				if (mysqli_query($conn, $sql)) {
					$_SESSION["signedIn"] = true;
					$_SESSION['timeout'] = time();
					$_SESSION['username'] = $input_username;
					$_SESSION['email'] = $input_email;
					echo "You have been Signed Up!!! You will be redirected very soon...";
					header('Location: login.php');
					exit;
					$viewTableSQL = "SELECT * FROM Learn_CMD";
					$viewTableResults = mysqli_query($conn, $viewTableSQL);
					if (mysqli_num_rows($viewTableResults) > 0) {
						while ($row = mysqli_fetch_assoc($viewTableResults)){
							echo "id: " . $row['id'] . " | Name: " . $row['name'] . " | Email: " . $row['email'] . " | Username: " . $row['userName'] . " | MD5 Password: " . $row['pass'] . " | Date Signed Up: " . $row['signedUpDate'] . " | XML Directory Map: " . $row['XMLdirectories'] . "<br />";
						}
					}
					else {
						echo "Error!" . mysqli_error($conn);
					}
				}
				else {
					echo "Error" . $sql . "<br />" . mysqli_error($conn);
				}
			}
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
							<td class="user_info">First Name:</td>
							<td> <input type="text" name="name" required></td>
						</tr>
						<tr>
							<td class="user_info">Email:</td>
							<td> <input type="email" name="email" required></td>
						</tr>
						<tr>
							<td class="user_info">Username:</td>
							<td> <input type="text" name="username" required></td>
						</tr>
						<tr>
							<td class="user_info">Password:</td>
							<td> <input type="password" name="password" required></td>
						</tr>
						<tr style="width: 100%;">
							<td style="width: 100%;"><button class="button" name="login"><span>Sign Me Up </span></button></td>
						</tr>
					</form>
				</table>
			</fieldset>
		</div>
	</body>
</html>