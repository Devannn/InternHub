function APIaddress() {
    return "https://localhost:7040/api/";
}

function WSaddress() {
    return "ws://localhost:5000/ws";
}

function FilePathAPI(){
	return "filepath";
}

function GetAuthKey() {
    var authKey = document.cookie.replace(/(?:(?:^|.*;\s*)authkey\s*\=\s*([^;]*).*$)|^.*$/, "$1");

	if (authKey.trim() === "") {
        window.location.href = "index.php";
        return; 
    }
	
    return authKey;
}

function setAuthkey(authkey, href) {

    var expirationDate = new Date();
    expirationDate.setTime(expirationDate.getTime() + 15 * 60 * 1000); // 15 minutes in milliseconds

    document.cookie = "authkey=" + authkey + "; expires=" + expirationDate.toUTCString() + "; path=/";

    window.location.href = href;
}

function logout() {
    document.cookie = "authkey=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

    window.location.href = "index.php"; 
}

function AcknowledgeWebsocket() {   
    const data = {
        sender: GetAuthKey(),
    };

    socket.send(JSON.stringify(data));
    console.log(JSON.stringify(data));   
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

//example: <a onclick="RelocateTo('add-review');"> // this relocate to add-review.php?i=company_id
function RelocateTo(filename){
	href= filename + ".php?i=" + getParameterByName('i')
    window.location.href = href; 
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////



