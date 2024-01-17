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

function updateProfileUI(profileData) {
    // Assuming profileData is an array of user profiles

    // Assuming you want to display the first user's data
    if (profileData.length > 0) {
        var user = profileData[0];

        // Update the name
        document.getElementById('profileName').textContent = user.user_displayname || "No Name";

        // Update the company ID
        document.getElementById('profileCompanyId').textContent = user.user_company_id || "No Company ID";

        // Update the email (cleaned from unexpected characters)
        document.getElementById('profileEmail').textContent = cleanEmail(user.user_email) || "No Email";

        // Update the picture
        document.getElementById('profilePicture').src = user.user_picture || "default_picture_url";
    } else {
        console.log("No user profiles received");
    }
}

// Function to clean email from unexpected characters
function cleanEmail(email) {
    // Implement cleaning logic as needed
    // For example, removing square brackets and single quotes
    return email.replace(/[\[\]']/g, '');
}

