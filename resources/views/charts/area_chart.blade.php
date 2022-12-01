@extends('layouts.master')

@section('body_content')
<div class="container">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Income', 'Expenses','Profit'],
          ['01',  2300,      400,600],
          ['02',  1000,      400,600],
          ['03',  1800,      400,600],
          ['04',  400,      400,600],
          ['05',  1170,      1800,555],
          ['06',  660,       1120,300],
          ['07',  1030,      540,230],
          ['08',  1000,      400,600],
          ['09',  1170,      460,555],
          ['10',  1980,       1120,300],
          ['11',  1030,      540,230]
        ]);

        var options = {
          title: 'Accounting',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
     <div id="chart_div" style="width: 100%; height: 500px;"></div>
</div>
@endsection