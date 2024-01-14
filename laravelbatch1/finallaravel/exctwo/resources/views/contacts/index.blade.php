@extends('layouts.adminindex')
@section('caption',"contact List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">
        <div class="col-md-12"> 

            <a href="#createmodal" class="btn btn-primary btn-sm rounded-0" data-bs-toggle="modal">Create</a>

            <hr/>

        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Relative</th>
                <th>By</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
            @foreach($contacts as $idx=>$contact)
            <tr>
                <td>{{++$idx}}</td>
               

                <td>{{$contact->firstname}}</td>
                <td>{{$contact->lastname}}</td>
                <td>{{$contact->birthday ?  date('d M Y',strtotime($contact->birthday) ) : ''}}</td>
              
                <td>{{$contact->relative ? $contact->relative['name'] : '' }}</td>
                <td>{{$contact->user['name']}}</td>
                <td>{{$contact->created_at->format('d-M-Y')}}</td>
                <td>{{$contact->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$contact->id}}" data-name="{{$contact->name}}" data-status="{{$contact->relative_id}}"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-id="{{$contact->id}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$contact->id}}" action="{{route('contacts.destroy',$contact -> id)}}" method="POST">
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

 <!--Start create model-->
 <div id="createmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Create Form</h6>
                <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="{{route('contacts.store')}}" action="" method="POST" enctype="multipart/form-data">
       
                    {{csrf_field()}}

                   <div class="row align-items-end">
                    <div class="col-md-7 form-group">
                        <label for="firstname"> Firstname <span class="text-danger">*</span></label>

                        <input type="text" name="firstname" id="firstname" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('firstname')}}" />
                    </div>

                    <div class="col-md-7 form-group">
                     <label for="lastname"> Lastname <span class="text-danger">*</span></label>

                     <input type="text" name="lastname" id="lastname" class="form-control form-control-sm rounded-0" placeholder="Enter your Lastname" value="{{old('firstname')}}" />
                 </div>


                 <div class="col-md-7 form-group">
                     <label for="birthday"> Birthday <span class="text-danger">*</span></label>

                     <input type="date" name="birthday" id="birthday" class="form-control form-control-sm rounded-0" placeholder="Enter your Lastname" value="{{old('firstname')}}" />
                 </div>

                    <div class="col-md-3 form-group">
                     <label for="relative_id"> Relative <span class="text-danger">*</span></label>
                     
                     <select name="relative_id" id="relative_id" class="form-control form-control-sm rounded-0">
                         @foreach($relatives as $id=> $name)
                             <option value="{{$id}}">{{$name}}</option>
                         @endforeach
                         
                     </select>
                    </div>
            
                    <div class="col d-flex justify-content-end mt-2">
                         <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>                             
                    </div>                                  
                   </div>
    
               </form>
            </div>

        </div>
    </div>
</div>
<!--End create model-->

 <!--Start eidt model-->
 <div id="editmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Edit Form</h6>
                <button type="contact" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST">
           
                    {{csrf_field()}}
                    {{method_field('PUT')}}
            
                   <div class="row align-items-end">
                       <div class="col-md-7 form-group">
                           <label for="firstname"> Firstname <span class="text-danger">*</span></label>

                           <input type="text" name="firstname" id="firstname" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('firstname')}}" />
                       </div>

                       <div class="col-md-7 form-group">
                        <label for="lastname"> Lastname <span class="text-danger">*</span></label>

                        <input type="text" name="lastname" id="lastname" class="form-control form-control-sm rounded-0" placeholder="Enter your Lastname" value="{{old('firstname')}}" />
                    </div>


                    <div class="col-md-7 form-group">
                        <label for="birthday"> Birthday <span class="text-danger">*</span></label>

                        <input type="date" name="birthday" id="birthday" class="form-control form-control-sm rounded-0" placeholder="Enter your Lastname" value="{{old('firstname')}}" />
                    </div>

                       <div class="col-md-3 form-group">
                        <label for="relative_id"> Relative <span class="text-danger">*</span></label>
                        
                        <select name="relative_id" id="relative_id" class="form-control form-control-sm rounded-0">
                            @foreach($relatives as $id=> $name)
                                <option value="{{$id}}">{{$name}}</option>
                            @endforeach
                            
                        </select>
                       </div>
               
                       <div class="col d-flex justify-content-end mt-2">
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
{{-- Str::limit($contacts -> remark,10) --}}

@section('script')

<script type="text/javascript">

$(document).ready(function(){

         //start edit form 
$(document).on('click','.editform',function(e){
            // console.log($(this).attr('data-name'),$(this).attr('data-id'))

            $("#editname").val($(this).attr('data-name'));
            $("#editstatus_id").val($(this).data('status'));

            const getid = $(this).attr('data-id');
            
            $("#formaction").attr("action",`/contacts/${getid}`);

            e.preventDefault();
});
//end edit form

        //start delete item
        $('.delete-btns').click(function(){
            // console.log("hi");
            var getidx = $(this).data('id');

            if(confirm(`Are you sure !!! you want to delete ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });
        //end delete item
});
    

</script>

@endsection 

{{-- home work --}}
 {{-- contact == contacts  == types --}}