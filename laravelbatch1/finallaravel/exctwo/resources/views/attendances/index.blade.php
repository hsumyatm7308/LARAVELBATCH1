@extends('layouts.adminindex')
@section('caption',"Attendance List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">
            <form action="{{route('attendances.store')}}" method="POST" enctype="multipart/form-data">          
                {{csrf_field()}}    

               <div class="row align-items-end">
                   <div class="col-md-3 form-group">
                       <label for="classdate"> Class Date <span class="text-danger">*</span></label>

                       <input type="date" name="classdate" id="classdate" class="form-control form-control-sm rounded-0" value="{{old('classdate')}}" />
                   </div>

                   <div class="col-md-3 form-group">
                    <label for="post_id"> Status <span class="text-danger">*</span></label>

                    <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                        @foreach($posts as $post)
                            <option value="{{$post->id}}">{{$post->title}}</option>
                        @endforeach
                        
                    </select>
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="attcode"> Attendance Code <span class="text-danger">*</span></label>
 
                        <input type="text" name="attcode" id="attcode" class="form-control form-control-sm rounded-0" value="{{old('attcode')}}" />
                    </div>
           
                   <div class="col-md-3">                
                        <button type="reset" class="btn btn-secondary btn-sm rounded-0 ms-3">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>                     
                   </div>
               </div>
           </form>
        </div>

        <hr/>

        <div class="col-md-12"> 

        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td>
                <th>Student ID</th>
                <th>class</th>
                <th>Att Code</th>
                <th>By</th>
                <th>Class Date</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
            @foreach($attendances as $idx=>$attendance)
            <tr>
                <td>{{++$idx}}</td>
                <td>{{$attendance->student($attendance->user_id)}}</td>   
                <td>{{$attendance->post['title']}}</td>
                <td>{{$attendance->attcode}}</td>
                <td>{{$attendance->user['name']}}</td>
                <td>{{$attendance->classdate}}</td>
                <td>{{$attendance->created_at->format('d-M-Y')}}</td>
                <td>{{$attendance->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$attendance->id}}" data-attcode="{{$attendance->attcode}}" data-post_id="{{$attendance->post_id}}"><i class="fas fa-pen"></i></a>
                    
                </td>
                
            </tr> 
            @endforeach




        </tbody>
        </table>

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
                        <label for="editpost_id"> Class <span class="text-danger">*</span></label>

                        <select name="post_id" id="editpost_id" class="form-control form-control-sm rounded-0">
                            @foreach($posts as $post)
                                <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach
                            
                        </select>
                       </div>

                       <div class="col-md-3 form-group">
                        <label for="editattcode">Class Date <span class="text-danger">*</span></label>
 
                        <input type="text" name="attcode" id="editattcode" class="form-control form-control-sm rounded-0" value="{{old('classdate')}}" />
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

<script type="text/javascript">
 
$(document).ready(function(){

//start edit form 
$(document).on('click','.editform',function(e){
    // console.log($(this).attr('data-name'),$(this).attr('data-id'))

    $("#editattcode").val($(this).attr('data-attcode'));
    $("#editpost_id").val($(this).data('post_id'));
    

    const getid = $(this).attr('data-id');
            
    $("#formaction").attr("action",`/attendances/${getid}`);

    e.preventDefault();
});
//end edit form

});
    

</script>

@endsection 

{{-- home work --}}
 {{-- tag == categories  == attendances --}}