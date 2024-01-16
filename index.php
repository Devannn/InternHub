<?php
$authKey = isset($_COOKIE['authkey']) ? $_COOKIE['authkey'] : '';

$rawKey = trim($authKey);

if (!empty($rawKey)) {
    $apiUrl = 'https://localhost:7040/api/Auth/IsAuthValid?authKey=' . urlencode($rawKey);
    $apiResponse = file_get_contents($apiUrl);

    if ($apiResponse === "true") {
        header("Location: homepage.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include CSS/JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <title>InternHub</title>
</head>

<body>
    <div id="app">
        <?php include 'inc/nav-index.php' ?>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 24px;">
                <!-- Categories -->
                <div class="col-md-3 order-md-1 order-first" style="margin-bottom: 24px;">
                    <div class="card">
                        <div class="card-body">
                            <h6>Categories</h6>
                            <div class="row flex-nowrap overflow-auto">
                                <div class="tag tag-profile d-inline-block">Business</div>
                                <div class="tag tag-profile d-inline-block">Media</div>
                                <div class="tag tag-profile d-inline-block">Software</div>
                                <div class="tag tag-profile d-inline-block">Technology</div>
                                <div class="tag tag-profile d-inline-block">Infrastructure</div>
                            </div>
                            <div class="py-2"></div>
                            <h6>Tags</h6>
                            <div class="row flex-nowrap overflow-auto">
                                <div class="tag d-inline-block">Laravel</div>
                                <div class="tag d-inline-block">React</div>
                                <div class="tag d-inline-block">Vue.JS</div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2"> </div>
                </div>
                <!-- Categories -->

                <!-- Companies -->
                <div class="col-md-6 order-md-2 overflow-auto col-companies">
                    <?php include 'inc/company.php'; ?>
                    <?php include 'inc/company.php'; ?>
                    <?php include 'inc/company.php'; ?>
                    <?php include 'inc/company.php'; ?>
                    <?php include 'inc/company.php'; ?>
                </div>
                <!-- Companies -->

                <!-- Profile -->
                <div class="col-md-3 order-md-3 col-profile" style="margin-bottom: 24px;">
                    <div class="card card-profile-index">
                        <div class="card-header card-company-info-footer">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">Login</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">Register</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Login -->
                                <div class="tab-pane fade show active" id="one">
                                    <form class="form" role="form" id="loginForm">
                                        <div class="form-group">
                                            <input id="usernameInput" placeholder="Username" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" onclick="SignIn()" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="form-group text-xs-center">
                                            <small><a href="#">Forgot password?</a></small>
                                        </div>
                                    </form>
                                    <div id="errorMessage" style="display: none; color: red;">
                                        Incorrect username or password.
                                    </div>
                                    <div id="APIerrorMessage" style="display: none; color: red;">
                                        An unexpected error occured! Try again later.
                                    </div>
                                </div>
                                <!-- Login -->
                                <script>
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
                                </script>

                                <!-- Register -->
                                <div class="tab-pane fade" id="two">
                                    <form class="form" role="form" id="registerForm">
                                        <div class="form-group">
                                            <input id="registerUsername" placeholder="Username" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <input id="registerEmailInput" placeholder="Email" class="form-control form-control-sm" type="email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input id="registerPassword" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" onclick="Register()" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Register -->
                                <script>
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
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile -->
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>