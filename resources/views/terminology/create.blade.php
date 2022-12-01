@extends('layouts.master')
@section('body_content')
<form class="form-horizontal" action="/terminology" method="POST">
    {{csrf_field()}}
    <div class="col-lg-6">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Name:</label>
            <div class="col-sm-10">
                <input type="text" required class="form-control" placeholder="Enter name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Terminology Code:</label>
            <div class="col-sm-10">
                <input type="text" required class="form-control" placeholder="Terminology code" name="terminology_code">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Parent:</label>
            <div class="col-sm-10">
                {!! $parentDropDown !!}
            </div>
        </div>            
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Description:</label>
            <div class="col-sm-10">
                <textarea name="description" required class="form-control" rows="5"></textarea>
            </div>
        </div>   
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/terminology" class="btn btn-info">Back</a>
      </div>
    </div>
  </form>
@endsection