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


@endsection

{{-- Str = string --}}
{{-- Str::limit($student -> remark,10) --}}



@section('script')

<script type="text/javascript">


$(document).ready(function(){

        $('.delete-btns').click(function(){
            var getidx = $(this).data('idx');

            if(confirm(`Are you sure !!! you want to delet ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });

        


        $('.editform').click(function(){
            console.log("hi");
            

        });

        //end edit item


    });
//  End Delete Item


</script>

@endsection 

{{-- {{route('statuses.update',$status -> id)}} --}}