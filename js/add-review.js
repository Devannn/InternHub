function SaveReview(company_id) {
	
	var title = document.getElementById('titleInput').value;
    var description = document.getElementById('descriptionInput').value;
    var startDate = document.getElementById('startDate').value;
    var endDate = document.getElementById('endDate').value;
    var reviewRate = "5";


    var data = {
        "auth_key": GetAuthKey(),
        "company_id": company_id,
        "review_title": title,
        "review_content": description,
        "review_rate": reviewRate,
        "review_startdate": startDate,
        "review_enddate": endDate
    };

    fetch('https://localhost:7040/api/Review/CreateCompanyReview', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            if (data === "true") {
				window.location.href = "company.php?i=" + company_id;
            } else {
                document.getElementById("errorMessage").style.display = "none";
            }
        })
        .catch((error) => {
            document.getElementById("APIerrorMessage").style.display = "block";
        });
}
