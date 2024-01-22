// Function to login to your account (index.php)
function SignIn() {
    var username = document.getElementById("usernameInput").value;
    var password = document.getElementById("passwordInput").value;

    var data = {
        "username": username,
        "password": password
    };

    document.getElementById("loginForm").reset();

    fetch('https://localhost:7040/api/Account/Login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            if (data == 0) {
                document.getElementById("errorMessage").style.display = "block";
            } else {
                document.getElementById("errorMessage").style.display = "none";
                setAuthkey(data, "homepage.php");
            }
        })
        .catch((error) => {
            document.getElementById("APIerrorMessage").style.display = "block";
        });
}

// Function to register an account (index.php)
function Register() {
	var username = document.getElementById("registerUsername").value;
	var email = document.getElementById("registerEmailInput").value;
	var password = document.getElementById("registerPassword").value;
	
	var data = {
		"email": email,
		"username": username,
		"password": password
	};
	
	document.getElementById("registerForm").reset();
	
	fetch('https://localhost:7040/api/Account/CreateAccount', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
			},
			body: JSON.stringify(data),
		})
		.then(response => response.text())
		.then(data => {
			console.log(data);
			if (data == 0) {
				document.getElementById("errorMessage").style.display = "block";
			} else {
				document.getElementById("errorMessage").style.display = "none";
				setAuthkey(data, "homepage.php");
			}
		})
		.catch((error) => {
			document.getElementById("APIerrorMessage").style.display = "block";
		});
}	