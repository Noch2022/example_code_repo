@extends('layouts.master')
@section('body_content')
        <a href="/terminology" class="btn btn-info">Back</a>
    @if(isset($subItems) && sizeof($subItems) > 0)
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>TerminologyCode</th>
                    <th>ParentID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($subItems as $index=>$subItem)
                <tr>
                    <td>{{$subItem->id}}</td>
                    <td>{{$subItem->name}}</td>
                    <td>{{$subItem->description}}</td>
                    <td>{{$subItem->terminology_code}}</td>
                    <td>{{$subItem->parent_id}}</td>
                    <td>
                        <a href="/terminology/{{$subItem->id}}" class="btn btn-info">View</a>
                        <a href="/terminology/{{$subItem->id}}/edit" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection