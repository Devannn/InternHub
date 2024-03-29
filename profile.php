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
    <script type="text/javascript" src="js/profile.js"></script>

    <title>InternHub</title>
</head>

<body onload="getProfile(); getUserReview();">
    <div id="app">
        <?php include 'inc/nav.php' ?>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 24px;">
                <div class="col-md-8 order-md-1">
                    <!-- Main -->
                    <div class="card card-company-info">
                        <div class="card-image company-background-image">

							<div class="card-image company-logo" id="userImageContainer">
								<img id="userImage" src="img/pfp/default.png" alt="">
							</div>
							
                        </div>
                        <div class="card-body">
                            <h2 id="profileName">No profile name.</h2>
                            <p id="profileDescription">
                                No bio yet.
                            </p>
                        </div>
                    </div>
                    <!-- Main -->

                    <!-- Your Reviews -->
					<div class="card card-company-info">
						<div class="card-body">
							<h2>Your Reviews</h2>
							<div id="reviewsContainer"></div>
						</div>
					</div>				
                    <!-- Your Reviews -->
                </div>
                <div class="col-md-4 order-md-2">
                    <div class="tab-content">
                        <!-- Settings -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h3>Change Settings</h3>
                                    </div>
                                    <div class="col-2 float-right">
                                        <div class="float-right">
                                            <a href="edit-profile.php">
                                                <button class="btn btn-primary">
                                                    <img src="img/icons/pen-to-square-solid.png" alt="" width="20px" />
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Settings -->

                        <!-- Resume -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <h3>Resume</h3>
                                <p id="resumeFileName">
                                    resume.pdf
                                </p>
                            </div>
                        </div>
                        <!-- Resume -->

                        <!-- Category -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h3>Your Category</h3>
                                    </div>
                                    <div class="col-2 float-right">
                                        <div class="float-right">
                                            <a href="edit-tags.php">
                                                <button class="btn btn-primary">
                                                    <img src="img/icons/pen-to-square-solid.png" alt="" width="20px" />
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row overflow-auto">
                                    <div class="tag tag-profile d-inline-block">Media</div>
                                </div>
                            </div>
                        </div>
                        <!-- Category -->

                        <!-- Tags -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-10">
                                        <h3>Your Tags</h3>
                                    </div>
                                    <div class="col-2 float-right">
                                        <div class="float-right">
                                            <a href="edit-tags.php">
                                                <button class="btn btn-primary">
                                                    <img src="img/icons/pen-to-square-solid.png" alt="" width="20px" />
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row overflow-auto">
                                    <div class="tag tag-profile d-inline-block">Laravel</div>
                                    <div class="tag tag-profile d-inline-block">Vue.JS</div>
                                    <div class="tag tag-profile d-inline-block">Bootstrap</div>
                                    <div class="tag tag-profile d-inline-block">Next.JS</div>
                                    <div class="tag tag-profile d-inline-block">React</div>
                                    <div class="tag tag-profile d-inline-block">Laravel</div>
                                </div>
                            </div>
                        </div>
                        <!-- Tags -->
						
						<div id="companyControl" style="display: none;">
							
							<!-- Add Internship -->
							<div class="card card-company-bio">
								<div class="card-body">
									<div class="row">
										<div class="col-10">
											<h3>Add Internship</h3>
										</div>
										<div class="col-2 float-right">
											<div class="float-right">
												<a href="add-internship.php">
													<button class="btn btn-primary">
														<img src="img/icons/pen-to-square-solid.png" alt="" width="20px" />
													</button>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Add Internship -->

							<!-- Add Assigment -->
							<div class="card card-company-bio">
								<div class="card-body">
									<div class="row">
										<div class="col-10">
											<h3>Add Assigment</h3>
										</div>
										<div class="col-2 float-right">
											<div class="float-right">
												<a href="add-assignment.php">
													<button class="btn btn-primary">
														<img src="img/icons/pen-to-square-solid.png" alt="" width="20px" />
													</button>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Add Assigment -->
						
						</div>
						
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