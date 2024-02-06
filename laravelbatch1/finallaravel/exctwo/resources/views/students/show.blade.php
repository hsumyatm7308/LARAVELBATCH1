@extends('layouts.adminindex')
@section('caption',"Student Show")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">  
        
            <a href="javascript:void(0);" id="btn-back" class="btn btn-secondary btn-sm rounded-0 mb-3">Back</a>
            <a href="{{route('students.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>
        <hr/>

        <div class="row">
            <div class="col-md-4 col-lg-3 mb-2">

                <h6>Info</h6>

                <div class="card  border-0 rounded-0 shadow">
                  



               

                    <div class="card-body">

                        <div class="d-flex flex-column align-items-center mb-3">
                            <div class="h5 mb-1">{{$student->firstname }} {{$student->lastname}}</div>
                            <div class="text-muted">
                                <span>{{$student->regnumber}}</span>
                            </div>
                        </div>

                        <div class="w-100 d-flex flex-row justify-content-between mb-3">
                            <button type="button" class="w-100 btn btn-primary btn-sm rounded-0 me-2">Like</button>
                            <button type="button" class="w-100 btn btn-primary btn-sm rounded-0 outline-primary">Follow</button>
                        </div>
    
                        <div class="mb-5">
                            <div class="row g-0 mb-2">
                                <div class="col-auto">

                                    <i class="fas fa-user"> </i>

                                </div>
                                <div class="col ps-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="">Status</div>
                                        </div>
                                        <div class="col-auto">
                                            <div>{{ optional($status)->name }}</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row g-0 mb-2">
                                <div class="col-auto">

                                    <i class="fas fa-user"> </i>

                                </div>
                                <div class="col ps-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="">Autthorize</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-sm"></i>
                                            <span>{{$student["user"]["name"]}}</span>                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row g-0 mb-2">
                                <div class="col-auto">

                                    <i class="fas fa-user"> </i>

                                </div>
                                <div class="col ps-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="">Created</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-alt fa-sm"></i>
                                            <span>{{date('d M y',strtotime($student->created_at))}} | {{date('h:i:s A',strtotime($student->created_at))}}</span>                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row g-0 mb-2">
                                <div class="col-auto">

                                    <i class="fas fa-user"> </i>

                                </div>
                                <div class="col ps-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="">Updated</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-edit fa-sm"></i>
                                            <span>{{date('d M y h:i:s A',strtotime($student->updated_at))}}</span>                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="mb-5">

                            <p class="text-small text-muted text-uppercase mb-2">Contact Info</p>
                            <div class="row g-0 mb-2">
                                <div class="col-auto me-2">
                                    <i class="fas fa-info"> </i>
                                    <div class="col">Simple Data</div>    
                                </div>
                            </div>

                            <div class="row g-0 mb-2">
                                <div class="col-auto me-2">

                                    <i class="fas fa-info"> </i>

                                    <div class="col">Simple Data</div>

                                  
                                    
                                </div>
                              

                            </div>

                            <div class="row g-0 mb-2">
                                <div class="col-auto me-2">

                                    <i class="fas fa-info"> </i>

                                    <div class="col">Simple Data</div>

                                  
                                    
                                </div>
                              

                            </div>


                        </div>


                          

                    </div>



                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$student["user"]["name"]}}</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($student->created_at))}} | {{date('h:i:s A',strtotime($student->created_at))}}</span>
                                <br/>
                                {{-- <i class="fas fa-edit fa-sm"></i>
                                <span>{{$student->updated_at}}</span>
                                <br/> --}}
                                <i class="fas fa-edit fa-sm"></i>
                                <span>{{date('d M y h:i:s A',strtotime($student->updated_at))}}</span>
                            </div>
                        </div>
                    </div>


            
                </div>
            </div>

       
            <div class="col-md-8 col-lg-9">
                <div class="card border-0 rounded-0 shadow mb-4">
                    <div class="card-body d-flex flex-wrap gap-3">

                        <div class="Accordion">
                            <h1 class="acctitle shown">Email</h1>
                            <div class="acccontent">
                                <div class="col-md-12">
                                    <form action="{{route('students.mailbox')}}" method="POST" class="mt-3">
                                        @csrf 
                                        <div class="row">
                                            <div class="col-md-6 form-group mb-3">
                                                <input type="email" name="cmpemail" id="cmpemail" class="form-control form-control-sm border-0 rounded-0" placeholder="To:" value="{{$student->user['email']}}" readonly/>
                                            </div>
                                            <div class="col-md-6 form-group mb-3">
                                                <input type="text" name="cmpsubject" id="cmpsubject" class="form-control form-control-sm border-0 rounded-0" placeholder="Subject:"/>
                                            </div>
        
                                            <div class="col-md-12 form-group mb-3">
                                                <textarea type="text" name="cmpcontent" id="cmpcontent" class="form-control form-control-sm border-0 rounded-0" placeholder="Your message here... "> </textarea>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-secondary btn-sm rounded-0" rows="3" style="resize: none" >Send</button>
                                            </div>
                                            
                                        </div>
        
                                    </form>
        
                                </div>
        
                            </div>
        
                        
                        </div>
                    

                    </div>
                   
               </div>

              

           
               <h6>Enrolls</h6>
               <div class="card border-0 rounded-0 shadow mb-4">
                    <div class="card-body d-flex flex-wrap gap-3">

                        @foreach($enrolls as $enroll)
                        <div class="border shadow p-3 mb-3 enrollboxes">
                            <a href="javascript:void(0)">{{$enroll->post['title']}}</a>
                            {{-- <div class="text-muted">{{$enroll->stage['name']}}</div> --}}
                            <div class="text-muted">{{date('d M y',strtotime($student->created_at))}} | {{date('h:i:s A',strtotime($student->created_at))}}{{date('d M y',strtotime($student->created_at))}} | {{date('h:i:s A',strtotime($student->created_at))}}</div>
                            <div class="text-muted">{{date('d M y h:i:s A',strtotime($student->updated_at))}} | time</div>
                            {{-- <div class="mt-1" title="{{$enroll->remark}}">{{Str::limit($enroll->remark,20)}}</div> --}}
                            {{-- <div class="mt-1" title="{{$enroll->remark}}">{{Str::limit($enroll->remark,20,'...')}}</div> --}}
                            {{-- <div class="mt-1" title="{{$enroll->remark}}">{{Str::of($enroll->remark)->limit(20)}}</div> --}}
                            {{-- <div class="mt-1" title="{{$enroll->remark}}">{{Str::of($enroll->remark)->words(4)}}</div> --}}
                            {{-- <div class="mt-1" title="{{$enroll->remark}}">{{Str::of($enroll->remark)->words(4,'>>>')}}</div> --}}
                            <div class="mt-1" title="{{$enroll->remark}}">{{Str::words($enroll->remark,4,'...')}}</div>

                            

                        </div>
                        @endforeach

                    </div>
                   
               </div>

               <h6>Additional Info</h6>

               <div class="card-body">

               <ul class="nav">
                <li class="nav-item">
                    <button type="button" id="autoclick" class="tablinks" onclick="gettab(event, 'follower')">Follower</button>
                </li>
    
                <li class="nav-item">
                    <button type="button" class="tablinks" onclick="gettab(event, 'following')">Following</button>
                </li>
    
                <li class="nav-item">
                    <button type="button" class="tablinks" onclick="gettab(event, 'liked')">Like</button>
                </li>
    
                <li class="nav-item">
                    <button type="button" class="tablinks" onclick="gettab(event, 'remark')">Remark</button>
                </li>
               </ul>
    
               <div class="tab-content">
    
                <div id="follower" class="tab-pane">
                    <h3>This is Home information</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
    
                <div id="following" class="tab-pane">
                    <h3>This is Profile information</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
    
                <div id="liked" class="tab-pane">
                    <h3>This is Contact information</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
    
                <div id="remark" class="tab-pane">
                    <h3>This is Settings information</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                        make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more
                        recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>

                <div id="remark" class="tab-pane">
                    <p>{{$student->remark}}</p>
                </div>

               </div>
        </div>



            </div>
        </div>
       
        </div>

    </div>
               
