@extends('layouts.adminindex')
@section('caption',"Edit announcement")
@section('content')

<!--Start Page Content Area-->

<div class="container-fluid">

    <div class="col-md-12">

        <form action="/announcements/{{$announcement->id}}" method="announcement" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-4">

                    <div class="row">

                        <div class="col-md-12 form-group mb-3">

                            <div class="row">

                                <div class="col-md-6 text-sm-center">
                                    <img src="{{asset($announcement->image)}}" width="200" alt="{{$announcement->title}}" />
                                </div>

                                <div class="col-md-6">
                                    <label for="image" class="gallery">Choose Image</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control form-control-lg rounded-0" placeholder="Enter your image"
                                        value="{{$announcement->image}}" hidden />
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

                <div class="col-md-8">

                    <div class="row">

                        <div class="col-md-6 form-group mb-3">
                            <label for="title"> Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control form-control-sm rounded-0"
                                placeholder="Enter your Title name" value="{{$announcement->title}}" />
                        </div>

                       
                      
                        <div class="col-md-6 form-group">

                            <label for="post_id"> Class <span class="text-danger">*</span>
                            </label>

                            <select name="post_id" id="post_id" class="form-control form-control-sm rounded">

                                @foreach($posts as $id=>$title)
                                <option value="{{$id}}" @if($id = $announcement['post_id']) selected @endif>
                                    {{$title}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="col-md-12 form-group mb-3">

                            <label for="content"> Content <span class="text-danger">*</span>
                            </label>

                            <textarea name="content" id="content" class="form-control form-control-lg rounded-0"
                                rows="5" placeholder="Say Something...">{{$announcement->content}}</textarea>

                        </div>


                    

                        <div class="col-md-3 d-flex justify-content-end align-items-end">

                            <a href="{{route('announcements.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a>

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
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style type="text/css">
    .gallery {
        width: 100%;
        height: 100%;
        background-color: #eee;
        color: #aaa;
        text-align: center;
        padding: 10px;
        margin: auto;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .removetext span {
        display: none;
    }

    .gallery img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 2px dashed #aaa;
        border-radius: 10px;
        padding: 5px;
        margin: 0 5px;
    }
</style>
@endsection

@section('script')
// summernote css1 js1
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script type="text/javascript">


    $(document).ready(function () {


        //Start Single Image Preview
        var previewimages = function (input, output) {
            // console.log(input.files);

            if (input.files) {
                var totalfiles = input.files.length;
                // console.log(totalfiles);

                if (totalfiles > 0) {
                    $('.gallery').addClass('removetext');
                } else {
                    $(".gallery").removeClass('removetext');
                }

                for (var i = 0; i < totalfiles; i++) {
                    var filereader = new FileReader();

                    filereader.onload = function (e) {
                        $(output).html("");
                        $($.parseHTML("<img>")).attr("src", e.target.result).appendTo(output);
                    }
                    filereader.readAsDataURL(input.files[i]);
                }
            }
        };

        $("#image").change(function () {
            previewimages(this, ".gallery");
        })
        //End Single Image Preview

        //Start Day Action dayactions 
        $(".dayactions").click(function () {

            var checkboxs = $("input[type='checkbox']");
            // console.log(checkboxs);

            var checked = checkboxs.filter(":checked").map(function () {
                // return this.value;
                $(this).attr('name', "newday_id[]");
            });

            var unchecked = checkboxs.not(":checked").map(function () {
                // return this.value;
                $(this).attr('name', 'oldday_id[]');
            });

            //check or uncheck
            //prop() function
            // if($(this).prop("checked")){
            //     // console.log("Yes");
            //     console.log(checked);
            // }else{
            //     // console.log("No");
            //     console.log(unchecked);
            // }

        });
        //End Day Action dayactions

          // texteditoer for content
    $('#content').summernote({
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

    });

</script>

@endsection