//$(document).ready(function(){

//});
var xmlHttp;

if (window.XMLHttpRequest)
{
    xmlHttp = new XMLHttpRequest();
}
else
{
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}

function getCatNews(id) {
    url = baseurl + '/News/get/' + id;
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0) {
        xmlHttp.open('get', url, true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    }
}

function handleServerResponse() {
    if (xmlHttp.readyState == 4) {
        if (xmlHttp.status == 200) {
            response = JSON.parse(xmlHttp.responseText);
            out = "";
            for (i = 0; i < response.length; i++) {
                out += "<h3>" + response[i].news_heading + "</h3>";
                out += "<p id='jNContent'>" + response[i].news_content + "</p>";
                out += "<div class='row' id='jnews'>";
                out += "<div class='col-sm-4'>" + response[i].time + "</div>";
                out += "<div class='col-sm-4'></div>";
                out += "<div class='col-sm-4'></div>";
                out += "</div>";

            }
            document.getElementById("CategorigedNews").innerHTML = out;
        }
    }
}

