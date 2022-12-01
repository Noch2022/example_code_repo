@extends('layouts.master')

@section('body_content')
<div class="container">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ["Element", "Student", { role: "style" } ],
        ["PP-2H-4363", 45, "#b87333"],
        ["PP-3M-3444", 34, "silver"],
        ["PP-2BH-7880", 22, "gold"],
        ["PP-3K-3438", 58, "color: #e5e4e2"],
        ["PP-2H-4363", 45, "#b87333"],
        ["PP-3M-3444", 34, "silver"],
        ["PP-2BH-7880", 22, "gold"],
        ["PP-3K-3438", 58, "color: #e5e4e2"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                        2]);

        var options = {
        title: "Number of student on the transportation",
        width: 1300,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
    </script>
    <div id="columnchart_values" style="width: 100%; height: 300px;"></div>
</div>
@endsection