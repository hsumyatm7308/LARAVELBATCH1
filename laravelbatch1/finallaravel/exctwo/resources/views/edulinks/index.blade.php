@extends('layouts.adminindex')
@section('caption',"edulinks List")
@section('content')


<!--Start Page Content Area-->

    <div class="container-fluid">


  


        <div class="col-md-12">


            @if($getsuccess = session('success'))

              <div class="alert alert-success rounded-0">{{$getsuccess}}</div>

            @endif

            <form action="{{route('edulinks.store')}}" method="POST" enctype="multipart/form-data">          
                {{csrf_field()}}    

               <div class="row align-items-end">
                   <div class="col-md-3 form-group">
                       <label for="classdate"> Class Date <span class="text-danger">*</span></label>

                       <input type="date" name="classdate" id="classdate" class="form-control form-control-sm rounded-0" value="{{old('classdate')}}" />

                   </div>



                   <div class="col-md-3 form-group">
                    <label for="post_id"> Class <span class="text-danger">*</span></label>

                    <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                        @foreach($posts as $post)
                            <option value="{{$post->id}}">{{$post->title}}</option>
                        @endforeach

                        
                        
                    </select>
                  
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="url"> URL <span class="text-danger">*</span></label>
    
                        <input type="text" name="url" id="url" class="form-control form-control-sm rounded-0" placeholder="URL">
                      
                    </div>
    

                 
                   <div class="col-md-3">                
                        <button type="reset" class="btn btn-secondary btn-sm rounded-0 ms-3">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>                     
                   </div>
               </div>
           </form>

           <div class="col-md-12">
            <form action="" method="">
                <div class="row justify-content-end">
                    <div class="col-md-2 col-sm-6 mb-2">

                        <div class="form-group">
                            <select name="filter" id="filter" class="form-control form-control-sm rounded-0">
                                <option value="" selected>Choose Status...</option>
                                @foreach($filterposts as $id => $name)
                                <option value="{{$id}}">{{$name}}</option>                              
    
                  
                                @endforeach
                            </select>
                        </div>


                      
    
    
                    </div>
                <div class="col-md-2 col-sm-6 mb-2">

                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control form-control-sm rounded-0" placeholder="Search" value="{{request('search')}}">
                        <button type="button" name="btn-clear" id="btn-clear" class="btn btn-secondary btn-sm"><i class="fas fa-syncronize">clear</i></button>
                        <button type="search" name="btn-search" id="btn-search" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>

                    </div>
                </div>

             
    
                </div>
            </form>
    
        </div>
        </div>

        <hr/>

        <div class="col-md-12"> 

        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td> 
                <th>Class</th>
                <th>URL</th>
                <th>By</th>
                <th>Class Date</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($edulinks as $idx=>$edulink)
            <tr>
                <td>{{ $idx+  $edulinks->firstItem()}}</td>
                {{-- <td>{{ $edulink->student($edulink->user_id) }}</td> --}}
                <td><a href="{{route('posts.show',$edulink->post_id)}}">{{$edulink->post['title']}}</a></td>
                <td><a href="javascript:void(0);" class="link-btns" data-url="{{$edulink->url}}" title="Copy Link">{{$edulink->url}}</a></td>
                <td><a href="">{{$edulink->user->name}}</a></td>
                <td><a href="">{{ date('d M Y', strtotime($edulink->classdate)) }}</a></td>


        
                <td>{{ $edulink->created_at->format('d-M-Y') }}</td>
                <td>{{ $edulink->updated_at->format('d-M-Y') }}</td>
                <td>
                    <a href="{{$edulink->url}}" class="text-primary" target="_blank" download="abc" ><i class="fas fa-download"></i></a>

                    <a href="javascript:void(0);" class="text-primary editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{ $edulink->id }}" data-post={{$edulink->post}} data-classdate="{{ $edulink->classdate }}" data-url="{{ $edulink->url }}"><i class="fas fa-pen"></i></a>
                    <a href="javascript:void(0)" class="text-danger ms-2 delete-btns" data-idx="{{$idx +  $edulinks -> firstItem()}}"><i class="fas fa-trash-alt"></i></a>                   

                </td>

                <td>
                    <form id="formdelete-{{$idx +  $edulinks -> firstItem()}}" action="{{route('edulinks.destroy',$edulink -> id)}}" method="POST">
                        @csrf 
                        @method('DELETE')
                       
                    </form>
                </td>
            </tr> 
        @endforeach
        
        

        </tbody>
        </table>

        {{-- {{ $edulinks->links('pagination::bootstrap-4') }} --}}
        {{ $edulinks->appends(request()->only('filter'))->links('pagination::bootstrap-4') }}

        </div>

    </div>
               
