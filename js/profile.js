function getProfile() {
    var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'User/GetProfile?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                // Update html data based on json data
                document.getElementById('profileName').innerText = data[0]['user_displayname'] || 'No Display Name';
                document.getElementById('profileEmail').innerText = data[0]['user_email'];
                document.getElementById('profileDescription').innerText = data[0]['user_bio'];

            } else {
                console.log("Empty data received");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}
