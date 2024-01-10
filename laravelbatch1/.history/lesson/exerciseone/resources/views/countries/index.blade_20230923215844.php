@extends('layouts.app')

@section('title','Index Page')
@section('content')

<h1>Index Page</h1>

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
        @foreach($countries as $ctry)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->capital}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->name}}</td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>

@section('footer')

