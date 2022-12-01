<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report of Privilledges</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.modal-content{
  		width: 100%;
  		height: 90vh;
  	}
  	embed{
  		width: 100%;
  		height: 100%;
  	}
  	.modal-body{
  		height: 100%;
  		padding: 0px;
  	}
  	.modal-dialog{
  		width: 50% !important;
  		margin:  5px auto !important;
  	}
  	.modal-header{
  		padding: 10px;
	    border-bottom: 1px solid #6c6c6c;
	    background: #bdbdbd;
	    color: floralwhite;
	    font-weight: bold;
  	}
  </style>
</head>
<body>

<div class="container wrapper">
  <h2>Basic Table</h2>
  <a href="/printAll" class="btn btn-primary" target="_blank">   Print All Records</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>SLUG</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@if(isset($privilledges) && sizeof($privilledges) > 0)
    		@foreach($privilledges as $item)
			<tr>
		        <td>{{$item->id}}</td>
		        <td>{{$item->slug}}</td>
		        <td>{{$item->title}}</td>
		        <td>
		        	<a href="/printOne/{{$item->id}}" class="btn btn-info" target="_blank">Print</a>
		        	<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Preview</button>
		        </td>
		      </tr>
    		@endforeach
    	@endif
      
      
    </tbody>
  </table>
</div>



 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        	<embed id="documentcontent" src="{{URL::asset('assets/jasper/pdf/Blank_A4.pdf')}}" type="application/pdf" class="embed_pdf">
        </div>
      
      </div>
      
    </div>
  </div>



</body>
</html>
