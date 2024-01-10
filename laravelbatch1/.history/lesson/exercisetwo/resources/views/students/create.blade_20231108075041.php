@extends('layouts.adminindex')
@section('caption','Create Student List')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">


    <form action="{{route('students.store')}}" method="POST">

     @csrf 

    <div class="row">


    <div class="col-md-6 form-group mb-3">
        <label for="firstname">First Name <span class="text-danger">*</span></label>
        <input type="text" name="firstname" class="form-control form-control-sm rounded-0" placeholder="Enter First Name">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="lastname">Last Name <span class="text-danger">*</span></label>
        <input type="text" name="lastname" class="form-control form-control-sm rounded-0" placeholder="Enter Last Name">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="currency">Register Number <span class="text-danger">*</span></label>
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
            <a href="{{route('students.index')}}">Cancel</a>
            <button class="bg-secondary">Submit</button>
        </div>
    </div>


    </div>
</form>



       


    </div>

</div>


@endsection