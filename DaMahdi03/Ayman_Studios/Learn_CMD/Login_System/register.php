<?php
	//Include the Connection To Database
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
?>
<?php
	//Global Vars
	$input_name = $input_username = $input_password = $input_confirm_password = "";
	$input_name_error = $input_email_error = $input_username_error = $input_password_error = $input_confirm_password_error = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//Validate Name
		if (empty(trim($_POST['name']))) {
			$input_name_error = "<p class='error'>Please enter a first name!!!</p>";
		}
		else {
			$input_name = trim($_POST['name']);
		}

		
		//Validate Email
		if (empty(trim($_POST['email']))) {
			$input_email_error = "<p class='error'>Please enter an email!!!</p>";
		}
		else {
			$input_email = test_input(trim($_POST['email']));
			if (!filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
				$input_email_error = "<p class='error'>Invalid email. Please try again!!!</p>";
			}
		}

		
		//Validate Username
		if (empty(trim($_POST['username']))) {
			$input_username_error = "<p class='error'>Please enter a username!!!</p>";
		}
		else {
			$sql = "SELECT id FROM Learn_CMD WHERE userName = ?";
			if ($stmt = mysqli_prepare($conn, $sql)) {
				mysqli_stmt_bind_param($stmt, "s", $param_username);
				//Set Paramters
				$param_username = trim($_POST['username']);
				//Try To Execute
				if (mysqli_stmt_execute($stmt)) {
					//Store the Result
					mysqli_stmt_store_result($stmt);

					if (mysqli_stmt_num_rows($stmt) == 1) {
						$input_username_error = "<p class='error'>This username is already taken, try using another one!</p>";
					}
					else {
						$input_username = trim($_POST['username']);
					}
				}
				else {
					echo "<p class='error'>Oops! Something didn't work right. Please try again later!</p>";
				}
			mysqli_stmt_close($stmt);
			}
		}
		

		
		//Validate Password
		if (empty(trim($_POST['password']))) {
			$input_password_error = "<p class='error'>Please enter a password!!!</p>";
		}
		elseif (strlen(trim($_POST['password'])) < 8) {
			$input_password_error = "<p class='error'>Your password must have at least 8 characters!!!</p>";
		}
		else {
			$input_password = trim($_POST['password']);
		}

		
		//Validate Confirm Password
		if (empty(trim($_POST['confirm_password']))) {
			$input_confirm_password_error = "<p class='error'>Please confirm your password!!!</p>";
		}
		else {
			$input_confirm_password = trim($_POST['confirm_password']);
			if ($input_password != $input_confirm_password) {
				$input_confirm_password_error = "<p class='error'>Your passwords do not match!!!</p>";
			}
		}
		
		//Check For Any Input Errors Before Actually Inserting Data Into Database
		if (empty($input_name_error) && empty($input_email_error) && empty($input_username_error) && empty($input_password_error) && empty($input_confirm_password_error)) {
			//Prepare The INSERT Statement
			$sqlToInsertLoginInfoIntoDB = "INSERT INTO Learn_CMD (name, email, userName, pass, signedUpDate, XMLdirectories) VALUES (?, ?, ?, ?, ?, ?)";
			if ($stmt = mysqli_prepare($conn, $sqlToInsertLoginInfoIntoDB)) {
				mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_email, $param_username, $param_password, $param_signedUpDate, $param_XMLdirectories);

				//Set Param Vars Equal To Actual Values
				$param_name = $input_name;
				$param_email = $input_email;
				$param_username = $input_username;
				$param_password = password_hash($input_password, PASSWORD_DEFAULT);
				$param_signedUpDate = date("m/d/Y");
				$param_XMLdirectories = '<?xml version="1.0"?><C:><Users><' . $input_name . '></' . $input_name . '></Users></C:>';

				if (mysqli_stmt_execute($stmt)) {
					//Redirect to Login Page
					header('location: login.php');
				}
				else {
					echo "<p class='error'>Sorry but something went wrong!!! Please try again later!!!</p>";
				}
				mysqli_stmt_close($stmt);
			}	
		}
		mysqli_close($conn);
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Register Now!!!</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div>
			<?php echo (!empty($input_name_error)) ? '<p class="error">has-error</p>' : ''; ?>
			<label>Name:</label>
			<input type="text" name="name" value="<?php echo $input_username;?>" required />
			<?php echo $input_name_error; ?>
		</div>
		<div>
			<?php echo (!empty($input_email_error)) ? '<p class="error">has-error</p>' : ''; ?>
			<label>Email:</label>
			<input type="text" name="email" value="<?php echo $input_email;?>" required />
			<?php echo $input_email_error; ?>
		</div>
		<div>
			<?php echo (!empty($input_username_error)) ? '<p class="error">has-error</p>' : ''; ?>
			<label>Username:</label>
			<input type="text" name="username" value="<?php echo $input_username;?>" required />
			<?php echo $input_username_error; ?>
		</div>
		<div>
			<?php echo (!empty($input_password_error)) ? '<p class="error">has-error</p>' : ''; ?>
			<label>Password:</label>
			<input type="password" name="password" value="<?php echo $input_password;?>" required />
			<?php echo $input_password_error; ?>
		</div>
		<div>
			<?php echo (!empty($input_confirm_password_error)) ? '<p class="error">has-error</p>' : ''; ?>
			<label>Confirm Password:</label>
			<input type="password" name="confirm_password" value="<?php echo $input_confirm_password;?>" required />
			<?php echo $input_confirm_password_error; ?>
		</div>
		<div>
			<input type="submit" value="Submit" />
			<input type="reset" value="Reset" />
		</div>
		<p>Already have an account? <a href="login.php">Login here</a>.</p>
	</form>
</body>
</html>