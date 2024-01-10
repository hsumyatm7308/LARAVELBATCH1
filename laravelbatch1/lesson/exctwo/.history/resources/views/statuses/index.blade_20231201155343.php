@extends('layouts.adminindex')
@section('caption',"Status List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">

            <form action="{{route('statuses.store')}}" method="POST" enctype="multipart/form-data">          
                {{csrf_field()}}    

               <div class="row align-items-end">
                   <div class="col-md-6 form-group">
                       <label for="name"> Name <span class="text-danger">*</span></label>

                       <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                   </div>
           
                   <div class="col-md-6">                
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
                <th>Name</th>
                <th>By</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Action</th>             
            </tr>
        </thead>
        <tbody>
            
            @foreach($statuses as $idx=>$status)
            <tr>
                <td>{{++$idx}}</td>
                <td>{{$status->name}} </td>
                <td>{{$status->user['name']}}</td>
                <td>{{$status->created_at->format('d-M-Y')}}</td>
                <td>{{$status->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a id="helo" href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#" data-id="{{$status->id}}" data-name="{{$status->name}}"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$idx}}" action="{{route('statuses.destroy',$status -> id)}}" method="POST">
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

{{-- Start Model Area  --}}
    <div id="editmodal" class="modal fade">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title">Edit Form</h6>
                    <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form id="formaction" action="" method="POST" enctype="multipart/form-data">
               
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                
                       <div class="row align-items-end">

                           <div class="col-md-8 form-group">
                               <label for="editname"> Name <span class="text-danger">*</span></label>

                               <input type="text" name="editname" id="editname" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                           </div>
                   
                           <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>                             
                           </div>                  
                       </div>
        
                   </form>
                </div>

                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>

{{-- End Model Area --}}

@endsection

{{-- Str = string --}}
{{-- Str::limit($student -> remark,10) --}}



@section('script')

<script type="text/javascript">


$(document).ready(function(){
//  Start Delete item 
        $('.delete-btns').click(function(){
            // console.log("hi");
            var getidx = $(this).data('idx');

            if(confirm(`Are you sure !!! you want to delet ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });

        //start edit item 
        // $(document).on('click','.editform',function(e){
            //console.log($(this).attr('data-name'),$(this).attr('data-id'))

            // $("#editname").val($(this).data('name'));

            // const getid = $(this).attr('data-id');
            
            // $("#formaction").attr("action",`/statuses/${getid}`);

            // e.preventDefault();
            // console.log('hi')
        // });


        $('.editform').click(function(){
            console.log("hi");
            

        });

        //end edit item


    });
//  End Delete Item


</script>

@endsection 

{{-- {{route('statuses.update',$status -> id)}} --}}