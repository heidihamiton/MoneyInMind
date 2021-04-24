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
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Tracker</a>
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
                            <h2> March Spendings </h2>
                            <p> Enter the date, how much you spent and how you felt.</p>
                            
                            <form action='trackerProcessed.php' method='POST'>                    

                                <?php
                                //This is the form for the user to enter their spendings, date and emotion.
                                echo " <form>
                                    <div class='row'>
                                        <div class='col'>
                                            <input type='date' class='form-control' placeholder='Date' name='datedata'>
                                        </div>
                                        <div class='col'>
                                            <input type='number' class='form-control' placeholder='Amount' name='amountdata'>
                                        </div>
                                        
                                        <select name='emotiondata' select id='emotionselect'>
                                        <option value=''></option>
                                        <option value='Angry'>Angry</option>
                                        <option value='Anxious'>Anxious</option>
                                        <option value='Bored'>Bored</option>
                                        <option value='Guilty'>Guilty</option>
                                        <option value='Happy'>Happy</option>
                                        <option value='OK'>OK</option>
                                        <option value='Sad'>Sad</option>
                                        </select>
                                        
                                        <div class='col'>
                                            <button type='submit' class='btn btn-info'>Submit</button>
                                        </div>
                                    </div>
                                </form>
                                ";
                                ?>
                                
                            </form>
                            <p></p>
                            <div class='card'>
                            <?php
                            //this is selecting the users salary from the db
                            $readqueryy = "SELECT * FROM MiMamount";
                            $resultqueryy = $conn -> query($readqueryy);

                                       while($rowdataa = $resultqueryy->fetch_assoc()){
                                           $money = $rowdataa["amount"];
                                           
                                            // echo "£$money";
                                       }
                                     
                           //this is selecting the users entries from the db for March 
                           $query1 = "SELECT Spending FROM MiMtracker WHERE date BETWEEN '2021-03-01' AND '2021-03-31'";
                           $resultLeft = $conn -> query($query1);
                           $total_costs = 0;

                            while($rowvalue = mysqli_fetch_array($resultLeft)){
                              $total_costs += $rowvalue['Spending'];
                            }

                            //Here I then calculate how much money they have left over.
                            $totalLeft = $money - $total_costs; 
                            ?>
                        <div class="row">
                                <div class="col-sm-6">
                                  <div class="card">
                                    <div class="card-body">
                                        <h4>Your monthly budget</h4>
                                        <h5><?php echo "£$money" ?></h5>
                                        <h4>Left for this month</h4>
                                        <h5><?php echo "£$totalLeft" ?></h5>
                                    </div>
                                  </div>
                                </div>
                            
                            <div class="col-sm-6">
                                  <div class="card">
                                    <div class="card-body">
                                        <h4>Your top emotion this month</h4>
                                        
                                        <?php
                                        //I am finding their top emotion here for March
                                        $querycount =  "SELECT Emotion, COUNT(Emotion) AS `value_occurrence` FROM MiMtracker WHERE date BETWEEN '2021-03-01' AND '2021-03-31' GROUP BY Emotion ORDER BY `value_occurrence` DESC LIMIT 1";
                                        $resultcount = $conn -> query($querycount);
                                        
                                        while($row = $resultcount->fetch_assoc()){
                                           $topemotion = $row["Emotion"];
                                       }
                                      
                                        if ($resultcount->num_rows > 0) {
                                        // This code tells the user which is their top emotion for this month, it goes along with a word of advice and a famous quote (including reference).
                                            if($topemotion == "Happy") {
                                              echo "<ul class='list-inline'><li><h4>Happy</h4></li>"
                                                . "<li>Spend some time today to enjoy your happiness</li>"
                                                . "<li>The purpose of our lives is to be happy</li>"
                                                . "<li>- Dalai Lama</li></ul>";
                                             
                                            }
                                            elseif($topemotion == "Angry"){
                                              echo "<ul class='list-inline'><li><h4>Angry</h4></li>"
                                                . "<li>Spend some time today to try deep breathing exercises</li>"
                                                . "<li>Holding on to anger is like drinking poison and expecting the other person to die</li>"
                                                . "<li>- Buddha</li></ul>";  
                                            }
                                            elseif($topemotion == "Sad"){
                                              echo "<ul class='list-inline'><li><h4>Sad</h4></li>"
                                                . "<li>Spend some time today to go outside and listen to nature.</li>"
                                                . "<li>People cry, not because they're weak. It's because they've been strong for too long</li>"
                                                . "<li>- Johnny Depp</li></ul>";    
                                            }
                                            elseif($topemotion == "OK"){
                                              echo "<ul class='list-inline'><li><h4>OK</h4></li>"
                                                . "<li>Spend some time today to research a new hobby</li>"
                                                . "<li>Be the change you want to see in the world</li>"
                                                . "<li>- Mahatma Gandhi</li></ul>"; 
                                            }
                                            elseif($topemotion == "Guilty"){
                                              echo "<ul class='list-inline'><li><h4>Guilty</h4></li>"
                                                . "<li>Spend some time today to reflect on why you feel guilty and try to forgive yourself</li>"
                                                . "<li>Mistakes are always forgivable, if one has the courage to admit them</li>"
                                                . "<li>- Bruce Lee</li></ul>"; 
                                            }
                                            elseif($topemotion == "Anxious"){
                                             echo "<ul class='list-inline'> <li><h4>Anxious</h4></li>"
                                                . "<li>Spend some time today to try meditation</li>"
                                                . "<li>Nothing is permanent in this wicked world - not even our troubles</li>"
                                                . "<li>- Charlie Chaplin</li></ul>";
                                             
                                            }
                                            elseif($topemotion == "Bored"){
                                              echo "<ul class='list-inline'><li><h4>Bored</h4></li>"
                                                . "<li>Spend some time today to reach out to a friend or family member</li>"
                                                . "<li>The way to get started is to quit talking and begin doing</li>"
                                                . "<li>- Walt Disney</li></ul>";
                                            }
                                        }
                                        else {
                                            echo "Error";
                                        }
                                        ?>
                                        
                                        
                                        <h5>
                                    
                                        </h5>
                                        
                                    </div>
                                  </div>
                                </div> 
                            
                        </div>
                                
                                <div class="col-sm-7">
                                  <div class="card">
                                    <div class="card-body">
                        <!--This is where the graph coding starts -->
                                            <script type="text/javascript">
                                                  google.charts.load('current', {'packages':['corechart']});
                                                  google.charts.setOnLoadCallback(drawChart);

                                                  function drawChart() {

                                                    var data = google.visualization.arrayToDataTable([
                                                      ['Emotion', 'Spending'],
                                                      <?php
                                                      $sql = "select Spending, Emotion, COUNT(Spending) AS MOST_FREQUENT from MiMtracker WHERE date BETWEEN '2021-03-01' AND '2021-03-31' GROUP BY Emotion ORDER BY COUNT(Spending) DESC";
                                                      $fire = mysqli_query($conn, $sql);
                                                      while($resultt = mysqli_fetch_assoc($fire)){
                                                      echo"['".$resultt['Emotion']."',".$resultt['MOST_FREQUENT']."],";
                                                      }

                                                      ?>
                                                    ]);

                                                    var options = {
                                                      title: 'Spendings and Emotions',
                                                      width: 400,
                                                      height: 300
                                                    };

                                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                                    chart.draw(data, options);
                                                  }
                                            </script>
                                        <div id="piechart" style="width: 400px; height: 300px;"></div>
                    <!--This is where the graph coding ends -->
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                            
                            <p></p>
                            <!-- Below is where the information will appear with spending, date and emotion -->
                            
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
                                <?php 
                                   
                                   //This is me getting their entries from March and displaying it in a table.
                                   $readquery = "SELECT * FROM MiMtracker WHERE date BETWEEN '2021-03-01' AND '2021-03-31' ORDER BY date DESC";
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
                    </div>

                    <div class="col"></div>

            </div>
        </div>
    </div>

</body>
</html>
