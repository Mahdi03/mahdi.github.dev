var JSScript = "";

function submitJSCode() {
    JSScript = $("[name=jsCodeChoices2]").val();
    $.ajax({
        type: "POST",
        url: "server.php",
        data: JSScript
    }).done(function() {
        alert("Your code should run on this page shortly.");
    }).fail(function() {
        alert("Try refreshing the page and trying again, something went wrong.");
    });

}