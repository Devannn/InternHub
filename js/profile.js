function getProfile() {
    var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'User/GetProfile?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.json()) // Assuming the response is in JSON format
        .then(data => {
            if (data.length > 0) {
                // Update profile name
                document.getElementById('profileName').innerText = data[0]['user_displayname'] || 'No Display Name';

                // Update profile email
                document.getElementById('profileEmail').innerText = data[0]['user_email'];

                // Update profile description
                document.getElementById('profileDescription').innerText = data[0]['user_bio'];

                // You can add more updates for other elements as needed

            } else {
                console.log("Empty data received");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}
