
function checkAuthkey() {
    var authKey = document.cookie.replace(/(?:(?:^|.*;\s*)authkey\s*\=\s*([^;]*).*$)|^.*$/, "$1");

    if (authKey.trim() === "") {
        window.location.href = "index.html";
        return;
    }

    //check API/db
    //send authkey
    //true or false redirect
    var api_return = true;
    if (api_return == false) {
        window.location.href = "index.html";
        return;
    }
}

function setAuthKey() {
    var authKey = document.getElementById("authKey").value;

    var expirationDate = new Date();
    expirationDate.setDate(expirationDate.getDate() + 1);

    document.cookie = "authkey=" + authKey + "; expires=" + expirationDate.toUTCString() + "; path=/";

    //remove later
    console.log("Authentication Key set to:", authKey);
    console.log("Cookie set:", document.cookie);

    window.location.href = "login2.php";
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function redirectToURL(id) {
    var url = 'messages.php';
    var parameter = 'i=' + id;
    var finalURL = url + '?' + parameter;

    window.location.href = finalURL;
}		
