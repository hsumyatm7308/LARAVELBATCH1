@extends('layouts.adminindex')
@section('caption',"leave Show")
@section('content')

<!--Start Page Content Area-->

<div class="container-fluid">

    <div class="col-md-12">

        <a href="{{route('leaves.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>


        <hr />

        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header">

                        <h5 class="card-title">{{$leave->title}} </h5>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item fw-bold"><img src="{{asset($leave -> image)}}" class="rounded-circle"
                                width="200" height="200" height="20" /></li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$leave["tags"]}}</span>
                                <br />
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$leave["posts"]}}</span>
                                <br />
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$leave["user"]["name"]}}</span>
                            </div>
                            <div class="col-md-6">
                              
                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($leave->created_at))}} | {{date('h:i:s
                                    A',strtotime($leave->created_at))}}</span>
                                <br />

                                <i class="fas fa-edit fa-sm"></i>
                                <span>{{date('d M y h:i:s A',strtotime($leave->updated_at))}}</span>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card-box rounded-0">
                    <ul class="list-group text-center rounded-0">
                        <li class="list-group-item active">Information</li>
                    </ul>
                    {{-- start remark --}}
                    <table class="table table-sm table-border">
                        <thead>
                            <tr>
                                <th>Info...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{!! $leave->content !!}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- end remark --}}
                </div>

               

            </div>
        </div>

    </div>

</div>

<!--End Page Content Area-->

<!--start modal area-->
<!--start create modal-->

<!--end create modal-->
<!--end modal area-->

@endsection

@section('css')
<style type="text/css">
    /* start comment  */
    .chat-box {
        height: 200px;
        overflow-y: scroll;
    }

    /* end comment */

    /* start image preview */
    .gallery {
        width: 100%;

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

    /* end image preview */
</style>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        // console.log("hi")

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

    });

</script>

@endsection