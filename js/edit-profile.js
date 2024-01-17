function getProfile() {
    var authKey = GetAuthKey();

    var apiUrl = APIaddress() + 'User/GetProfile?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.text())
        .then(data => {
            if (data == 0) {
                console.log("0 received");
            } else {
                console.log(data);

                var userData = JSON.parse(data);

                var displayNameInput = document.getElementById("displayNameInput");
                var emailInput = document.getElementById("emailInput");
                var bioInput = document.getElementById("BioInput");

                if (displayNameInput) {
                    displayNameInput.value = userData[0].user_displayname;
                }

                if (emailInput) {
                    emailInput.value = userData[0].user_email;
                }

                if (bioInput) {
                    bioInput.value = userData[0].user_bio;
                }
            }
        })
        .catch((error) => {
            console.log(error);
        });
}
