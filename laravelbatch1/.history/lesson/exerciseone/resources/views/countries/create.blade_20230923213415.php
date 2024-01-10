@extends('layouts.app')

@section('title')
@section('content')

@section('footer')


<!-- / is indicate to POST  and not includint /   indicates to GET  -->


<form action="/countries" method="POST">
    <!-- csrf = Cross-site request  forgery -->
  <!-- {{ csrf_field() }} -->
  <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
  @csrf 

    <div class="row">


    <div class="col-md-6 form-group mb-3">
        <label for="name">Country Name</label>
        <input type="text" name="name" class="form-control form-control-sm rounded-0">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="capital">Capital</label>
        <input type="text" name="capital" class="form-control form-control-sm rounded-0">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="currency">Currency</label>
        <input type="text" name="currency" class="form-control form-control-sm rounded-0">

    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="user_id">User ID</label>
        <input type="number" name="userid"  id="user_id" class="form-control form-control-sm rounded-0">
    </div>

    <div class="col-md-12">
        <label for="content">Content</label>
        
        <textarea name="content"  id="content" class="form-control form-control-sm rounded-0" rows="3"></textarea>

    </div>


    <div class="col-md-12">
        <div class="d-flex justify-content-end">
            <button>Cancel</button>
            <button>Submit</button>
        </div>
    </div>


    </div>
</form>

