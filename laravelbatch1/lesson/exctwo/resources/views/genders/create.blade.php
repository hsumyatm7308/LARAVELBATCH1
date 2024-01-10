@extends('layouts.adminindex')
@section('caption','Create Gender')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">
        <form action="/genders" method="POST" enctype="multipart/form-data">
        
            {{csrf_field()}}
            {{method_field('POST')}}

            <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for="gender">Gender <span class="text-danger">*</span></label>
                    
                    <input type="text" name="gender" id="gender" class="form-control form-control-lg rounded-0" placeholder="Enter your Gender" value="{{old('gender')}}" />
                </div>
        
                <div class="col-md-6 form-group mb-3">
                 <label for="regnumber">Regnumber</label>
                 <input type="text" name="regnumber" id="regnumber" class="form-control form-control-lg rounded-0" placeholder="Enter your regnumber" value="{{old('regnumber')}}" />
             </div>
               
        
                <div class="col-md-12 form-group mb-3">
                    <label for="remark">Remark</label>
                    <textarea name="remark" id="remark" class="form-control rounded-0" rows="5" placeholder="Enter your Remark">{{old('remark')}}</textarea>
                </div>
        
               
                <div class="col-md-12">
                    <div class="d-flex justify-content-end">
                        <a href="route{{'genders.index'}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                        <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection 