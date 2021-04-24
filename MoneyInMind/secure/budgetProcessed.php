<?php
//This is where I am inputting the entered values into the db - previous page/where user entered values is budgeting.php
    include("../../MoneyInMind/connect.php");
//I enter the salary both into the table MiMamount and MiMbudget - this is because I found it easier when calling on the salary on the tracker page.
    $money = $_POST['salaryData'];
    
    $updatequeryy = "INSERT INTO MiMamount (id, amount) VALUES (NULL,'$money')";
    $result = $conn->query($updatequeryy);
    
    $bill = $_POST['billData']; 
    $groc = $_POST['grocData']; 
    $eating = $_POST['eatData']; 
    $entertain = $_POST['entertainData']; 
    $shopping = $_POST['shopData']; 
    $saving = $_POST['saveData']; 
    
    $updatequeryy = "INSERT INTO MiMbudget (id, Bills, Groceries, Eating_Out, Entertainment, Shopping, Savings, Salary) VALUES (NULL,'$bill','$groc', '$eating', '$entertain', '$shopping', '$saving', '$money')";
    $result = $conn->query($updatequeryy);
    
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap & CSS - I used framework from Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../MoneyInMind/style/stylesheet.css">

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
            <a class="nav-link active" style = "color:black;" href="graphs.php">Graphs</a>
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
        <button type="button" class="btn btn-link" style="color:black;"> 
            <a role="button" href="logout.php" class="btn btn-primary btn-sm ml-3">Log out</a>
        </button>
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
                        <div id="main-con" class="container" width="400px">
                            <h3> Thank you, that has been processed</h3>
                            <a class="btn btn-primary" href="budgeting.php" role="button">Back</a>
                        </div>
                    </div>

                    <div class="col-2"></div>

            </div>
        </div>
    </div>

</body>
</html>
