<?php
include("Header.php");
include("config.php");
  
 $query ="SELECT gender, count(jobseekerid) as 'totalgender' FROM tbljobseeker group by gender";  
//   "SELECT gender, count(jobseekerid) as 'totalgender' FROM tbljobseeker group by gender";
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['gender', 'totalgender'], 
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["gender"]."', ".$row["totalgender"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
    
           <div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div> 
           <div style="width:1500px; margin-top:6%">  
                <h3 align="center">Pie Chart showing the Count of Female and Male</h3>  
        </br>  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
     
          </div>
      </body>  
 </html>  
</body>
</html>
<?php
include("footer.php");
?>