<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include CSS/JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7355024ecc.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <title>InternHub</title>
</head>

<body onload="getCookie()">
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
                                <div class="tab-pane fade show active" id="one">
                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <input id="usernameInput" placeholder="Username" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="form-group text-xs-center">
                                            <small><a href="#">Forgot password?</a></small>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="two">
                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <input id="usernameInput" placeholder="Username" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                </div>
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