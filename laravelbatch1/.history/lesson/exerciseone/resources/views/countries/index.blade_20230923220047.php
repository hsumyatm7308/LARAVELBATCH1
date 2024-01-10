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
        @foreach($countries as $country)
        <tr>
            <td>{{$country->id}}</td>
            <td>{{$country->name}}</td>
            <td>{{$country->capital}}</td>
            <td>{{$country->currency}}</td>
            <td>{{$country->userid}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>
            <a href="#" class="text-info"><i class="fas fa-pen"></i></a>
            <a href="#" class="text-info"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>

@section('footer')

