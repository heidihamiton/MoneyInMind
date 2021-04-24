<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/stylesheet.css">

    <!-- Bootstrap javascript and JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <title>Money in Mind</title>
</head>
<body>
<!-- NavBar -->
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
    <a class="navbar-brand" href="index.php">
        <img src="../../MoneyInMind/img/logo.png" width="130" alt="" >
    </a>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="budgeting.php">Budgeting</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="tracker.php">Tracker</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Graphs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="articles.php">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="settings.php">Settings</a>
        </li>

        <!-- Search Bar -->
        <form class="form-inline">
            <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>

        <!-- Sign in and New User Buttons -->
        <button type="button" class="btn btn-link" style="color:black;">Sign In</button>
        <button type="button" class="btn btn-link" style="color:black;">New User</button>

    </ul>
</nav>


<!-- Start of main body -->
    <div id="myDIV" style="background-blend-mode: normal;">
        <div class="container">
            <div class="row">
                <!-- this acts as padding on either side -->
                <div class="col-2"></div>

                    <!-- This is where the content is-->
                <div class="col-8">
                    <div id="main-con" class="container">
                        <h2> Graphs </h2>
                        <p>This page shows you graphs showing patterns depending on the emotion, amount or date you select from the dropdowns below.</p>

                                    <p> Select year: </p>
                                    <div class="dropdown" id="myDropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            Select year
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">2020</a>
                                            <a class="dropdown-item" href="#">2021</a>
                                        </div>
                                    </div>
                            <!-- This is just to create a padding/space-->
                            <p></p>

                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Emotion</h5>
                                    <p class="card-text">This graph shows the pattern of your spending depending on your emotion</p>
                                    <p class="card-text"><small>Use this dropdown to select an emotion</small></p>
                                        <div class="dropdown" id="myDropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                                Select year
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Happy</a>
                                                <a class="dropdown-item" href="#">Sad</a>
                                                <a class="dropdown-item" href="#">Guilty</a>
                                                <a class="dropdown-item" href="#">Angry</a>
                                                <a class="dropdown-item" href="#">Bored</a>
                                                <a class="dropdown-item" href="#">Anxious</a>
                                                <a class="dropdown-item" href="#">OK</a>
                                            </div>
                                        </div>
                                    <!-- Graphs will be below -->


                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Spending</h5>
                                    <p class="card-text">This graph shows the pattern of your emotions depending on your spending</p>
                                    <p class="card-text"><small>Use this dropdown to select an emotion</small></p>
                                    <div class="dropdown" id="myDropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            Select year
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Happy</a>
                                            <a class="dropdown-item" href="#">Sad</a>
                                            <a class="dropdown-item" href="#">Guilty</a>
                                            <a class="dropdown-item" href="#">Angry</a>
                                            <a class="dropdown-item" href="#">Bored</a>
                                            <a class="dropdown-item" href="#">Anxious</a>
                                            <a class="dropdown-item" href="#">OK</a>
                                        </div>
                                    </div>
                                    <!-- Graphs will be below -->


                                </div>
                            </div>

                        </div>



                    </div>
                    </div>
                </div>

                <!-- this acts as padding on either side -->
                <div class="col-2"></div>
            </div>
        </div>
    </div>

</body>
</html>
