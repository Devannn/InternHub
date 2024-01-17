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
            }
        })
        .catch((error) => {
            console.log("error");
        });
}