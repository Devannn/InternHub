function APIaddress() {
    return "https://localhost:7040/api/";
}

function WSaddress() {
    return "ws://localhost:5000/ws";
}

function setAuthkey(authkey, href) {

    var expirationDate = new Date();
    expirationDate.setTime(expirationDate.getTime() + 15 * 60 * 1000); // 15 minutes in milliseconds

    document.cookie = "authkey=" + authkey + "; expires=" + expirationDate.toUTCString() + "; path=/";

    window.location.href = href;
}

function logout() {
    // Clear the authkey cookie by setting an expired date
    document.cookie = "authkey=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

    // Redirect the user to the login page or any desired destination
    window.location.href = "index.php"; // Replace "logout.php" with your logout or login page
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

function initialize() {
    GetAuthKey();
    retrieveData(GetAuthKey(), getParameterByName('i'));
}

function AcknowledgeWebsocket() {
    if (authKey !== undefined) {
        const data = {
            sender: authKey,
        };

        socket.send(JSON.stringify(data));
        console.log(JSON.stringify(data));

        messageInput.value = '';
    }
}

function GetAuthKey() {
    var authKey = document.cookie.replace(/(?:(?:^|.*;\s*)authkey\s*\=\s*([^;]*).*$)|^.*$/, "$1");

	if (authKey.trim() === "") {
        window.location.href = "index.php";
        return; 
    }
	
    return authKey;
}

function GetUserID(authKey) {
    if (authKey == "userkey1") {
        return 1;
    } else if (authKey == "userkey2") {
        return 2;
    }
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
    var url = 'socket.html';
    var parameter = 'i=' + id;
    var finalURL = url + '?' + parameter;

    window.location.href = finalURL;
}

async function getUserIdFromAuthKey(authKey) {
    const apiUrl = `https://localhost:7040/api/User/GetUserIdFromAuthkey?auth_key=${authKey}`;

    try {
        const response = await fetch(apiUrl);
        const userId = await response.json();
        return userId;
    } catch (error) {
        console.error('Error fetching user ID:', error);
        return 0;
    }
}

async function getDisplayNameFromUserID(authKey, userID) {
    const apiUrl = `https://localhost:7040/api/User/GetDisplayNameFromUserID?auth_key=${authKey}&user_id=${userID}`;

    try {
        const response = await fetch(apiUrl);
        const username = await response.text();
        return username;
    } catch (error) {
        console.error('Error fetching username:', error);
        return '';
    }
}

// Homepage

// Homepage