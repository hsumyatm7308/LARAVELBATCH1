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






          
                            <a href="{{route('students.edit',$student->id)}}" class="text-info m-3"><i
                                    class="fas fa-pen"></i></a>

                                    <a href="$" class="text-danger m-3"><i
                                    class="fas fa-pen"></i></a>

                     



                        </td>

                        
                        <form class="formdelete" id="" action="{{route('students.destroy',$student->id)}}" method="POST" class="d-flex  justify-content-center align-items-center">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="text-danger"><i class="fas fa-trash-alt"></i></button>

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

@endsection