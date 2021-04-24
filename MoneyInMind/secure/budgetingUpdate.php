<?php
   session_start();
    if(!isset($_SESSION['sesh'])){
        //move browser to log.php (login)
        header("Location: log.php");
        
    }
    include("../../MoneyInMind/connect.php");
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


    <title>MiM - Budgeting</title>
</head>
<body>
<!-- NavBar -->
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
    <a class="navbar-brand" href="index.php">
        <img src="../../MoneyInMind/img/logo.png" width="130" height="70" alt="" >
    </a>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Budgeting</a>
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
            <div class="col"></div>

            <!-- This is where the content is-->
            <div class="col-8">
                <div class="row">
                <div id="main-con" class="container">
                    
                    <h2> Monthly Budget </h2>
                    <p>How much salary do you get a month?</p>
                    <p>How much do you usually spend on each of the following areas.</p>
                    <form action='budgetProcessed.php' method='POST'>    
                                <?php
                                //This is where the user enters their salary data.
                                echo " <form>
                                        <div class='form-group row'>
                                        <label class='col-sm-2'>Salary</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='salaryData'>
                                        </div>
                                        </div>
                                        
                                        <div class='form-group row'>
                                        <label for='billsForm' class='col-sm-2'>Bills</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='billData'>
                                        </div>
                                        </div>
                                        
                                        <div class='form-group row'>
                                        <label for='billsForm' class='col-sm-2'>Groceries</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='grocData'>
                                        </div>
                                        </div>

                                        <div class='form-group row'>
                                        <label for='billsForm' class='col-sm-2'>Eating Out</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='eatData'>
                                        </div>
                                        </div>
                                        
                                        <div class='form-group row'>
                                        <label for='billsForm' class='col-sm-2'>Entertainment</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='entertainData'>
                                        </div>
                                        </div>
                                        
                                        <div class='form-group row'>
                                        <label for='billsForm' class='col-sm-2'>Shopping</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='shopData'>
                                        </div>
                                        </div>
                                        
                                        <div class='form-group row'>
                                        <label for='billsForm' class='col-sm-2'>Savings</label>
                                        <div class='col-sm-5'>
                                            <input type='number' class='form-control' name='saveData'>
                                        </div>
                                        </div>
                                        
                                        <div class='col'>
                                            <button type='submit' class='btn btn-info'>Submit</button>
                                        </div>
                                </form>
                                ";
                                ?>
                    </form>
                </div>
            </div>
            </div>
        

            <div class="col"></div>
    </div>
    </div>
    </div>

</body>
</html>