<!--End Page Content Area-->

@endsection

{{-- Str = string --}}
{{-- Str::limit($student -> remark,10) --}}

@section('css')
<style>

    /* Start Tag box  */
.nav {
    display: flex;
    background-color: #f1f1f1;

    padding: 0;
    margin: 0;
}

.nav .nav-item {
    list-style-type: none;
}

.nav .tablinks {
    border: none;
    padding: 15px 20px;
    cursor: pointer;

    transition: background-color .3s ease-in;
}

.nav .tablinks:hover {
    background-color: #f3f3f3;
}

.nav .tablinks.shown  {
    color: blue;
}

.tab-content {
    background-color: #ccc;
}

.tab-pane {
    padding: 5px 15px;

    display: none;
}

.btn-close {
    font-size: 30px;
    float: right;
    cursor: pointer;

    transition: color .3s ease-in;
}

.btn-close:hover {
    color: red;
}
/* End Tag box  */

/* start accodian  */
body {
    font-family: sans-serif;
}

.Accordion {
    width: 100%;
}

.acctitle {

    font-size: 14px;
    padding: 15px;
    margin: 0;
    user-select: none;
    cursor: pointer;
    position: relative;
}


/* .active.acctitle::after{
    content: '\f068';

} */

.active::after {
    content: '\f068';
}

