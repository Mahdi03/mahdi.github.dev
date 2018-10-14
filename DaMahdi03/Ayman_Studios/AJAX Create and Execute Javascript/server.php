if (isset($_POST["jsCodeChoices"])) {
    $JSScript = $_POST["jsCodeChoices"];
}
elseif (isset($_POST["jsCodeChoices2"])) {
    $JSScript = $_POST["jsCodeChoices2"];
}
$testJS = fopen("test.js", "w");
fwrite($testJS, $JSScript);
fclose($testJS);