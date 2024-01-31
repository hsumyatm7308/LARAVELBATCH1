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


                            <div class="mb-5">

                                   
                                    
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row">
                                            <div class="col">
                                                <div>Authorize</div>
                                            </div>
                                            <div class="col-auto">
                                                <div>{{$leave['user']['name']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row">
                                            <div class="col">
                                                <div>Created</div>
                                            </div>
                                            <div class="col-auto">
                                                <div>{{date('d M Y',strtotime($leave->created_at))}} | {{date('h:i:s A',strtotime($leave->created_at))}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row g-0 mb-2">
                                    <div class="col-auto">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <div class="col ps-3">
                                        <div class="row">
                                            <div class="col">
                                                <div>Updated</div>
                                            </div>
                                            <div class="col-auto">
                                                <div>{{date('d M Y',strtotime($leave->updated_at))}} | {{date('h:i:s A',strtotime($leave->updated_at))}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="col-md-6">
                                {{-- <i class="fas fa-user fa-sm"></i>
                                <span>{{$leave["tags"]}}</span>
                                <br />
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$leave["posts"]}}</span>
                                <br />
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$leave["user"]["name"]}}</span>
 --}}


        
                           
        
        
                                <div class="mb-5">
                                    <p class="text-small text-muted text-uppercase mb-2">Contact Info</p>
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto me-2">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <div class="col ">Sample Data</div>
                                    </div>
                                    
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto me-2">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <div class="col ">Sample Data</div>
                                    </div>
        
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto me-2">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <div class="col ">Sample Data</div>
                                    </div>
        
                                    <div class="row g-0 mb-2">
                                        <div class="col-auto me-2">
                                            <i class="fas fa-info"></i>
                                        </div>
                                        <div class="col ">Sample Date</div>
                                    </div>
        
                                </div>
        
                            </div>
                        
                         
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

       

                <h6>Additional Info</h6>
                <div class="card border-0 rounded-0 shadow mb-4">
                        <ul class="nav"> 
                            <li class="nav-item">
                                <button type="button" id="autoclick" class="tablinks active" onclick="gettab(event,'content')">Content</button>
                            </li>
                         
                        </ul>
                
                        <div class="tab-content">
                
                            <div id="content" class="tab-panel">
                                <p>{!! $leave->content !!}</p>
                            </div>
                
                
                        </div>
    
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




        /* Start Tab Box */
        .nav{
                display: flex;

                padding: 0;
                margin: 0;
            }

            .nav .nav-item{
                list-style-type: none;
            }

            .nav .tablinks{
                border: none;
                outline: none;
                cursor: pointer;

                padding: 14px 16px;

                transition: background-color 0.3s;
            }

            .nav .tablinks:hover{
                background-color: #f3f3f3;
            }

            .nav .tablinks.active{
                color: blue;
            }


            .tab-panel{
                padding: 6px 12px;
                display: none;
            }

        /* End Tab Box */



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




        // Start Tab Box
        let gettablinks = document.getElementsByClassName('tablinks'),
                gettabpanels = document.getElementsByClassName('tab-panel');

            // console.log(gettablinks);
            // console.log(gettablinks[0]);

            // console.log(gettabpanels);

        let tabpanels = Array.from(gettabpanels);
        // console.log(tabpanels);


        function gettab(evn,link){
            // console.log(evn.target);
            // console.log(evn.currentTarget);
            // console.log(link);

            // Remove Active 
            for(var x=0; x < gettablinks.length; x++){
                // console.log(x); //0 to 3

                // remove active 
                gettablinks[x].className = gettablinks[x].className.replace(' active','');
            }

            // Add active 

            // evn.target.className = "tablinks active";
            // evn.target.className += " active";
            // evn.currentTarget.className += " active";
            // evn.target.className = evn.target.className.replace('tablinks','tablinks active');
            evn.target.classList.add('active');

            // Hide Panel 
            tabpanels.forEach(function(tabpanel){
                tabpanel.style.display = "none";
            });

            // Show Panel
            document.getElementById(link).style.display= "block";
        }


        document.getElementById('autoclick').click();
        // End Tab Box
    
</script>

@endsection