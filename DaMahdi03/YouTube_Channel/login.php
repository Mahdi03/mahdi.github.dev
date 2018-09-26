<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Hi</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class="container form-signin">
         
         <?php
            $msg = '';
            //main code 
			function viewDatabase() {
				$servername = "hsmscreativitycenter.org";
				$username = "Mahdi03";
				$password = "Fawaz030";
				$dbname = "Health_Finals_Results";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				echo "You Have Been Connected Successfully To The Server!!!";
				echo "<br><h2><u>Results of Chapter 8 Quiz:</u></h2>";

				$sql = "SELECT id, firstName, lastName, testDate, periodNumber, testScore, answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, answer11, answer12 FROM Results2";
				$result = $conn->query($sql);

				if (mysqli_num_rows($result) > 0) {
    
				// output data of each row
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
					$answer11 = $row["answer11"];
					$answer12 = $row["answer12"];
		
				  echo "
					<br>
					<table>
						<tr>
							<th>Id:</th>
							<th>Name:</th>
							<th>Date:</th>
							<th>Period:</th>
							<th>Score:</th>
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
							<th>11.</th>
							<th>12.</th>
						</tr>
						<tr>
							<td>". $row["id"]."</td>
							<td>". $row["lastName"]. ", ". $row["firstName"]."</td>
							<td>". $row["testDate"]."</td>
							<td>". $row["periodNumber"]."</td>
							<td>". $row["testScore"]."</td>
							<td>";
							if ($answer1 !== "C") {echo "<p style='color:red'>$answer1</p>";}
							if ($answer1 == "C") {echo $answer1;}
							echo "</td><td>";
							if ($answer2 !== "D") {echo "<p style='color:red'>$answer2</p>";}
							if ($answer2 == "D") {echo $answer2;}
							echo "</td><td>";
							if ($answer3 !== "E") {echo "<p style='color:red'>$answer3</p>";}
							if ($answer3 == "E") {echo $answer3;}
							echo "</td><td>";
							if ($answer4 !== "D") {echo "<p style='color:red'>$answer4</p>";}
							if ($answer4 == "D") {echo $answer4;}
							echo "</td><td>";
							if ($answer5 !== "B") {echo "<p style='color:red'>$answer5</p>";}
							if ($answer5 == "B") {echo $answer5;}
							echo "</td><td>";
							if ($answer6 !== "F") {echo "<p style='color:red'>$answer6</p>";}
							if ($answer6 == "F") {echo $answer6;}
							echo "</td><td>";
							if ($answer7 !== "F") {echo "<p style='color:red'>$answer7</p>";}
							if ($answer7 == "F") {echo $answer7;}
							echo "</td><td>";
							if ($answer8 !== "F") {echo "<p style='color:red'>$answer8</p>";}
							if ($answer8 == "F") {echo $answer8;}
							echo "</td><td>";
							if ($answer9 !== "F") {echo "<p style='color:red'>$answer9</p>";}
							if ($answer9 == "F") {echo $answer9;}
							echo "</td><td>";
							if ($answer10 !== "F") {echo "<p style='color:red'>$answer10</p>";}
							if ($answer10 == "F") {echo $answer10;}
							echo "</td><td>";
							if ($answer11 !== "4") {echo "<p style='color:red'>$answer11</p>";}
							if ($answer11 == "4") {echo $answer11;}
							echo"</td><td>";
							if ($answer12 !== "Carbohydrate") {echo "<p style='color:red'>$answer12</p>";}
							if ($answer12 == "Carbohydrate") {echo $answer12;}
							echo "</td>
						</tr>
					</table>
					</br>
					";
				}
			} else {
				echo "No results found. Check With Mahdi Ayman <b><u>to fix the code</u></b>!!!!";
			}

			
						};





						//main login function
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  viewDatabase();
				  
				  
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class="form-signin" role="form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>