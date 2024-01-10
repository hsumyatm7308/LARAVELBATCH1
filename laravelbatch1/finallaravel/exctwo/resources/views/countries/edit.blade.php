@extends('layouts.adminindex')
@section('caption','Edit Country')
@section('content')

<!--Start Page Content Area-->
<div class="container-fluid">

    <div class="col-md-12">   
        
        <form action="/countries/{{$country->id}}" method="POST" enctype="multipart/form-data">
            {{-- 419 PAGE EXPIRED (csrf = Cross-site request forgery) --}}
       
            {{-- {{ csrf_field() }}  go to store --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            @csrf
            @method('PUT')
       
           <div class="row">
               <div class="col-md-4 form-group mb-3">
                   <label for="regnumber">Regnumber<span class="text-danger">*</span></label>
                   <input type="text" name="regnumber" id="regnumber" class="form-control form-control-lg rounded-0" placeholder="Enter your Regnumber" value="{{$country->regnumber}}" />
               </div>
       
               <div class="col-md-4 form-group mb-3">
                   <label for="country">country <span class="text-danger">*</span></label>
                   <input type="text" name="country" id="country" class="form-control form-control-lg rounded-0" placeholder="Enter your Country" value="{{$country->country}}"  />
               </div>
       
       
               <div class="col-md-12 form-group mb-3">
                   <label for="remark">Remark</label>
                   <textarea name="remark" id="remark" class="form-control rounded-0" rows="5" placeholder="Enter your Remark">{{$country->remark}}</textarea>
               </div>
       
              
               <div class="col-md-12">
                   <div class="d-flex justify-content-end">
                       <a href="{{route('countries.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                       
                       <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Update</button>
                   </div>
               </div>
           
       
       
           </div>

       </form>

    </div>

</div>
<!--End Page Content Area-->

@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
   
@endsection

@section('script')
// summernote css1 js1
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
      // texteditoer for content
      $('#remark').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
@endsection