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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7355024ecc.js" crossorigin="anonymous"></script>

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
                <div class="col-md-6 order-md-2 overflow-auto col-companies">
                <div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div>
                </div>
                <!-- Companies -->

                <!-- Profile -->
                <div class="col-md-3 order-md-3 col-profile" style="margin-bottom: 24px;">
                    <div class="card card-profile-homepage">
                        <div class="upper">
                            <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
                        </div>
                        <div class="user text-center">
                            <div class="profile">
                                <img src="img/pfp.jpeg" class="rounded-circle" width="80">
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="text-center">Devan Janssen</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi blanditiis eius laudantium tempore numquam corporis delectus ipsam perferendis, quidem autem quas praesentium voluptates tempora dignissimos ab eligendi. Maiores, mollitia!</p>
                        </div>
                    </div>
                </div>
                <!-- Profile -->
                <div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div><div class="card companies-card">
    <div class="card-body">
        <a href="company.php" class="company-link">
            <div class="row">
                <div class="col-2">
                    <div class="companies-image">
                        <img src="/InternHub/img/roc-logo.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col text-bold">Roc Ter AA</div>
                        <div class="col text-bold d-flex justify-content-end">Noord-Brabant</div>
                    </div>
                    <div class="row">
                        <div class="col">Web Developer</div>
                        <div class="col d-flex justify-content-end">
                            <div class="rating">
                                <div class="rating rating-text">3,7</div>
                                <div class="rating rating-star">
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <div class="rating rating-text-small">(4)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <div class="py-2"></div>
        <div class="row flex-nowrap overflow-auto">
            <div class="tag d-inline-block">Laravel</div>
            <div class="tag d-inline-block">Vue.JS</div>
            <div class="tag d-inline-block">Bootstrap</div>
            <div class="tag d-inline-block">Next.JS</div>
            <div class="tag d-inline-block">React</div>
            <div class="tag d-inline-block">Laravel</div>
        </div>
        <div class="companies-text-right col-text-small">
            18-12-2023
        </div>
    </div>
</div>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>