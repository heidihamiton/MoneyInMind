<?php
//allowing user to login from data in the db
session_start();

$name = $_POST['user'];
//echo $name;

$password = $_POST['pass'];
//echo $password;

include('../../MoneyInMind/connect.php');
$check = "SELECT * FROM MiMlogin WHERE user='$name' AND mypass='$password'";
$result = $conn -> query($check);


?>
<!DOCTYPE html>
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
        <?php
        $num = $result->num_rows;
        
          if($num > 0){
              echo "you are a valid user";
              $_SESSION['sesh'] = $name;
              header("Location: index.php");
          }  else{
              echo "you are not a user go away";
          }
        ?>
    </body>
</html>
