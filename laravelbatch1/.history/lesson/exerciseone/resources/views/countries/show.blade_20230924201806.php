@extends('layouts.app')

@section('title','Show Page')
@section('content')

<h1>Show Page</h1>

<div class="col-md-12">
    <ul class="list-group">
    <li class="list-group-item">Cuntry Name = {{$countries=>name}}</li>
    <li class="list-group-item">Capital Name = {{$countries=>capital}}</li>
    <li class="list-group-item">Currency = {{$countries=>currency}}</li>
    <li class="list-group-item">Cuntry Name = {{$countries=>name}}</li>

    </ul>

</div>


@section('footer')

