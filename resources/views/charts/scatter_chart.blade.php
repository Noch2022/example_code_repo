@extends('layouts.master')

@section('body_content')
<div class="container">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ItemName', 'TotalItem'],
          [ 'Kinder ENG B01',      12],
          [ 'Kinder ENG B02',      34],
          [ 'Kinder ENG B02',      70],
          [ 'Kinder ENG B02',      62],
          [ 'Kinder ENG B02',      32],
          [ 'Kinder ENG B02',      22],
        ]);

        var options = {
          title: 'Total Item ',
          hAxis: {title: 'Item Name', minValue: 0, maxValue: 15},
          vAxis: {title: 'Total Item', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>

</div>
@endsection