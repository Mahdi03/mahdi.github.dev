var headTag = document.getElementsByTagName("head")[0];
var TitillumWebFont = document.createElement("link");
TitillumWebFont.setAttribute("href", "https://fonts.googleapis.com/css?family=Titillium+Web");
TitillumWebFont.setAttribute("rel", "stylesheet");
headTag.append(TitillumWebFont);
/*var bodyTag = document.getElementsByTagName("body")[0];
var jQueryScriptElement = document.createElement("script");
jQueryScriptElement.setAttribute("src", "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
bodyTag.appendChild(jQueryScriptElement);*/
if (window.scrollTop > ($(".lesson").outerHeight(true) + $(".intro").outerHeight(true))) {
    $(".practice").css("visibility", "visible");
    alert("If you feel ready enough, continue on to the Practice Section.");
}