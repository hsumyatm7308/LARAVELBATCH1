@extends('layouts.adminindex')
@section('caption',"contact List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">


       

        <div class="col-md-12"> 

            <a href="#createmodal" class="btn btn-primary btn-sm rounded-0" data-bs-toggle="modal">Create</a>

            <hr/>

            <div class="col-md-12">
                <form action="" method="">
                    <div class="row justify-content-end">
                        <div class="col-md-2 col-sm-6 mb-2">
    
                            <div class="form-group">
                                <select name="filter" id="filter" class="form-control form-control-sm rounded-0">
                                    <option value="" selected>Choose Status...</option>
                                    @foreach($relatives as $id => $name)
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
    
            <div class="col-md-12">

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
                                <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$contact->id}}" data-firstname="{{$contact->firstname}}" data-lastname="{{$contact->lastname}}" data-birthday="{{$contact->birthday}}"   data-relative="{{$contact->relative_id}}"><i class="fas fa-pen"></i></a>
                                
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

        {{$contacts->links()}}
        {{-- {{$contacts->links('pagination::bootstrap-5')}} --}}
        {{-- {{$contacts->links('pagination::userBootstrapFive')}} --}}
        {{-- {{$contacts->appends(request()->only('filter','search'))->links()}} --}}

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
                       <div class="col-md-6 form-group">
                           <label for="editfirstname"> Firstname <span class="text-danger">*</span></label>

                           <input type="text" name="firstname" id="editfirstname" class="form-control form-control-sm rounded-0" />
                       </div>

                       <div class="col-md-6 form-group">
                        <label for="editlastname"> Lastname <span class="text-danger">*</span></label>

                        <input type="text" name="lastname" id="editlastname" class="form-control form-control-sm rounded-0"  />
                    </div>


                    <div class="col-md-6 form-group">
                        <label for="editbirthday"> Birthday <span class="text-danger">*</span></label>

                        <input type="date" name="birthday" id="editbirthday" class="form-control form-control-sm rounded-0"  />
                    </div>

                       <div class="col-md-6 form-group">
                        <label for="editrelative_id"> Relative <span class="text-danger">*</span></label>
                        
                        <select name="relative_id" id="editrelative_id" class="form-control form-control-sm rounded-0">
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

            $("#editfirstname").val($(this).attr('data-firstname'));
            $("#editlastname").val($(this).attr('data-lastname'));
            $("#editbirthday").val($(this).attr('data-birthday'));
            $("#editrelative_id").val($(this).data('relative'));

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