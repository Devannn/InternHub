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

function UpdateProfile() {
    const displayName = document.getElementById('displayNameInput').value;
    const email = document.getElementById('emailInput').value;
    const bio = document.getElementById('BioInput').value;
    const profilePicture = document.getElementById('profilePictureInput').files[0];
    const resume = document.getElementById('resumeInput').files[0];
    const authKey = GetAuthKey();

    const formData = new FormData();
    formData.append('auth_key', authKey);
    formData.append('user_displayname', displayName);
    formData.append('user_email', email);
    formData.append('user_bio', bio);
    formData.append('user_picture', profilePicture);
    formData.append('user_cv', resume);

    fetch('https://localhost:7040/api/User/UpdateProfile', {
        method: 'PUT', 
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
		if (data == "true") {
            document.getElementById("updateErrorMessage").style.display = "none";
            document.getElementById("updateAPIerrorMessage").style.display = "none";
			document.getElementById("updateSuccesMessage").style.display = "block";
        } else {
            document.getElementById("updateErrorMessage").style.display = "none";
        }
    })
    .catch(error => {
        document.getElementById("updateAPIerrorMessage").style.display = "none";
    });
}

function UpdatePassword() {
    const old_password = document.getElementById('currentPasswordInput').value;
    const new_password = document.getElementById('passwordInput').value;
    const repeat_new_password = document.getElementById('confirmPasswordInput').value;
    const authKey = GetAuthKey();

    const requestData = {
        auth_key: authKey,
        old_password: old_password,
        new_password: new_password,
        repeat_new_password: repeat_new_password
    };

    fetch('https://localhost:7040/api/Account/ChangePassword', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(requestData),
    })
    .then(response => response.text())
    .then(data => {
		console.log(data);
		if (data === "true") {
			document.getElementById("passwordErrorMessage").style.display = "none";
			document.getElementById("passwordAPIerrorMessage").style.display = "none";
			document.getElementById("passwordSuccesMessage").style.display = "block";
		} else if (data === "false") {
			document.getElementById("passwordSuccesMessage").style.display = "none";
			document.getElementById("passwordErrorMessage").style.display = "block";
		}
	})
    .catch(error => {
        document.getElementById("passwordAPIerrorMessage").style.display = "none";
    });
}
