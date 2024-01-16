
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

function setAuthkey(authkey, href) {

    var expirationDate = new Date();
    expirationDate.setTime(expirationDate.getTime() + 15 * 60 * 1000); // 15 minutes in milliseconds

    document.cookie = "authkey=" + authkey + "; expires=" + expirationDate.toUTCString() + "; path=/";

    window.location.href = href;
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

// https://www.codingnepalweb.com/star-rating-html-css-javascript-2/

// Select all elements with the "i" tag and store them in a NodeList called "stars"
const stars = document.querySelectorAll(".stars i");
// Loop through the "stars" NodeList
stars.forEach((star, index1) => {
    // Add an event listener that runs a function when the "click" event is triggered
    star.addEventListener("click", () => {
        // Loop through the "stars" NodeList Again
        stars.forEach((star, index2) => {
            // Add the "active" class to the clicked star and any stars with a lower index
            // and remove the "active" class from any stars with a higher index
            index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
        });
    });
});