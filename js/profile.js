function getProfile() {
    var data = {
        "authkey": getAuthKey(),
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