@extends('layouts.adminindex')
@section('caption',"paymentmethod List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">
            <form action="{{route('paymentmethods.store')}}" method="POST" encpaymentmethod="multipart/form-data">          
                {{csrf_field()}}    

               <div class="row align-items-end">
                   <div class="col-md-4 form-group">
                       <label for="name"> Name <span class="text-danger">*</span></label>

                       <input paymentmethod="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                   </div>

                   <div class="col-md-4 form-group">
                    <label for="name"> Status <span class="text-danger">*</span></label>

                    <select name="status_id" id="statis_id" class="form-control form-control-sm rounded-0">
                        @foreach($statuses as $status)
                            <option value="{{$status['id']}}">{{$status['name']}}</option>
                        @endforeach
                        
                    </select>
                </div>
           
                   <div class="col-md-4">                
                        <button paymentmethod="reset" class="btn btn-secondary btn-sm rounded-0 ms-3">Cancel</button>
                        <button paymentmethod="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>                     
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
            
            @foreach($paymentmethods as $idx=>$paymentmethod)
            <tr id="delete_{{$paymentmethod['id']}}">
                <td>{{++$idx}}</td>
               

                <td>{{$paymentmethod['name']}}</td>
                <td>
                    <div class="form-checkbox form-switch">
                        <input type="checkbox" class="form-check-input change-btn" {{$paymentmethod->status_id === 3 ? 'checked' : ''}} data-id="{{$paymentmethod->id}}">
                    </div>
                </td>
                <td>{{$paymentmethod->user['name']}}</td>
                <td>{{$paymentmethod->created_at->format('d-M-Y')}}</td>
                <td>{{$paymentmethod->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$paymentmethod->id}}" data-name="{{$paymentmethod->name}}" data-status="{{$paymentmethod->status_id}}"><i class="fas fa-pen"></i></a>
                    
                    {{-- <a href="javascript:void(0);" class="text-danger ms-2 delete-btns" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>                    --}}
                    <a href="javascript:void(0);" class="text-danger ms-2 delete-btns" data-id="{{$paymentmethod->id}}" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>

                </td>
                {{-- <form id="formdelete-{{$paymentmethod->id}}" action="{{route('paymentmethods.destroy',$paymentmethod -> id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                   
                </form> --}}
            
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
                <button type="paymentmethod" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST" enctype="multipart/form-data">
           
                    {{csrf_field()}}
                    {{method_field('PUT')}}
            
                   <div class="row align-items-end">
                       <div class="col-md-7 form-group">
                           <label for="editname"> Name <span class="text-danger">*</span></label>

                           <input type="text" name="name" id="editname" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                       </div>

                      
                       <div class="col-md-3 form-group">
                        <label for="editstatus_id"> Status <span class="text-danger">*</span></label>

                        <select name="status_id" id="editstatus_id" class="form-control form-control-sm rounded-0">
                            @foreach($statuses as $status)
                                <option value="{{$status['id']}}">{{$status['name']}}</option>
                            @endforeach
                            
                        </select>
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
{{-- Str::limit($paymentmethod -> remark,10) --}}

@section('script')

<script type="text/javascript">


// Start Passing Header Token 

$.ajaxSetup(
   {
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]')->attr('content')
    }
   }
)


// End Passing Header Token

 
$(document).ready(function(){


    // by ajax using default laravel route 
$(document).on('click', '.delete-btns', function(e) {
    e.preventDefault();

    console.log('hi');
    var getidx = $(this).data('idx');
    var getid = $(this).data('id');

    if (confirm(`Are you sure you want to delete ${getidx}?`)) {
        // UI remove
        $(this).parent().parent().remove();

        $.ajax({
            url: `paymentmethods/${getid}`,
            type: "DELETE", // Corrected method name
            dataType: "json",
            data:{_token:"{{csrf_token()}}"}, // 419 error
            success: function(response) {
                console.log(response.success);
                if(response && response.status === "okay"){
                     const getdata = response.data;
                     $(`#delete_${getdata}`).remove();
                }
            }
        });
        return true;
    } else {
        return false;
    }
});

//end delete item




//start edit form 
$(document).on('click','.editform',function(e){
    // console.log($(this).attr('data-name'),$(this).attr('data-id'))

    $("#editname").val($(this).attr('data-name'));
    $("#editstatus_id").val($(this).data('status'));

    // const getid = $(this).attr('data-id');
            
    // $("#formaction").attr("action",`/paymentmethods/${getid}`);

    e.preventDefault();
});


$('#formaction').submit(function(e)){
    e.preventDefault();
    const getid = 1;

    $.ajax({
        url: `paymentmethods/${getid}`,
        type:"PUT",
        dataType:'json',
        data:$('#formaction').serialize(), //name&satatus_id
       success:function(response){
        // console.log(this.data);
        //   console.log(response.status);
          $('#editmodal').modal('hide');
       }
    });

    // console.log('hello');
    
}
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

 




        // start change btn 

        $('.change-btn').change(function(){
            var getid = $(this).data('id');
            // console.log(getid);
            var setstatus = $(this).prop('checked') === true ? 3:4;
            console.log(setstatus);

            $.ajax({
                url:'paymentmethodstatus' ,
                paymentmethod:"GET",
                datapaymentmethod:"json",
                data:{"id":getid, "status_id":setstatus},

                success:function(response){
                    console.log(response.success);
                }
            });
        })

        // end change btn 

});
    

</script>

@endsection 

{{-- home work --}}
 {{-- tag == categories  == paymentmethods --}}