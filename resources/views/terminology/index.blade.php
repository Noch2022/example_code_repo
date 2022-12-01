@extends('layouts.master')
@section('body_content')
        <a href="/terminology/create" class="btn btn-primary">Add</a>
    @if(isset($items) && sizeof($items) > 0)
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>TerminologyCode</th>
                    <th>Child</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $index=>$item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->terminology_code}}</td>
                    <td>
                        {{-- {{$item->parent_id}} --}}
                        @php 
                            $count = \App\Models\Terminology::countTerminologyChildByParentCode($item->terminology_code);
                        @endphp
                        <a class="btn btn-xs btn-info" href="/terminology/{{$item->id}}">{{$count}}</a>
                    </td>
                    <td>
                        <a href="/terminology/{{$item->id}}" class="btn btn-info">View</a>
                        <a href="/terminology/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection