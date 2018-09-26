<?php
    $xmlCode = $_POST['xmlRotationData'];
	$doc = new DOMDocument();
	$primaryComment = $doc->createComment('Below You Will Find Each Rotation Movement Under Timestamps For Every Second Or So...');
	$rootElement = $doc->createElement("allSessionRotationData");
	$rootElement->nodeValue = $xmlCode;
	$doc->appendChild($primaryComment);
	$doc->appendChild($rootElement);
    $doc->save("downloadRotationInfo.xml");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Device Rotation Info Download</title>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
			}
			/*Hide The A Element*/
			a {
				display: none;
			}
			#hi {
				margin-left: 5%;
				margin-right: 5%;
				width: 100%;
			}
		</style>
    </head>
    <body>
		<p id="hi">hi</p>
        <script>
            //Access the sessionStorage for a copy of the XML Code (Used For Diplaying Purposes)
			var xmlCode = sessionStorage.getItem('xmlCode');
			document.querySelector("#hi").innerHTML = xmlCode;
			//Automatically Create And Click On Download Link!!! (Hacks Am I Right?)
			function automaticDownload() {
				var aElement = document.createElement('a');
				aElement.setAttribute("href", "downloadRotationInfo.xml");
				aElement.setAttribute("download", "");
				aElement.setAttribute("id", "autoDownload");
				aElement.appendChild(document.createTextNode("hi"));
				document.querySelector("#hi").appendChild(aElement);
				document.querySelector("#autoDownload").click();
			}
			automaticDownload();
        </script>
    </body>
</html>