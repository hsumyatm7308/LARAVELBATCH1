@extends('layouts.adminindex')
@section('caption',"Create Role")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">   
            
            <form action="/roles" method="POST" enctype="multipart/form-data">
                {{-- 419 PAGE EXPIRED (csrf = Cross-site request forgery) --}}
           
                {{-- {{ csrf_field() }}  go to store --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                @csrf
                @method('POST')
           
               <div class="row">

                <div class="col-md-4">

                    <label for="image" class="gallery">
                        
                            <span>Choose Images</span>
                       
                    </label>

                </div>

                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                            <label for="image">Image </label>
                            <input type="file" name="image" id="image" class="form-control form-control-lg rounded-0" placeholder="Enter your image" value="{{old('image')}}"  />
                        </div>
    
                       <div class="col-md-6 form-group mb-3">
                           <label for="name"> Name <span class="text-danger">*</span></label>
                           <input type="text" name="name" id="name" class="form-control form-control-lg rounded-0" placeholder="Enter your Role name" value="{{old('firstname')}}" />
                       </div>

                       <div class="col-md-6 form-group">

                            <label for="status_id"> Status <span class="text-danger">*</span>
                            </label>

                            <select name="status_id" id="status_id" class="form-control form-control-sm rounded">
                                
                                @foreach($statuses as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>                              
                                @endforeach

                            </select>

                        </div>
                             
                       <div class="col-md-6 d-flex justify-content-end align-items-end">
                           <div>
                               <a href="{{route('roles.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                               <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Submit</button>
                           </div>
                       </div>

                    </div>                

                </div>
    
               </div>

           </form>

        </div>

    </div>
               
<!--End Page Content Area-->

@endsection

@section('css')
<style type="text/css">

.gallery{
            width:100%;
            height:100%;
            background-color:#eee;
            color:#aaa;
            text-align:center;
            padding:10px;
            margin:auto;

            display:flex;
            justify-content:center;
            align-items:center;
        }

        .removetext span{
            display:none;
        }

        .gallery img{
            width:100px;
            height:100px;
            object-fit:cover;
            border:2px dashed #aaa;
            border-radius:10px;
            padding:5px;
            margin:0 5px;
        }

</style>
@endsection 

@section('script')
<script type="text/javascript">


$(document).ready(function(){
    // console.log("hi")

    var previewimages = function(input,output){
        // console.log(input.files);

        if(input.files){
            var totalfiles = input.files.length;
            // console.log(totalfiles);

            if(totalfiles > 0){
                $('.gallery').addClass('removetext');
            }else{
                $(".gallery").removeClass('removetext');
            }

            for(var i = 0 ; i < totalfiles ; i++){
                var filereader = new FileReader();

                filereader.onload = function(e){
                    $(output).html("");
                    $($.parseHTML("<img>")).attr("src",e.target.result).appendTo(output);
                }
                filereader.readAsDataURL(input.files[i]);
            }
        }
    };

    $("#image").change(function(){
        previewimages(this,".gallery");
    })

});

</script>

@endsection