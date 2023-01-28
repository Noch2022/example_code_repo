<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#submit_action").click(function(){
                
                var abc = $(".attendance_tbody").children();
                $.each($(abc), function(key,element) {
                    console.log(key+"---"+element);
                    console.log(element.id);
                });
                console.log(abc);
            });
        });
    </script>
  <style>
    .body_content{
        width: 90%;
        margin: 0 auto;
        margin-top: 20px;
    }
  </style>
</head>
<body>
{{-- <div class="header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="/">AAA</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/terminology">ABC</a></li>
                <li><a href="/position">XYZ</a></li>
            </ul>
        </div>
    </nav>
</div> --}}
<div class="header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="/">AAA</a>
            </div>
            <ul class="nav navbar-nav">
                {{-- <li><a href="/all_chart">All Chart</a></li>
                <li><a href="/calendar_chart">Calendar Chart</a></li>
                <li><a href="/pie_chart">Pie Chart</a></li>
                <li><a href="/column_chart">Column Chart</a></li>
                <li><a href="/area_chart">Area Chart</a></li>
                <li><a href="/scatter_chart">Scatter Chart</a></li>
                <li><a href="/room">Room</a></li>
                <li><a href="/attendance">Attendance</a></li>
                <li><a href="/reports">Report</a></li>
                <li><a href="/media_print">Media Print</a></li>
                <li><a href="/strapi">Strapi</a></li>
                <li><a href="/date_converter">Date Converter</a></li>
                <li><a href="/amount_converter/350">Amount Converter</a></li> --}}
                <li><a href="/mpdf">MPDF</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="body_content">
    @yield('body_content')
</div>

</body>
</html>
