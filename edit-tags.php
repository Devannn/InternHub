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
                    <!-- Edit Category -->
                    <div class="card">
                        <div class="card-body">
                            <h3>Select Category</h3>
                            <form class="form" role="form" action="profile.php">
                                <div class="form-group">
                                    <select name="category" id="category">
                                        <option value="business">Business</option>
                                        <option value="media">Media</option>
                                        <option value="software">Software</option>
                                        <option value="technology">Technology</option>
                                        <option value="infrastucture">Infrastructure</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Edit Category -->

                    <!-- Edit Tags -->
                    <div class="card">
                        <div class="card-body">
                            <h3>Select Tags</h3>
                            <form class="form" role="form" action="profile.php">
                                <div class="form-group">
                                    <select name="category" id="category">
                                        <option value="laravel">Laravel</option>
                                        <option value="media">Vue.JS</option>
                                        <option value="software">JavaScript</option>
                                        <option value="technology">React</option>
                                        <option value="infrastucture">Photoshop</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Edit Tags -->
                </div>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>