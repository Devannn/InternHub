function getProfile() {
    var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'User/GetProfile?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.length > 0) {
                document.getElementById('profileDescription').innerText = data[0]['user_bio'];
				document.getElementById('profileName').innerText = data[0]['user_displayname'];
                document.getElementById('resumeFileName').innerText = data[0]['user_cv'];
				
				console.log(data[0]['user_picture']);
			
				var baseFilePath = FilePathAPI();
			
				var imagePath = baseFilePath + 'user_picture/' + data[0]['user_picture'];                
				document.getElementById('userImage').src = imagePath;
				
				if (data[0]['user_company_id'] != ""){
					document.getElementById("companyControl").style.display = "block";
				}
				
            } else {
                console.log("Empty data received");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}

function getUserReview(){
	var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'Review/GetUserReview?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.length > 0) {
                
            } else {
                console.log("Empty data received");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}