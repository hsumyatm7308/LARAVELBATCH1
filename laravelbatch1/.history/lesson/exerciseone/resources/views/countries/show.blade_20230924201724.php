@extends('layouts.app')

@section('title','Show Page')
@section('content')

<h1>Show Page</h1>

<div class="col-md-12">
    <ul class="list-group">
        <li class="list-group-item">{{$countries=>name}}</li>

    </ul>

</div>


@section('footer')

