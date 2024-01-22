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

function getUserReview() {
    var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'Review/GetUserReview?auth_key=' + encodeURIComponent(authKey);

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.length > 0) {
                var reviewsContainer = document.getElementById('reviewsContainer');

                data.forEach(review => {
                    var reviewElement = document.createElement('div');
                    reviewElement.className = 'review';

                    var reviewHTML = `
                        <span>${review.review_company_name}</span> |
                        ${review.review_rate} <img src="img/icons/star-solid.svg" alt="" width="15px" style="margin-top:-4px;" />
                        <h5>${review.review_title}</h5>
                        <div style="font-size: 13px; margin-top:-10px; margin-bottom: 10px;">Stagiare | ${review.review_startdate.slice(0, -9)} / ${review.review_enddate.slice(0, -9)}</div>
                        <div>${review.review_content}</div>
                        <div class="companies-text-right col-text-small">
                            ${review.review_postdate}
                        </div>
                    `;

                    reviewElement.innerHTML = reviewHTML;

                    reviewsContainer.appendChild(reviewElement);
                });
            } else {
                console.log("Empty data received");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}
