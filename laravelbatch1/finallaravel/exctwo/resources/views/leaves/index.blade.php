@extends('layouts.adminindex')
@section('caption',"leave List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">  
        
        <a href="{{route('leaves.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
        <hr/>


        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td>
                <th>Student ID</th>
                <td>Class</td>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Tag</th>
                <th>Stage</th>

                <th>By</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
            @foreach($leaves as $idx=>$leave)
            <tr>
                <td>{{++$idx}}</td>
                <td>{{$leave->student($leave->user_id)}}</td>

                <td>{{$leave->post['title']}}</td>
               
                <td>{{$leave->startdate}}</td>
                <td>{{$leave->enddate}}</td>

                <td>{{ $leave->user->name }}</td>

                <td>{{$leave->stage['name']}}</td>
                <td>{{$leave->user['name']}}</td>


                <td>{{$leave->created_at->format('d-M-Y')}}</td>
                <td>{{$leave->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="{{route('leaves.edit',$leave -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$leave -> id}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$leave -> id}}" action="{{route('leaves.destroy',$leave -> id)}}" method="leave">
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


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" type="text/css">
 
@endsection

{{-- Str = string --}}
{{-- Str::limit($leave -> remark,10) --}}

@section('script')

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $('.delete-btns').click(function(){
            // console.log("hi");
            var getidx = $(this).data('idx');

            if(confirm(`Are you sure !!! you want to delete ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });
    });


    //datatable.com
    // let table = new DataTable('#mytable');
    $('#mytable').DataTable();
</script>

@endsection 