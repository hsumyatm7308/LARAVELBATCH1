@extends('layouts.adminindex')
@section('caption','Leave List')
@section('content')

    <!-- Start Page Content Area -->

    <div class="container-fluid">

        <div class="col-md-12">

            <a href="{{route('leaves.create')}}" class="btn btn-primary btn-sm rounded-0">Create</a>

            <hr/>

            <table id="mytable" class="table table-sm table-hover border">
            <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Student ID</th>
                                            <th>Class</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Tag</th>
                                            <th>Stage</th>
                                            <th>By</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($leaves as $idx=>$leave)
                                        <tr>
                                            <td>{{++$idx}}</td>
                                            <td><a href="{{route('students.show',$leave->studenturl())}}">{{$leave->student($leave->user_id)}}</a></td>
                                            <td><a href="{{route('posts.show',$leave->post_id)}}">{{$leave->post['title']}}</a></td>
                                            <td>{{$leave->startdate}}</td>
                                            <td>{{$leave->enddate}}</td>
                                            <td>{{$leave->tagperson['name']}}</td>
                                            <td>{{$leave->stage['name']}}</td>
                                            <td>{{$leave['user']['name']}}</td>
                                            <td>{{$leave->created_at->format('d M Y')}}</td>
                                            <td>{{$leave->updated_at->format('d M Y')}}</td>
                                            <td>
                                                <a href="{{route('leaves.show',$leave->id)}}" class="text-primary"><i class="fas fa-book-reader"></i></a>
                                                <a href="{{route('leaves.edit',$leave->id)}}" class="text-info ms-2"><i class="fas fa-pen"></i></a>
                                                <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                                <form id="formdelete-{{$idx}}" action="{{route('leaves.destroy',$leave->id)}}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>



        </div>

    </div>


	<!-- End Page Content Area -->
@endsection

@section('css')
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){

            // Start delete btn alert
            $('.delete-btns').click(function(){
                var getidx = $(this).data('idx');
                // console.log(getidx);
                
                if(confirm(`Are you sure !!! you want to Delete ${getidx} ?`)){
                    $('#formdelete-'+getidx).submit();
                    return true;
                }else{
                    return fales;
                }
            });
            // End delete btn alert


            // for mytable 
            // let table = new DataTable('#mytable');
            $('#mytable').DataTable();

        });
    </script>
@endsection