.acctitle::after {
    content: '\f067';
    /* + */
    font-family: "Font Awesome 5 Free";
    /* position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%); */
    float: right;
}

.acccontent {
    height: 0;
    background-color: #f4f4f4f4;
    text-indent: 50px;
    text-align: center;
    font-size: 14px;
    padding: 0 20px;
    overflow: hidden;
    transition: height 0.3s ease-in-out;
}
/* end accordion  */
</style>
@endsection
 
@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>

  <script type="text/javascript">
//   Start Back Btn 
     const getbtnback = document.getElementById('btn-back');
     getbtnback.addEventListener('click',function(){
        window.history.back();
     })
//  End Back Btn 


// Start Tag Box 

var gettablinks = document.getElementsByClassName("tablinks"); // HTML Collection
var gettabpanes = document.getElementsByClassName("tab-pane");
// console.log(gettablinks);

var tabpanes = Array.from(gettabpanes);

function gettab(evn, linkid) {
  tabpanes.forEach(function (tabpane) {
    tabpane.style.display = "none";
  });

  for (var x = 0; x < gettablinks.length; x++) {
    gettablinks[x].className = gettablinks[x].className.replace(" shown", "");

  }

  document.getElementById(linkid).style.display = "block";

  // evn.target.className += " shown";
  // evn.target.className = evn.target.className.replace(
  //   "tablinks",
  //   "tablinks shown"
  // );
  // evn.target.classList.add("shown");

  // console.log(evn);
  // console.log(evn.target);
  // console.log(evn.currentTarget);
  evn.currentTarget.className += " shown";
}

document.getElementById("autoclick").click();

// End Tag Box 

// start accodian 
 var getacctitles = document.getElementsByClassName("acctitle");
console.log(getacctitles); //HtML Collection
var getacccontents = document.querySelectorAll('.acccontent');
console.log(getacccontents) //Note List

for (var i = 0; i < getacctitles.length; i++) {
    // console.log(i)
    getacctitles[i].addEventListener("click", function(e) {
        // console.log(e.target)

        this.classList.toggle("shown");
        var getcontent = this.nextElementSibling;
        // console.log(getcontent);

        if (getcontent.style.height) {
            getcontent.style.height = null;
        } else {
            getcontent.style.height = getcontent.scrollHeight + "px";
            console.log(getcontent.scrollHeight)
        }

    })

    if (getacctitles[i].classList.contains('shown')) {
        getacccontents[i].style.height = getacccontents.scrollHeight + "px";
    }
}




// end accodion 
  </script>
@endsection

