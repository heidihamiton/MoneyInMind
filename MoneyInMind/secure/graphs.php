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
    
    <!-- Canvas JS for my Graphs - I used Google Charts -->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     
    
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
        <button type="button" class="btn btn-link" style="color:black;"> 
            <a role="button" href="logout.php" class="btn btn-primary btn-sm ml-3">Log out</a>
        </button>
        <button type="button" class="btn btn-link" style="color:black;">New User</button>

    </ul>
</nav>

<!--This is where the code is for all three graphs-->
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChartJan);
                    google.charts.setOnLoadCallback(drawChartFeb);
                    google.charts.setOnLoadCallback(drawChartMar);
                    
                    function drawChartJan() {

                        var data1 = google.visualization.arrayToDataTable([
                        ['Emotion', 'Spending'],
                        <?php
                        $sql1 = "select Spending, Emotion, COUNT(Spending) AS MOST_FREQUENT from MiMtracker WHERE date BETWEEN '2021-01-01' AND '2021-01-31' GROUP BY Emotion ORDER BY COUNT(Spending) DESC";
                        $fire1 = mysqli_query($conn, $sql1);
                        while($result1 = mysqli_fetch_assoc($fire1)){
                        echo"['".$result1['Emotion']."',".$result1['MOST_FREQUENT']."],";
                        }
                        ?>
                        ]);

                        var options1 = {
                        title: 'Spendings and Emotions',
                        width: 400,
                        height: 300
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('JanGraph'));
                        chart.draw(data1, options1);
                    }
                    
                    
                    
                    function drawChartFeb() {

                        var data1 = google.visualization.arrayToDataTable([
                        ['Emotion', 'Spending'],
                        <?php
                        $sql2 = "select Spending, Emotion, COUNT(Spending) AS MOST_FREQUENT from MiMtracker WHERE date BETWEEN '2021-02-01' AND '2021-02-31' GROUP BY Emotion ORDER BY COUNT(Spending) DESC";
                        $fire2 = mysqli_query($conn, $sql2);
                        while($result2 = mysqli_fetch_assoc($fire2)){
                        echo"['".$result2['Emotion']."',".$result2['MOST_FREQUENT']."],";
                        }
                        ?>
                        ]);

                        var options1 = {
                        title: 'Spendings and Emotions',
                        width: 400,
                        height: 300
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('FebGraph'));
                        chart.draw(data1, options1);
                    }
                    
                    
                    
                     function drawChartMar() {

                        var data1 = google.visualization.arrayToDataTable([
                        ['Emotion', 'Spending'],
                        <?php
                        $sql3 = "select Spending, Emotion, COUNT(Spending) AS MOST_FREQUENT from MiMtracker WHERE date BETWEEN '2021-03-01' AND '2021-03-31' GROUP BY Emotion ORDER BY COUNT(Spending) DESC";
                        $fire3 = mysqli_query($conn, $sql3);
                        while($result3 = mysqli_fetch_assoc($fire3)){
                        echo"['".$result3['Emotion']."',".$result3['MOST_FREQUENT']."],";
                        }
                        ?>
                        ]);

                        var options1 = {
                        title: 'Spendings and Emotions',
                        width: 400,
                        height: 300
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('MarGraph'));
                        chart.draw(data1, options1);
                    }
                </script>

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
        <h2> Graphs For 2021 </h2>
        
            <div class="card">
            <div class="card-body">
            <!--January graph section start -->
                <h5 class="card-title">January</h5>
                <p class="card-text">This graph shows the pattern of your spending throughout January</p>
                <p class="card-text"><small>Your top emotion for January: 
                <?php
                //This php is for getting the top emotion for January
                $queryJan =  "SELECT Emotion, COUNT(Emotion) AS `value_occurrence` FROM MiMtracker WHERE date BETWEEN '2021-01-01' AND '2021-01-31' GROUP BY Emotion ORDER BY `value_occurrence` DESC LIMIT    1";
                $resultJan = $conn -> query($queryJan);
                                        
                while($row = $resultJan->fetch_assoc()){
                    $topemotionJan = $row["Emotion"];
                }
                echo $topemotionJan;
                ?>
                </small>
                </p>
                <!--Graph start-->
                <div id="JanGraph" style="width: 400px; height: 300px;"></div>
                <!--Graph end-->
            <!--January end -->
            
            <!--February graph section start -->
                <h5 class="card-title">February</h5>
                <p class="card-text">This graph shows the pattern of your spending throughout February</p>
                <p class="card-text"><small>Your top emotion for February: 
                <?php
                //This php is for getting the top emotion for February
                $queryFeb =  "SELECT Emotion, COUNT(Emotion) AS `value_occurrence` FROM MiMtracker WHERE date BETWEEN '2021-02-01' AND '2021-02-31' GROUP BY Emotion ORDER BY `value_occurrence` DESC LIMIT    1";
                $resultFeb = $conn -> query($queryFeb);
                                        
                while($row = $resultFeb->fetch_assoc()){
                    $topemotionFeb = $row["Emotion"];
                }
                echo $topemotionFeb;
                ?>
                </small>
                </p>
                <!--Graph start-->
                <div id="FebGraph" style="width: 400px; height: 300px;"></div>
                <!--Graph end-->
            <!--February end -->
            
            <!--March graph section start -->
                <h5 class="card-title">March</h5>
                <p class="card-text">This graph shows the pattern of your spending throughout March</p>
                <p class="card-text"><small>Your top emotion for March: 
                <?php
                //This php is for getting the top emotion for March
                $queryMar =  "SELECT Emotion, COUNT(Emotion) AS `value_occurrence` FROM MiMtracker WHERE date BETWEEN '2021-03-01' AND '2021-03-31' GROUP BY Emotion ORDER BY `value_occurrence` DESC LIMIT    1";
                $resultMar = $conn -> query($queryMar);
                                        
                while($row = $resultMar->fetch_assoc()){
                    $topemotionMar = $row["Emotion"];
                }
                echo $topemotionMar;
                ?>
                </small>
                </p>
                <!--Graph start-->
                <div id="MarGraph" style="width: 400px; height: 300px;"></div>
                <!--Graph end-->
            <!--March end -->
            </div>
            </div>
            </div>
        </div>
    </div>
                <!-- this acts as padding on either side -->
        <div class="col"></div>
    </div>
    </div>
    </div>

</body>
</html>
