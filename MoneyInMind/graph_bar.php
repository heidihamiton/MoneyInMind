<?php
include("connect.php");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Emotion', 'Spending'],
          <?php
          $sql = "SELECT Spending, Emotion FROM MiMtracker GROUP BY Emotion";
          $fire = mysqli_query($conn, $sql);
          while($resultt = mysqli_fetch_assoc($fire)){
          echo"['".$resultt['Emotion']."',".$resultt['Spending']."],";
          }
          
          ?>
        ]);

        var options = {
          title: 'Spendings and Emotions'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
