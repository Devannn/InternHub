<?php
include 'inc/checkAuthKey.php';
getAuthKey();
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
    <script type="text/javascript" src="js/edit-profile.js"></script>

    <title>InternHub</title>
</head>

<body onload="getProfile()">
    <div id="app">
        <?php include 'inc/nav.php' ?>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 24px;">
                <div class="col-md-6 order-md-2 col-companies">
                    <!-- Main Settings -->
                    <div class="card">
                        <div class="card-body">
                            <h3>Main Settings</h3>
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="displayNameInput" placeholder="Display Name" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea id="BioInput" placeholder="Bio" class="form-control form-control-sm" type="textarea" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="profilePictureInput" class="form-label">Profile Picture</label>
                                    <input id="profilePictureInput" type="file">
                                </div>
                                <div class="form-group">
                                    <label for="resumeInput" class="form-label">Resume</label>
                                    <input id="resumeInput" type="file">
                                </div>
                                <div class="form-group">
                                    <button type="button" onclick="UpdateProfile()" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
								
								<div id="updateSuccesMessage" style="display: none; color: green;">
                                    Settings changed!
                                </div>
								<div id="updateErrorMessage" style="display: none; color: red;">
                                    Settings could not be updated!
                                </div>
                                <div id="updateAPIerrorMessage" style="display: none; color: red;">
                                    An unexpected error occured! Try again later.
                                </div>
								
                            </form>
                        </div>
                    </div>
                    <!-- Main Settings -->

                    <!-- Password -->
                    <div class="card">
                        <div class="card-body">
                            <h3>Change Password</h3>
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="currentPasswordInput" placeholder="Current Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <input id="confirmPasswordInput" placeholder="Confirm Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="button" onclick="UpdatePassword()" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
								
								<div id="passwordSuccesMessage" style="display: none; color: green;">
                                    Password changed!
                                </div>
								<div id="passwordErrorMessage" style="display: none; color: red;">
                                    Password could not be updated!
                                </div>
                                <div id="passwordAPIerrorMessage" style="display: none; color: red;">
                                    An unexpected error occured! Try again later.
                                </div>
								
                            </form>
                        </div>
                    </div>
                    <!-- Password -->

                    <!-- Tags -->
                    <div class="card">
                        <div class="card-body">
                            <h3>Select Tags</h3>
                            <form class="form" role="form" action="profile.php">
                                <div class="form-group">
                                    Select Tags
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Tags -->
                </div>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>