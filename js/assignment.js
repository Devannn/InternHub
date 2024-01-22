function getAssignment(assignment_id){
	var authKey = GetAuthKey();
    var apiUrl = APIaddress() + 'Assignment/GetAssignment?auth_key=' + encodeURIComponent(authKey) + '&assignment_id=' + assignment_id;
	

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.length > 0) {
                document.getElementById('assignment_title').innerText = data[0]['assignment_title'];
				document.getElementById('assignment_content').innerText = data[0]['assignment_content'];	
				document.getElementById('assignment_postdate').innerText = data[0]['assignment_postdate'];	
				document.getElementById('assignment_startdate').innerText = data[0]['assignment_startdate'];	
				document.getElementById('assignment_enddate').innerText = data[0]['assignment_enddate'];	
            } else {
                console.log("Empty data received");
            }
        })
        .catch((error) => {
            console.log("Error fetching data:", error);
        });
}

function returnToCompanyPage(company_id){
	window.location.href = 'company.php?company_id=' + company_id;
}


