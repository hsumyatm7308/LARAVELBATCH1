@extends('layouts.adminindex')
@section('caption','Create Student List')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">


    <form action="{{route('students.store')}}" method="POST">

     @csrf 

    <div class="row">


    <div class="col-md- form-group mb-3">
        <label for="firstname">Fee <span class="text-danger">*</span></label>
        <input type="text" name="firstname" class="form-control form-control-sm rounded-0" placeholder="Enter First Name" value="{{old('fee')}}">
    </div>





    <div class="col-md-12">
        <label for="remark">Remark</label>
        
        <textarea name="remark"  id="remark" class="form-control form-control-sm rounded-0" rows="3" placeholder="Say Something...">{{old('remark')}}</textarea>

    </div>


    <div class="col-md-12 mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{route('students.index')}}" class="btn">Cancel</a>
            <button class="btn btn-primary bg-secondary">Submit</button>
        </div>
    </div>


    </div>
</form>



       


    </div>

</div>


@endsection