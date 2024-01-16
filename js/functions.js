
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

// Function to login to your account (index.php)
function SignIn() {
    var username = document.getElementById("usernameInput").value;
    var password = document.getElementById("passwordInput").value;

    var data = {
        "username": username,
        "password": password
    };

    document.getElementById("loginForm").reset();

    fetch('https://localhost:7040/api/Account/Login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            if (data == 0) {
                document.getElementById("errorMessage").style.display = "block";
            } else {
                document.getElementById("errorMessage").style.display = "none";
                setAuthkey(data, "homepage.php");
            }
        })
        .catch((error) => {
            document.getElementById("APIerrorMessage").style.display = "block";
        });
}

// Function to register an account (index.php)
function Register() {
    var username = document.getElementById("registerUsername").value;
    var email = document.getElementById("registerEmailInput").value;
    var password = document.getElementById("registerPassword").value;

    var data = {
        "email": email,
        "username": username,
        "password": password
    };

    document.getElementById("registerForm").reset();

    fetch('https://localhost:7040/api/Account/CreateAccount', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            if (data == 0) {
                document.getElementById("errorMessage").style.display = "block";
            } else {
                document.getElementById("errorMessage").style.display = "none";
                setAuthkey(data, "homepage.php");
            }
        })
        .catch((error) => {
            document.getElementById("APIerrorMessage").style.display = "block";
        });
}