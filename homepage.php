<?php
include 'inc/getAuthKey.php';
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
        <?php include 'inc/nav.php' ?>
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
                <div class="col-md-6 order-md-2 overflow-auto col-companies" id="companies-container">
                    <!-- Companies will be dynamically added here -->
                </div>
                <!-- Companies -->

                <!-- Profile -->
                <div class="col-md-3 order-md-3 col-profile" style="margin-bottom: 24px;">
                    <div class="card card-profile-homepage">
                        <div class="upper">
                            <div class="img-fluid" style="background-color: var(--primary-color); border-radius: 10px 10px 0px 0px; height:60px;">
                            </div>
                        </div>
                        <div class="user text-center">
                            <div class="profile">
                                <img src="img/pfp/default.png" class="rounded-circle" width="80">
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="text-center">Devan Janssen</h6>
                            <p>
                                Hi, I'm Devan Janssen!
                                Exploring life's adventures, one day at a time.
                                Passionate about Coding.
                                Always learning, forever curious
                                Creative soul with a love for Coding.
                                Making memories and cherishing moments.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Profile -->
            </div>
        </div>
    </div>
    <script>
        // JSON data from the API
        var jsonData = [{
            "Company_ID": 1,
            "Company_Name": "Company 1",
            "Company_Province": "Noord-Brabant",
            "Company_Rating": 0.0,
            "Company_ReviewCount": 0,
            "Company_LogoFilePath": null,
            "Company_Categories": [{
                "Category_ID": 1,
                "Category_Name": "test1"
            }],
            "Company_Tags": [{
                "Tag_ID": 1,
                "Tag_Name": "test1"
            }, {
                "Tag_ID": 2,
                "Tag_Name": "test2"
            }]
        }, {
            "Company_ID": 3,
            "Company_Name": "Test company 3",
            "Company_Province": "Noord-Brabant",
            "Company_Rating": 0.0,
            "Company_ReviewCount": 0,
            "Company_LogoFilePath": null,
            "Company_Categories": [{
                "Category_ID": 1,
                "Category_Name": "test1"
            }],
            "Company_Tags": [{
                "Tag_ID": 1,
                "Tag_Name": "test1"
            }, {
                "Tag_ID": 2,
                "Tag_Name": "test2"
            }]
        }];

        // Populate companies-container with HTML using the function from functions.js
        document.addEventListener('DOMContentLoaded', function() {
            generateCompanyHTML(jsonData);
        });
    </script>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>