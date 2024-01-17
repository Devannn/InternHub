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

// Function to create HTML for each company
function createCompanyHTML(company) {
    return `
    <div class="card companies-card">
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="${company.Company_LogoFilePath || 'img/pfp/default.png'}" alt="${company.Company_Name}">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">${company.Company_Name}</div>
                        <div class="col text-bold d-flex justify-content-end">${company.Company_Province || 'N/A'}</div>
                    </div>
                    <div class="row">
                        <div class="col">${company.Company_Categories.map(category => category.Category_Name).join(', ')}</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">${company.Company_Rating.toFixed(1)}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2"></div>
            <div class="row flex-nowrap overflow-auto">
                ${company.Company_Tags.map(tag => `<div class="tag d-inline-block">${tag.Tag_Name}</div>`).join('')}
            </div>
            <div class="companies-text-right col-text-small">
                ${new Date().toLocaleDateString()}
            </div>
        </div>
    </div>
    `;
}

// Function to generate HTML for all companies
function generateCompanyHTML(data) {
    var companiesContainer = document.getElementById('companies-container');
    data.forEach(company => {
        companiesContainer.innerHTML += createCompanyHTML(company);
    });
}

function getProfile() {
    var data = {
        "authkey": "t5SIxe070ceMsjqDgsXc",
    };

    document.getElementById("loginForm").reset();

    fetch(APIaddress() + 'User/GetProfile', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(response => response.text())
        .then(data => {
            if (data == 0) {
                document.getElementById("errorMessage").style.display = "block";
            } else {
                document.getElementById("errorMessage").style.display = "none";
                setAuthkey(data, 'profile.php');
            }
        })
        .catch((error) => {
            document.getElementById("APIerrorMessage").style.display = "block";
        });
}

// Homepage