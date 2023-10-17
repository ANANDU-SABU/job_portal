<?php
include("config.php");
include("header.php");
$query = "SELECT count(jobpostid) as count, companyname FROM tbljobpost p inner join tblcompanyregistration t on t.companyid=p.companyid group by companyname";
$res = $con->query($query);
?>
<html>

<head>
  <style>
    .rotated {
      transform: rotate(45deg);
      /* Equal to rotateZ(45deg) */
      background-color: pink;
    }

    .btn {
      padding: 8px 4px 8px 1px;
    }

    #btnExport {
      padding: 10px 40px;
      background: #FF0000;
      border: #499249 1px solid;
      color: #ffffff;
      font-size: 0.9em;
      cursor: pointer;
    }
  </style>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['companyname', 'count'],
        <?php
        while ($row = $res->fetch_assoc()) {
          echo "['" . $row['companyname'] . "'," . $row['count'] . "],";
        }
        ?>
      ]);

      var options = {
        title: 'Job post in each company',
        is3D: true,
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('barchart'));//BarChart

      chart.draw(data, options);
    }
  </script>
</head>
<br><br>
<body>
  <div id="barchart" style="width: 60%; height: 500px;"></div>

</body>

</html>
  </div>
<?php
include("footer.php");
?>