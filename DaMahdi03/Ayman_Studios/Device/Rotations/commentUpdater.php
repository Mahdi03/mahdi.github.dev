<!--All PHP To Add Comments to Comments.xml-->
<?php
	//global vars
	$name = $_POST['username'];
	$mainComment = $_POST['mainComment'];
	$date = date("m/d/Y");
	$time = date("h:i:sa");
	
	// Open and parse the XML file
	$xml = simplexml_load_file("comments.xml");
	
	// Create a child in the first topic node
	$commentElement = $xml->addChild("comment");
	$nameElement = $commentElement->addChild( 'name', $name );
	$mainCommentElement = $commentElement->addChild( 'mainComment', $mainComment );
	$datePostedElement = $commentElement->addChild( 'datePosted', $date );
	$timePostedElement = $commentElement->addChild( 'timePosted', $time );
	//Next Line Only For Testing Purposes
	//echo $xml->asXML();
	// Store new XML code in comments.xml
	$xml->asXML("comments.xml");	
?>
<!--All PHP To Send Me An Email Everytime Someone Posts a Comment-->
<?php
	//global vars
	$name = $_POST['username'];
	$email = $_POST['email'];
	$mainComment = $_POST['mainComment'];
	$date = date("m/d/Y");
	$time = date("h:i:sa");
	//Email
	
	$recipient = $email;
	$subject = "Comment Posted To Device Rotation Website!!";
	$mainMessage = '
	<html>
		<head>
			<title>Comment Posted To Device Rotation Website!!</title>
			<style>
				body {
					background-color: rgb(0, 148, 255);
					color: rgb(91, 216, 128);
					overflow-x: hidden;
					margin: 0;
					padding: 0;
					text-align: center;
				}
				.title {
					font-family: "Francois One", sans-serif;
					font-size: 75px;
				}
				.subtitle {
					font-family: "Baloo Tamma", cursive;
					font-size: 50px;
					margin-top: auto;
					margin-bottom: auto;
					color: rgb(25, 68, 100);
				}
				button.subtitle {
					border: 6.5px groove;
					border-color: rgba(45, 143, 186, 0.49);
					border-radius: 12.5px;
					background-color: rgba(8, 83, 116, 0.8);
					color: hotpink;
					font-size: 37.5px;
				}

					button.subtitle:active {
						border-color: rgba(121, 30, 147, 0.49);
						background-color: rgba(73, 11, 91, 0.8);
						color: rgb(0, 148, 255);
						outline: none;
					}
				p {
					font-family: "Play", sans-serif;
					color: rgb(91, 216, 128);
					font-size: 20px;
				}
			</style>
		</head>
		<body>
			<h1 class="title">Congrats ' . $name . ' !!!</h1>
			<h2 class="subtitle">Your Comment was Posted at ' . $time . ' on ' . $date . '</h2>
			<p><u>You commented</u>: "' . $mainComment . '"</p>
			<a class="subtitle" href="https://hsmscreativitycenter.org/DaMahdi03/Random_Fun/Ayman_Studios/Device/Rotations/rotationEvents.html">Click here to Check It Out!!!</a>
			<p><u>Disclaimer</u>: Your email has not been saved anywhere. It is solely used for confirmation.</p>
		</body>
	</html>';
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: <donotreply@aymanstudios.org>" . "\r\n";
	$headers .= "Bcc: <mahdi_afroze@yahoo.com>" . "\r\n";
	mail($recipient, $subject, $mainMessage, $headers);
?>
	<!--Previous Versions Of Comment Saving PHP Script-->
	<!--Saved Because WHY NOT?-->
	<?php
		//Everything Down Is A Total Failure, Just Saving It For The Amount Of Hardwork Put Into Creating it
		/*
		$document = new DOMDocument( );
		$commentElement = $document->createElement( 'comment' );
	
		//name Node
		$nameElement = $document->createElement( 'name' );
		$nameElement->nodeValue = $name;
	
		//mainComment Node
		$mainCommentElement = $document->createElement( 'mainComment' );
		$mainCommentElement->nodeValue = $mainComment;
		//datePosted Node
		$datePostedElement = $document->createElement( 'datePosted' );
		$datePostedElement->nodeValue = $date;
		//timePosted Node
		$timePostedElement = $document->createElement( 'timePosted' );
		$timePostedElement->nodeValue = $time;
	
		//Appends all other elements to 'comment' element
		$commentElement->appendChild( $nameElement );
		/*
		$commentElement->appendChild( $mainComment );
		$commentElement->appendChild( $datePostedElement );
		$commentElement->appendChild( $timePostedElement );
	
		//Appends comment element to main XML DOMDocument
		$document->appendChild( $commentElement );
		$document->save('comments.xml');
		
		echo "hi";
		echo $name;
		echo $mainComment;
		echo $date;
		echo $time;
		*/
	?>
<!DOCTYPE html>
	<html>
	<head>
		<!--Disabled Zoom Yet Kept Everything Else Intact And Not All Messed Up-->
		<meta name='viewport' content='maximum-scale=1.0, user-scalable=0' />
		<title>Device Rotation</title>
		<link href="https://fonts.googleapis.com/css?family=Francois+One|Play|Baloo+Tamma|IBM+Plex+Mono|Cutive+Mono" rel="stylesheet">
		<style>
			body {
				background-color: rgb(0, 148, 255);
				color: rgb(91, 216, 128);
				overflow-x: hidden;
				margin: 0;
				padding: 0;
				text-align: center;
			}
			#ifWork {
				padding-left: 5%;
				padding-right: 5%;
				text-align: center;
			}
			.title {
				font-family: 'Francois One', sans-serif;
				font-size: 150px;
			}
			.subtitle {
				font-family: 'Baloo Tamma', cursive;
				font-size: 100px;
				margin-top: auto;
				margin-bottom: auto;
				color: rgb(25, 68, 100);
			}
			button.subtitle {
				border: 13px groove;
				border-color: rgba(45, 143, 186, 0.49);
				border-radius: 25px;
				background-color: rgba(8, 83, 116, 0.8);
				color: hotpink;
				font-size: 75px;
			}

				button.subtitle:active {
					border-color: rgba(121, 30, 147, 0.49);
					background-color: rgba(73, 11, 91, 0.8);
					color: rgb(0, 148, 255);
					outline: none;
				}
			p {
				font-family: 'Play', sans-serif;
				color: rgb(91, 216, 128);
				font-size: 40px;
			}
		</style>
	</head>
	<body>
		<div id="ifWork">
			<h1 class="title">Your Comment Has Been Submitted</h1>
			<button class="subtitle" onclick="window.location.assign('rotationEvents.html#comments')">Go Back</button>
		</div>
	</body>
	</html>