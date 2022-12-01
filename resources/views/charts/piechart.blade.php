@extends('layouts.master')

@section('body_content')
<div class="container">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Kindergaten',     50],
          ['G1',      60],
          ['G2',  70],
          ['G3', 40],
          ['G4',    33],
          ['G5',    33],
          ['G6',    33],
          ['G7',    33],
          ['G8',    33],
          ['G9',    33],
          ['G10',    33],

        ]);

        var options = {
          title: 'Total Number of Student base on G level',
          is3D: true,
          legend:{
            position: 'bottom'
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 1300px; height: 500px;"></div>
  </body>
</div>
@endsection