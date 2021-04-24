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


    <title>Money in Mind</title>
</head>
<body>
    
   
<!-- NavBar -->
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
    <a class="navbar-brand" href="#">
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
                <div class="col"></div>

                    <!-- This is where the content is-->
                    <div class="col">
                        <div id="main-con" class="container">
                            <h1> Welcome to </h1>
                            <img src="../../MoneyInMind/img/logo.png" width="250" alt="" >
                            <p> Hello and welcome to our website, we are so glad
                                you have decided to take control of your addiction.
                                This website should help you manage everything
                                from spending habits to emotions.</p>
                        </div>
                    </div>
                    
                    
                    
                    <?php
                            //Getting users name
                            $getName = "SELECT user FROM MiMlogin WHERE id = 1";
                            $resultName = $conn -> query($getName);
                            
                            if ($resultName->num_rows > 0) 
                                {
                                // output data of each row
                                while($row = $resultName->fetch_assoc()) 
                                    {
                                    $username = $row["user"];
                                    }
                                } else 
                                {
                                     echo "error";
                                }

                    ?>
                    
                        <div class="col">
                        <div id="main-con" class="container" style="width: 350px;">
                            <h2> Welcome <?php echo "$username"?> to your breakdown of weekly events.</h2>
                          
                            <div class='card'>
                                    <div class='card-body'>
                                        
                                        <table class='table'>
                                            <thead>
                                              <tr>
                                                <th scope='col'>Date</th>
                                                <th scope='col'>Spending</th>
                                                <th scope='col'>Emotion</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                <!--Getting this weeks spending entries-->                
                                <?php 
                                   $readquery = "SELECT * FROM MiMtracker WHERE date BETWEEN '2021-03-15' AND '2021-03-21' ORDER BY date DESC";
                                   $resultquery = $conn -> query($readquery);

                                       while($rowdata = $resultquery->fetch_assoc()){
                                           $dated = $rowdata["Date"];
                                           $amount = $rowdata["Spending"];
                                           $emotion = $rowdata["Emotion"];
                                           
                                             echo " 
                                                <tr>
                                                  <td>$dated</td>
                                                  <td>£$amount</td>
                                                  <td>$emotion</td>
                                                </tr>
                                                  ";
                                       }
                                ?>
                                            </tbody>
                                        </table>  
                                        
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