<!--End Page Content Area-->

 <!--Start edit model-->
 <div id="editmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Edit Form</h6>
                <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST" enctype="multipart/form-data">
           
                    {{csrf_field()}}
                    {{method_field('PUT')}}
            
                   <div class="row align-items-end">
                    

                    <div class="col-md-7 form-group">
                        <label for="editclassdate"> Class Date <span class="text-danger">*</span></label>

    
                        <input type="date" name="editclassdate" id="editclassdate" class="form-control-sm">

                       </div>


                       <div class="col-md-7 form-group">
                        <label for="editpost_id"> Class <span class="text-danger">*</span></label>

                        <select name="editpost_id" id="editpost_id" class="form-control form-control-sm rounded-0">
                            @foreach($posts as $id=>$post)
                            <option value="{{$id}}">{{$post->title}}</option>
                        @endforeach
                        

                           
                            
                        </select>

                       </div>

                       <div class="col-md-12 form-group">
                        <label for="editurl"> Class <span class="text-danger">*</span></label>

                        <input type="text" name="editurl" id="editurl" class="form-control">
                       </div>


                    
                    </div>
               
                       <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>                             
                       </div>                  
                   </div>
    
               </form>
            </div>
        </div>
    </div>
</div>
<!--End edit model-->

@endsection

{{-- Str = string --}}           
{{-- Str::limit($attendance -> remark,10) --}}

@section('css')
  
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
 
$(document).ready(function(){

    //   Start Filter 
  document.getElementById('filter').addEventListener('click',function(){
    let getfilterid = this.value || this.options[this.selectedIndex].value;
    window.location.href = window.location.href.split('?')[0] + '?filter='+getfilterid
  })
// End Filter 



// Start Clear btn 
document.getElementById('btn-clear').addEventListener('click', function () {
    const getfilter = document.getElementById('filter');
    const getsearch = document.getElementById('search');

    getfilter.selectedIndex = 0;
    getsearch.value = '';

    window.location.href = window.location.href.split('?')[0];
})
// End Clear btn 

// Start Autoshow Btn Clear 
const autoshowbtn = function () {
    let getbtnclear = document.getElementById('btn-clear');
    let geturlquery = window.location.search;
    let pattern = /[?&]search=/;
    // console.log(geturlquery);

    if (pattern.test(geturlquery)) {
        getbtnclear.style.display = "block";
    } else {
        getbtnclear.style.display = "none";
    }
}

autoshowbtn();
// End Autoshow Btn clear


//start edit form 
$(document).on('click','.editform',function(e){
    // console.log($(this).attr('data-name'),$(this).attr('data-id'))

    $("#editclassdate").val($(this).data('classdate'));
    $("#editpost_id").val($(this).data('post'));
    $("#editurl").val($(this).data('url'));
    

    const getid = $(this).attr('data-id');
            
    $("#formaction").attr("action",`/edulinks/${getid}`);

    e.preventDefault();
});
//end edit form

});
    

// Start Link btn 
$(".link-btns").click(function(){
    var geturl = $(this).data('url');
    console.log(geturl);
    navigator.clipboard.writeText(geturl);
})
// End Link btn 


 //start delete item
//  $('.delete-btns').click(function(){
//             // console.log("hi");
//             var getidx = $(this).data('idx');

//             if(confirm(`Are you sure !!! you want to delete ${getidx}?`)){
//                 $('#formdelete-'+getidx).submit();
//                 return true;
//             }else{
//                 return false;
//             }

//         });
const deleteBtns = document.querySelectorAll('.delete-btns');

  for (let i = 0; i < deleteBtns.length; i++) {
    deleteBtns[i].addEventListener('click', function () {
        var getidx = this.getAttribute('data-idx');
        console.log('hi');

        if (confirm(`Are you sure you want to delete ${getidx}?`)) {
            var getformdeleteidx = document.getElementById('formdelete-' + getidx);
            getformdeleteidx.submit();
            return true;
        } else {
            return false;
        }
    });
}

//end delete item


</script>

@endsection 

{{-- home work --}}
 {{-- tag == categories  == attendances --}}