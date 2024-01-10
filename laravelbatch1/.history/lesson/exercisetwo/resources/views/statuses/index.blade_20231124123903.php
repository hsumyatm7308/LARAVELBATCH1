@extends('layouts.adminindex')
@section('caption','Student List')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">



        <div class="col-md-12 ">
            <a href="{{route('statuses.create')}}" class="btn btn-primary btn-sm rounded-0">Create</a>
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
                <tbody> @foreach($statuses as $idx=>$statuse) <tr>
                        <td>{{++$idx}}</td>
                        <td><a href="{{route('statuses.show',$statuse->id)}}">{{$statuse->regnumber}}</a></td>
                        <td>{{$statuse->firstname}} {{$statuse->lastname}}</td>
                        <td>{{Str::limit($statuse->remark,10)}}</td>
                        <td>{{$statuse->status['name']}}</td>
                        <td>{{$statuse->user['name']}}</td>
                        <td>{{$statuse->created_at->format('d-M-Y')}}</td>
                        <td>{{$statuse->updated_at->format('d-M-Y')}}</td>
                        <td class="d-flex justify-content-center align-items-center">






          
                            <a href="{{route('statuses.edit',$statuse->id)}}" class="text-info m-3">
                                <i class="fas fa-pen"></i></a>

                            <a href="#" class="text-danger m-3 delete-btn" data-idx="{{$statuse->regnumber}}"><i class="fas fa-trash-alt"></i></a>

                     



                        </td>

                        
                        <form class="formdelete-{{$student->regnumber}}" id="" action="{{route('statuses.destroy',$student->id)}}" method="POST" class="d-flex  justify-content-center align-items-center">
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
            
            if(confirm("Are you sure you want to delete " + getidx + " ?")) {

                $('#formdelete-'+getidx).submit();
                return true;

            }else{
               return false;
            }
        })
    })

</script>

@endsection