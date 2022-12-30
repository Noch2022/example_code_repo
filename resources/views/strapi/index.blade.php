<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      @if(isset($menus) && sizeof($menus) > 0)
        @foreach($menus as $menu)
          @php 
            $menu = (Object) $menu;
            $menu->attributes = (Object) $menu->attributes;
          @endphp
            <li><a href="#">{{($menu->attributes->menu_name)}}</a></li>
        @endforeach
      @endif

      @php 
      // dd("kakakak");
      @endphp
     
    </ul>
   
  </div>
</nav>
  
<div class="container">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Menu Name</th>
                <th>Published Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            @php 
              $menu = (Object) $menu;
              $menu->attributes = (Object) $menu->attributes;
            @endphp
            <tr>
                <td> {{($menu->id)}}</td>
                <td>{{($menu->attributes->menu_name)}}</td>
                <td>{{($menu->attributes->publishedAt)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
