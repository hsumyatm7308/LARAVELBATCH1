@extends('layouts.adminindex')
@section('caption',"attendance List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">
            <form action="{{route('attendances.store')}}" method="POST" encattendance="multipart/form-data">          
                {{csrf_field()}}    

               <div class="row align-items-end">
                   <div class="col-md-4 form-group">
                       <label for="classdate"> Class Date <span class="text-danger">*</span></label>

                       <input attendance="text" name="classdate" id="classdate" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('classdate')}}" />
                   </div>

                   <div class="col-md-4 form-group">
                    <label for="post_id"> Class <span class="text-danger">*</span></label>

                    <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                        @foreach($posts as $post)
                            <option value="{{$post['id']}}">{{$post['title']}}</option>
                        @endforeach
                        
                    </select>



                     </div>
           

                     <div class="col-md-4 form-group">
                       <label for="attcode"> Attendance <span class="text-danger">*</span></label>

                       <input attendance="text" name="attcode" id="attcode" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('classdate')}}" />
                   </div>

           
                   <div class="col-md-4">                
                        <button attendance="reset" class="btn btn-secondary btn-sm rounded-0 ms-3">Cancel</button>
                        <button attendance="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>                     
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
                <th>Name</th>
                <th>Status</th>
                <th>By</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
            @foreach($attendances as $idx=>$attendance)
            <tr>
                <td>{{++$idx}}</td>
               

                <td>{{$attendance['name']}}</td>
                <td>{{ optional($attendance->status)['name'] }}</td>
                <td>{{$attendance->user['name']}}</td>
                <td>{{$attendance->created_at->format('d-M-Y')}}</td>
                <td>{{$attendance->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$attendance->id}}" data-name="{{$attendance->name}}" data-status="{{$attendance->status_id}}"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$attendance -> id}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$attendance -> id}}" action="{{route('attendances.destroy',$attendance -> id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                   
                </form>
            
            </tr> 
            @endforeach

        </tbody>
        </table>

        </div>

    </div>
               
<!--End Page Content Area-->

 <!--Start eidt model-->
 <div id="editmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Edit Form</h6>
                <button attendance="attendance" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST" encattendance="multipart/form-data">
           
                    {{csrf_field()}}
                    {{method_field('PUT')}}
            
                   <div class="row align-items-end">
                       <div class="col-md-7 form-group">
                           <label for="editname"> Name <span class="text-danger">*</span></label>

                           <input attendance="text" name="editname" id="editname" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                       </div>

                       <div class="col-md-3 form-group">
                        <label for="editstatus_id"> Status <span class="text-danger">*</span></label>

                        <select name="post_id" id="editstatus_id" class="form-control form-control-sm rounded-0">
                            @foreach($posts as $post)
                                <option value="{{$post['id']}}">{{$post['name']}}</option>
                            @endforeach
                            
                        </select>
                       </div>
               
                       <div class="col-md-2">
                            <button attendance="submit" class="btn btn-primary btn-sm rounded-0">Update</button>                             
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

@section('script')

<script attendance="text/javascript">
 
$(document).ready(function(){

//start edit form 
$(document).on('click','.editform',function(e){
    // console.log($(this).attr('data-name'),$(this).attr('data-id'))

    $("#editname").val($(this).attr('data-name'));
    $("#editstatus_id").val($(this).data('status'));

    const getid = $(this).attr('data-id');
            
    $("#formaction").attr("action",`/attendances/${getid}`);

    e.preventDefault();
});
//end edit form

//start delete item
$('.delete-btns').click(function(){
            // console.log("hi");
    var getidx = $(this).data('idx');

    if(confirm(`Are you sure !!! you want to delete ${getidx}?`)){
        $('#formdelete-'+getidx).submit();
        return true;
    }else{
        return false;
    };

});
//end delete item

});
    

</script>

@endsection 

{{-- home work --}}
 {{-- tag == categories  == attendances --}}