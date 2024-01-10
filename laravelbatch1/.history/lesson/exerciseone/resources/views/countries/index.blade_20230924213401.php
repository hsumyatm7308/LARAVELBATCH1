@extends('layouts.app')

@section('title','Index Page')
@section('content')

<h1>Index Page</h1>

<div class="col-md-12">
    <a href="{{route('countries.create')}}" class="btn btn-primary btn-sm rounded-0">Create New Country</a>
</div>

<div class="col-md-12">

<table class="table table-sm table-hover border">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Capital</th>
            <th>Currency</th>
            <th>User ID</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action </th>
        </tr>

    </thead>
    <tbody>
        @foreach($countries as $idx=>$country)
        <tr>
            <td>{{++$idx}}</td>
            <td><a href="{{route('countries.show',$country->id)}}">{{$country->name}}</a></td>
            <td>{{$country->capital}}</td>
            <td>{{$country->currency}}</td>
            <td>{{$country->userid}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
            <a href="{{route('countries.edit',$country->id)}}" class="text-info m-3"><i class="fas fa-pen"></i></a>
            <!-- <a href="{{route('countries.delete',$country->id)}}" class="text-danger"><i class="fas fa-trash-alt"></i></a> -->
             <form action="{{route('countries.destroy',$country->id)}}" method="PPST">
                @csrf 
                @method("DELETE")
            <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>

             </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>

@section('footer')

