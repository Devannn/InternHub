<?php
include 'inc/checkAuthKey.php';
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
                <div class="col-md-8 order-md-1">
                    <!-- Bio -->
                    <div class="tab-pane fade show active" id="one">
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <h1>Green Coding</h1>
                                <p>
                                    ‘Green Coding’ gaat er vanuit dat als je code of opslag efficiënter maakt, die dan ook minder energie gebruikt en daarmee vriendelijker is voor het milieu.
                                    <br>
                                    De opdracht is om dit zoveel mogelijk kwantificeerbaar te maken, zodat er business cases gemaakt kunnen worden om het daadwerkelijk wel of niet te gaan doen.
                                    <br>
                                    Tijdens de stage kom je technieken tegen als Azure, C#, SQL-server, IIS, netwerkstacks etc.
                                    <br>
                                    Je zult zelf ook moeten onderzoeken hoe andere zaken te meten zijn. Kunnen we bijvoorbeeld het stroomverbruik van een router meten en er dus mee experimenteren? In hoeverre bijvoorbeeld zijn de kosten een Azure Database Transaction Unit te vertalen naar energieverbruik? Als we compressie gebruiken wegen dan de bespaarde storage- en netwerkkosten op tegen de extra CPU kosten? En nog veel meer vragen….
                                    <br><br>
                                    Green Coding assumes that if you make code or storage more efficient, it also uses less energy and is therefore kinder to the environment.
                                    <br>
                                    The assignment is to make this as quantifiable as possible, so that business cases can be made to actually do it or not.
                                    <br>
                                    During the internship you will come across techniques such as Azure, C#, SQL server, IIS, network stacks, etc.
                                    <br>
                                    You will also have to research how other things can be measured. For example, can we measure the power consumption of a router and thus experiment with it? For example, to what extent can the costs of an Azure Database Transaction Unit be translated into energy consumption? If we use compression, do the saved storage and network costs outweigh the extra CPU costs? And many more questions….
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Bio -->
                </div>
                <div class="col-md-4 order-md-2">
                    <div class="tab-content">
                        <!-- Assigment Details -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <h3>Assignment Details</h3>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-right">Language</td>
                                            <td>English</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Compensation</td>
                                            <td>$400 p/m</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Created At</td>
                                            <td>12-10-2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Assigment Details -->

                        <!-- Assigment Details -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <h3>Contact</h3>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-right">Contact Name</td>
                                            <td>Full Name</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Emailaddress</td>
                                            <td>test@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">Phonenumber</td>
                                            <td>+31 6 22884499</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Assigment Details -->

                        <!-- Address -->
                        <div class=" card card-company-bio">
                            <div class="card-body">
                                <h3>Address</h3>
                                <p>
                                    Margrietlaan 53
                                    <br>
                                    5701EB, Helmond
                                    <br>
                                    Noord-Brabant
                                </p>
                            </div>
                        </div>
                        <!-- Address -->

                        <!-- Bio -->
                        <div class="card card-company-bio">
                            <div class="card-body">
                                <h3>Roc Ter AA</h3>
                                <p>
                                    ROC Ter AA realiseert beroepsonderwijs.
                                    <br>
                                    In onze colleges begeleiden wij mensen naar de toekomst. Dat doen we door samen met hen de passie en het succes te zoeken in vakmanschap en werk, deelname aan de maatschappij en verdere studie.
                                    Wij onderscheiden ons door onze persoonlijke manier van werken en onze gerichtheid op kwaliteit. Wij zijn (pro)actief bij alles wat we doen en betrokken bij iedereen voor wie we dat doen.
                                </p>
                                <form action="company.php">
                                    <input type="submit" class="btn btn-outline-primary btn-assignment-link" value="More Info" />
                                </form>
                            </div>
                        </div>
                        <!-- Bio -->
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