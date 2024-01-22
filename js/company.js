function getCompanyReview(company_id) {
    var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'Review/GetCompanyReviews?auth_key=' + encodeURIComponent(authKey) + '&company_id=' + company_id;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            if (data && data.reviews && data.reviews.length > 0) {
                console.log(data);

                var avgRateElement = document.getElementById('avg_rate');
                avgRateElement.textContent = data.avg_rate; 

                var totalReviewsElement = document.getElementById('total_reviews');
                totalReviewsElement.textContent = `Averaged from ${data.total_reviews} reviews`;
				
                var reviewsContainer = document.getElementById('userReviewsContainer');

                data.reviews.forEach(review => {
                    var reviewElement = document.createElement('div');
                    reviewElement.className = 'review';

                    var reviewHTML = `
                        ${review.review_rate} <img src="img/icons/star-solid.svg" alt="" width="15px" style="margin-top:-4px;" />
                        <h5>${review.review_title}</h5>
                        <div style="font-size: 13px; margin-top:-10px; margin-bottom: 10px;">Stagiare | ${review.review_startdate.slice(0, -9)} / ${review.review_enddate.slice(0, -9)}</div>
                        <div>${review.review_content}</div>
                        <div class="companies-text-right col-text-small">
                            ${review.review_postdate.slice(0, -9)}
                        </div>
                    `;

                    reviewElement.innerHTML = reviewHTML;

                    reviewsContainer.appendChild(reviewElement);
                });
            } else {
                console.log("Empty data received or missing reviews array");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}

function RelocateToMessages(){
	var company_id = getParameterByName('i');	
	var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'Message/GetUserIDForCompany?auth_key=' + encodeURIComponent(authKey) + '&company_id=' + company_id;
	
	fetch(apiUrl)
        .then(response => response.json())
        .then(company_user_id => {
		window.location.href = 'messages.php?i=' + company_user_id;
			
        })
        .catch(error => console.error('Fetch error:', error));
}

function getInternshipOverview(company_id){
	var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'Internship/GetInternshipOverview?auth_key=' + encodeURIComponent(authKey) + '&company_id=' + company_id;
    
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            var internshipContainer = document.getElementById('internshipContainer'); 

            data.forEach(internship => {
                var internshipCard = document.createElement('div');
                internshipCard.className = 'col-6';
                internshipCard.innerHTML = `
                    <div class="card companies-card">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<h3>${internship.internship_title}</h3>
									<span>${internship.internship_startdate} / ${internship.internship_enddate}</span>
									<span>| Spots: ${internship.internship_spots}</span> <br>
									<span>${internship.internship_content}</span>
								</div>
							</div>
							<div class="py-2"></div>
							${internship.internship_tags != "" ? 
								`<div class="row flex-nowrap overflow-auto">
									${internship.internship_tags.map(tag => `<div class="tag d-inline-block">${tag}</div>`).join('')}
								</div>` : ''}
							<div class="companies-text-right col-text-small">
								${internship.internship_postdate}
							</div>
						</div>
					</div>
                `;

                // Append the created card to the container
                internshipContainer.appendChild(internshipCard);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}