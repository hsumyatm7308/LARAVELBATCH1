@extends('layouts.adminindex')
@section('caption','Edit City')
@section('content')

<!--Start Page Content Area-->
<div class="container-fluid">

    <div class="col-md-12">   
        
        <form action="/cities/{{$city->id}}" method="POST" enctype="multipart/form-data">
            {{-- 419 PAGE EXPIRED (csrf = Cross-site request forgery) --}}
       
            {{-- {{ csrf_field() }}  go to store --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            @csrf
            @method('PUT')
       
           <div class="row">
               <div class="col-md-4 form-group mb-3">
                   <label for="regnumber">Regnumber<span class="text-danger">*</span></label>
                   <input type="text" name="regnumber" id="regnumber" class="form-control form-control-lg rounded-0" placeholder="Enter your Regnumber" value="{{$city->regnumber}}" />
               </div>
       
               <div class="col-md-4 form-group mb-3">
                   <label for="city">City <span class="text-danger">*</span></label>
                   <input type="text" name="city" id="city" class="form-control form-control-lg rounded-0" placeholder="Enter your City" value="{{$city->city}}"  />
               </div>
       
       
               <div class="col-md-12 form-group mb-3">
                   <label for="remark">Remark</label>
                   <textarea name="remark" id="remark" class="form-control rounded-0" rows="5" placeholder="Enter your Remark">{{$city->remark}}</textarea>
               </div>
       
              
               <div class="col-md-12">
                   <div class="d-flex justify-content-end">
                       <a href="{{route('cities.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                       
                       <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Update</button>
                   </div>
               </div>
           
       
       
           </div>

       </form>

    </div>

</div>
<!--End Page Content Area-->
@endsection
