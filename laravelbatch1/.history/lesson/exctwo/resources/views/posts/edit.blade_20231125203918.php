@extends('layouts.adminindex')
@section('caption',"Edit Post")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">   
            
            <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
           
               <div class="row">

                <div class="col-md-4">

                   <div class="row">

                    <div class="col-md-12 form-group mb-3">

                        <div class="row">

                            <div class="col-md-6 text-sm-center">
                                <img src="{{asset($post->image)}}" width="200" alt="{{$post->title}}" />
                            </div>

                            <div class="col-md-6">
                                <label for="image" class="gallery">Choose Image</label>
                                <input type="file" name="image" id="image" class="form-control form-control-lg rounded-0" placeholder="Enter your image" value="{{$post->image}}" hidden  />
                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 form-group mb-3">
                        <label for="startdate"> Start Date <span class="text-danger">*</span></label>
                        <input type="date" name="startdate" id="startdate" class="form-control form-control-sm rounded-0" placeholder="Enter your startdate" value="{{$post->startdate}}" />
                    </div>

                    <div class="col-md-6 form-group mb-3">
                        <label for="enddate">End Date <span class="text-danger">*</span></label>
                        <input type="date" name="enddate" id="enddate" class="form-control form-control-sm rounded-0" placeholder="Enter your enddate" value="{{$post->enddate}}" />
                    </div>

                    <div class="col-md-6 form-group mb-3">
                        <label for="starttime">Start Time <span class="text-danger">*</span></label>

                        <input type="time" name="starttime" id="starttime" class="form-control form-control-sm rounded-0" placeholder="Enter your starttime" value="{{$post->starttime}}" />
                    </div>

                    <div class="col-md-6 form-group mb-3">
                        <label for="endtime">End Time <span class="text-danger">*</span></label>

                        <input type="time" name="endtime" id="endtime" class="form-control form-control-sm rounded-0" placeholder="Enter your endtime" value="{{$post->endtime}}" />
                    </div>
                    
                   </div>
     
                </div>

                <div class="col-md-8">

                    <div class="row">

                       <div class="col-md-12 form-group mb-3">
                           <label for="title"> Title <span class="text-danger">*</span></label>
                           <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0" placeholder="Enter your Title name" value="{{$post->title}}" />
                       </div>

                       <div class="col-md-6 form-group mb-3">

                        <label for="type_id"> Type <span class="text-danger">*</span>
                        </label>

                        <select name="type_id" id="type_id" class="form-control form-control-sm rounded">
                            
                            @foreach($types as $type)
                            <option value="{{$type->id}}"  

                                @if($type['id'] === $post['type_id'])
                                    selected
                                @endif

                            >{{$type->name}}</option>                              
                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-6 form-group mb-3">

                        <label for="fee"> Fee <span class="text-danger">*</span>
                        </label>

                        <input type="number" name="fee" id="fee" class="form-control form-control-sm rounded-0" placeholder="Class fee" value="{{$post->fee}}" />

                    </div>

                    <div class="col-md-12 form-group mb-3">

                        <label for="content"> Content <span class="text-danger">*</span>
                        </label>

                        <textarea name="content" id="content" class="form-control form-control-lg rounded-0" rows="5" placeholder="Say Something...">{{$post->content}}</textarea>

                    </div>

                    <div class="col-md-3 form-group">

                        <label for="tag_id"> Tag <span class="text-danger">*</span>
                        </label>

                        <select name="tag_id" id="tag_id" class="form-control form-control-sm rounded">
                            
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}"
                                
                                @if($tag['id'] === $post['tag_id'])
                                selected
                                @endif

                                >{{$tag->name}}</option>                              
                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-3 form-group">

                        <label for="attshow">Show On Attform <span class="text-danger">*</span>
                        </label>

                        <select name="attshow" id="attshow" class="form-control form-control-sm rounded">
                            
                            @foreach($attshows as $attshow)
                            <option value="{{$attshow->id}}"
                                @if($attshow['id'] === $post['attshow'])
                                selected
                                @endif
                            >{{$attshow->name}}</option>                              
                            @endforeach

                        </select>

                    </div>

                       <div class="col-md-3 form-group">

                            <label for="status_id"> Status <span class="text-danger">*</span>
                            </label>

                            <select name="status_id" id="status_id" class="form-control form-control-sm rounded">
                                
                                @foreach($statuses as $status)
                                <option value="{{$status->id}}"
                                    {{($status['id'] === $post['status_id']) ? "selected" : ""}}
                                >{{$status->name}}</option>                              
                                @endforeach

                            </select>

                        </div>
                             
                       <div class="col-md-3 d-flex justify-content-end align-items-end">
                           
                               <a href="{{route('posts.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                               <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Submit</button>
                          
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