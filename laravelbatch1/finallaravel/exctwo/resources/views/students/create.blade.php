@extends('layouts.adminindex')
@section('caption',"Create Student")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">   
            
            <form action="/students" method="POST" enctype="multipart/form-data">
                {{-- 419 PAGE EXPIRED (csrf = Cross-site request forgery) --}}
           
                {{-- {{ csrf_field() }}  go to store --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                @csrf
                @method('POST')
           
               <div class="row">
                   <div class="col-md-4 form-group mb-3">
                       <label for="firstname">First Name <span class="text-danger">*</span></label>
                       <input type="text" name="firstname" id="firstname" class="form-control form-control-lg rounded-0" placeholder="Enter your first name" value="{{old('firstname')}}" />
                   </div>
           
                   <div class="col-md-4 form-group mb-3">
                       <label for="lastname">Last Name <span class="text-danger">*</span></label>
                       <input type="text" name="lastname" id="lastname" class="form-control form-control-lg rounded-0" placeholder="Enter your Last Name" value="{{old('lastname')}}"  />
                   </div>
           
                   <div class="col-md-4 form-group mb-3">
                       <label for="regnumber">Register Number <span class="text-danger">*</span></label>
                       <input type="text" name="regnumber" id="regnumber" class="form-control form-control-lg rounded-0" placeholder="Enter your Register Number" value="{{old('regnumber')}}"  />
                   </div>
           
                   <div class="col-md-12 form-group mb-3">
                       <label for="remark">Remark</label>
                       <textarea name="remark" id="remark" class="form-control rounded-0" rows="5" placeholder="Enter your Remark">{{old('remark')}}</textarea>
                   </div>
           
                  
                   <div class="col-md-12">
                       <div class="d-flex justify-content-end">
                           <a href="{{route('students.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                           <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Submit</button>
                       </div>
                   </div>
               
           
           
               </div>

           </form>

        </div>

    </div>
               
<!--End Page Content Area-->

@endsection