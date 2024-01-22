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
    <script type="text/javascript" src="js/company.js"></script>

    <title>InternHub</title>
</head>

<body onload="getCompanyReview(getParameterByName('i')); getInternshipOverview(getParameterByName('i'));">
    <div id="app">
        <?php include 'inc/nav.php' ?>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 24px;">
                <div class="col-md-12 order-md-1">
                    <!-- Main -->
                    <div class="card card-company-info">
                        <div class="card-image company-background-image">
                            <div class="card-image company-logo">
                                <img src="img/pfp/roc-logo.png" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h2>Roc Ter AA</h2>
                                </div>
                                <div class="col float-right">
                                    <div class="float-right">
                                        <a onclick="RelocateToMessages();">
                                            <button class="btn btn-primary">
                                                <img src="img/icons/message-solid.png" alt="" width="20px" />
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-nowrap overflow-auto">
                                <div class="tag d-inline-block">Laravel</div>
                                <div class="tag d-inline-block">React</div>
                                <div class="tag d-inline-block">Vue.JS</div>
                            </div>
                        </div>
                        <div class="card-footer card-company-info-footer">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">Home</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">Contact</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="internships-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="true">Internships</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="assigments-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab" aria-controls="four" aria-selected="true">Assignments</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#five" type="button" role="tab" aria-controls="five" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    </div>
                    <!-- Main -->

                    <div class="tab-content">
                        <!-- Bio -->
                        <div class="tab-pane fade show active" id="one">
                            <div class="card card-company-bio">
                                <div class="card-body">
                                    <h3>Bio</h3>
                                    <p>
                                        ROC Ter AA realiseert beroepsonderwijs.
                                        <br>
                                        In onze colleges begeleiden wij mensen naar de toekomst. Dat doen we door samen met hen de passie en het succes te zoeken in vakmanschap en werk, deelname aan de maatschappij en verdere studie.
                                        Wij onderscheiden ons door onze persoonlijke manier van werken en onze gerichtheid op kwaliteit. Wij zijn (pro)actief bij alles wat we doen en betrokken bij iedereen voor wie we dat doen.
                                        <br>
                                        <br>
                                        In nauwe samenwerking met bedrijven en instellingen bieden wij een samenhangend en overzichtelijk opleidingsaanbod dat past bij de arbeidsmarkt in onze omgeving.
                                        In overzichtelijke mbo-colleges realiseren wij middelbaar beroepsonderwijs. Wij bieden onze studenten een herkenbare, goed georganiseerde en veilige omgeving waarin zij optimaal kunnen presteren.
                                    <ul>
                                        <li>Bouw & Design College</li>
                                        <li>Business College</li>
                                        <li>Dienstverlening College</li>
                                        <li>Entree College</li>
                                        <li>ICT College</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Bio -->

                        <!-- Contact -->
                        <div class="tab-pane fade" id="two">
                            <div class="card card-company-bio">
                                <div class="card-body">
                                    <h3>Contact</h3>
                                    <div class="kvk">
                                        <h5 style="margin: 0px;">Contact Name</h5>
                                        <p>Devan Janssen</p>
                                    </div>
                                    <div class="kvk">
                                        <h5 style="margin: 0px;">Email</h5>
                                        <p>DevanJanssen@gmail.com</p>
                                    </div>
                                    <div class="kvk">
                                        <h5 style="margin: 0px;">Phonenumber</h5>
                                        <p> +31 6 22449988</p>
                                    </div>
                                    <div class="kvk">
                                        <h5 style="margin: 0px;">KVK Number</h5>
                                        <p>17078445</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <card class="card-body">
                                    <h3>Address</h3>
                                    <p>
                                        Margrietlaan 53
                                        <br>
                                        5701EB, Helmond
                                        <br>
                                        Noord-Brabant
                                    </p>
                                </card>
                            </div>
                        </div>
                        <!-- Info -->

                        <!-- Internships -->
                        <div class="tab-pane fade" id="three">
                            <div class="card card-company-bio">
                                <div class="card-body">
                                    <h3>Internships</h3>
									<div class="row" id="internshipContainer"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Internships -->

                        <!-- Assigments -->
                        <div class="tab-pane fade" id="four">
                            <div class="card card-company-bio">
                                <div class="card-body">
                                    <h3>Assigments</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Tags</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HBO Graduation Assignment: Make a website for a pizza company</td>
                                                <td>Laravel</td>
                                                <td>
                                                    <form action="assignment.php">
                                                        <input type="submit" class="btn btn-outline-primary btn-assignment-link" value="Details" />
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HBO Graduation Assignment: Make a website for a pizza company</td>
                                                <td>React</td>
                                                <td>
                                                    <form action="assignment.php">
                                                        <input type="submit" class="btn btn-outline-primary btn-assignment-link" value="Details" />
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HBO Graduation Assignment: Make a website for a pizza company</td>
                                                <td>Vue.JS</td>
                                                <td>
                                                    <form action="assignment.php">
                                                        <input type="submit" class="btn btn-outline-primary btn-assignment-link" value="Details" />
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Assignments -->

                        <!-- Reviews -->
                        <div class="tab-pane fade" id="five">
                            <div class="card card-company-bio">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h2>Reviews</h2>
                                        </div>
										
										<div class="col float-right">
											<div class="float-right">
												<a onclick="RelocateTo('add-review');">
													<button class="btn btn-primary">
														<img src="img/icons/plus-solid.png" alt="" width="20px" />
													</button>
												</a>
											</div>
										</div>
										
                                    </div>
                                    <div class="reviews-global">
                                        <div class="row">
                                            <div class="col-3 col-md-1">
                                                <h1 id="avg_rate">0</h1>
                                                <div class="col"></div>
                                            </div>
                                            <div class="col">
                                                <div class="row stars">
                                                    <img src="img/icons/star-solid.svg" alt="" width="20px" />
                                                </div>
                                                <div class="row" id="total_reviews">
                                                    Averaged from 0 reviews
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
									<!-- User reviews -->
									<div id = "userReviewsContainer"></div>

                                </div>
                            </div>
                        </div>
                        <!-- Reviews -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>