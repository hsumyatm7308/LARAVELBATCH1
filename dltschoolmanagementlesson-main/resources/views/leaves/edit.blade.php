@extends('layouts.adminindex')
@section('caption','Edit Post')
@section('content')

    <!-- Start Page Content Area -->

    <div class="container-fluid">

        <div class="col-md-12">

        <form action="/leaves/{{$leave->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">


                <div class="col-md-4">
                    <div class="row">

                        <div class="col-md-12 form-group mb-3">

                            <div class="row">
                                <div class="col-md-6 text-sm-center">
                                    <img src="{{asset($leave->image)}}" width="200" alt="{{$leave->title}}"  />
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="gallery"><span>Choose Images</span></label>
                                    <input type="file" name="image" id="image" class="form-control form-control-sm rounded-0" value="{{old('image',$leave->image)}}" hidden />
                                </div>
                            </div>

                            
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="startdate">Start Date <span class="text-danger">*</span></label>
                            <input type="date" name="startdate" id="startdate" class="form-control form-control-sm rounded-0" value="{{old('startdate',$leave->startdate)}}" />
                                {{-- @error('startdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="enddate">End Date <span class="text-danger">*</span></label>
                            <input type="date" name="enddate" id="enddate" class="form-control form-control-sm rounded-0" value="{{old('enddate',$leave->enddate)}}" />
                                {{-- @error('enddate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                        </div>

                    </div>

                    
                    


                </div>

                <div class="col-md-8">

                    <div class="row">

                        
                        <div class="col-md-12 form-group mb-3">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" placeholder="Enter Post Title" value="{{old('title',$leave->title)}}" />
                                {{-- @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                        </div>


                        <div class="col-md-6 form-group mb-3">
                            <label for="post_id">Tag <span class="text-danger">*</span></label>
                            <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                                @foreach($posts as $id=>$title)    
                                    <option value="{{$id}}"
                                        @if($id === $leave['post_id'])
                                            selected
                                        @endif
                                    >{{$title}}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="col-md-6 form-group mb-3">
                            <label for="tag">Tag <span class="text-danger">*</span></label>
                            <select name="tag" id="tag" class="form-control form-control-sm rounded-0">
                                @foreach($tags as $id=>$name)    
                                    <option value="{{$id}}"
                                        @if($id === $leave['tag'])
                                            selected
                                        @endif
                                    >{{$name}}</option>
                                @endforeach
                                
                            </select>
                        </div>

                        <div class="col-md-12 form-group mb-3">
                            <label for="content">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" class="form-control form-control-sm rounded-0" rows="5" placeholder="Say Something...">{{old('content',$leave->content)}}</textarea>
                                {{-- @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror --}}
                        </div>


                    
                        <div class="col-md-12 d-flex justify-content-end align-items-end">
                            <a href="{{route('leaves.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Update</button>
                        </div>

                    </div>

                </div>

                
            </div>

        </form>


        </div>

    </div>


	<!-- End Page Content Area -->
@endsection

@section('css')

    {{-- summernote css1 js1 --}}
    <link href="{{asset('assets/libs/summernote-0.8.18-dist/summernote-lite.min.css')}}" rel="stylesheet" type="text/css" />
    

    <style type="text/css">
        .gallery{
                width: 100%;
                height: 100%;
                background-color: #eee;
                color: #aaa;

                display:flex;
                justify-content:center;
                align-items:center;

                text-align: center;
                padding: 10px;
            }


            .gallery.removetext span{
                display: none;
            }


            .gallery img{
                width: 100px;
                height: 100px;
                border:2px dashed #aaa;
                border-radius: 10px;
                object-fit: cover;

                padding: 5px;
                margin:0 5px;
            }
    </style>
@endsection

@section('scripts')

{{-- summernote css1 js1 --}}
<script src="{{asset('assets/libs/summernote-0.8.18-dist/summernote-lite.min.js')}}" type="text/javascript"></script>


<script type="text/javascript">

$(document).ready(function(){

    // Start Single Image Preview 
    var previewimages = function(input,output){
        // console.log(input,output);

        if(input.files){

            var totalfiles = input.files.length;
            // console.log(totalfiles);

            if(totalfiles > 0){
                $(output).addClass("removetext");
            }else{
                $(output).removeClass("removetext");
            }

            for(var x=0; x < totalfiles; x++){
                // console.log(x);

                var filereader = new FileReader();
                filereader.readAsDataURL(input.files[x]);

                filereader.onload = function(e){
                    $(output).html('');
                    $($.parseHTML('<img>')).attr('src',e.target.result).appendTo(output);
                }

            }

        }


    }


    $("#image").change(function(){

        previewimages(this,"label.gallery");

    });
    // End Single Image Preview 


    // Start text editor for content 
    $('#content').summernote({
        placeholder: 'Say Something...',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link']]
        ]
      });

    // End text editor for content 



    // Start Day Action
    $('.dayactions').click(function(){

        var checkboxs = $("input[type='checkbox']");
        // console.log(checkboxs);

        var checked = checkboxs.filter(':checked').map(function(){
            // return this.value;
            $(this).attr('name','newday_id[]');
        });


        var unchecked = checkboxs.not(':checked').map(function(){
            // return this.value;
            $(this).attr('name','oldday_id[]');
        });


        // check or uncheck 
        // if($(this).prop('checked')){
        //     // console.log('yes');
        //     console.log(checked);
        // }else{
        //     // console.log('no');
        //     console.log(unchecked);
        // }

    });
    
    // End Day Action


    



    
});

</script>
@endsection