@extends('layouts.adminindex')
@section('caption','Student List')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">



        <div class="col-md-12 ">
            <a href="{{route('students.create')}}" class="btn btn-primary btn-sm rounded-0">Create New Country</a>
            <hr>
        </div>
        <div class="col-md-12">

            <table class="table table-sm table-hover border container">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Reg Number</th>
                        <th>Name</th>
                        <th>Remark</th>
                        <th>Status</th>
                        <th>by</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action </th>
                    </tr>

                </thead>
                <tbody> @foreach($students as $idx=>$student) <tr>
                        <td>{{++$idx}}</td>
                        <td><a href="{{route('students.show',$student->id)}}">{{$student->regnumber}}</a></td>
                        <td>{{$student->firstname}} {{$student->lastname}}</td>
                        <td>{{Str::limit($student->remark,10)}}</td>
                        <td>{{$student->status_id}}</td>
                        <td>{{$student->created_at->format('d-M-Y')}}</td>
                        <td>{{$student->updated_at->format('d-M-Y')}}</td>
                        <td class="d-flex justify-content-center align-items-center">






          
                            <a href="{{route('students.edit',$student->id)}}" class="text-info m-3">
                                <i class="fas fa-pen"></i></a>

                            <a href="#" class="text-danger m-3 delete-btn" data-idx="{{$student->id}}"><i class="fas fa-trash-alt"></i></a>

                     



                        </td>

                        
                        <form class="formdelete-{{$student->id}}" id="" action="{{route('students.destroy',$student->id)}}" method="POST" class="d-flex  justify-content-center align-items-center">
                                @csrf
                                @method("DELETE")

                        </form>

          
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>









    </div>

</div>


@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.delete-btn').click(function(){
            var getidx = $(this).data('idx');
            console.log(getidx);
            
            if(comfirm("Are you sure !!! you want to Delete ${{getidx}} ?")){

                return true;

            }else{
               return false;
            }
        })
    })

</script>

@endsection