function getProfile() {
    var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'User/GetProfile?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data === 0) {
                console.log("0 received");
            } else {
                // Update the HTML elements with the received data
                updateProfileUI(data);
            }
        })
        .catch((error) => {
            console.log("error");
        });
}

// Function to update the HTML elements with profile data
function updateProfileUI(profileData) {
    // Assuming profileData is an object with properties like name, description, etc.

    // Update the name
    document.getElementById('profileName').textContent = profileData.name;

    document.getElementById('profileEmail').textContent = profileData.email;

    // Update the description
    document.getElementById('profileDescription').textContent = profileData.description;

    // You can continue updating other elements as needed
}
