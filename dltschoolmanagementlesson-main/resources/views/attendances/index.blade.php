@extends('layouts.adminindex')
@section('caption','Attendance List')
@section('content')

    <!-- Start Page Content Area -->

    <div class="container-fluid">

        <div class="col-md-12">
        <form action="{{route('attendances.store')}}" method="POST">
            {{ csrf_field() }}

            <div class="row align-items-end">

                <div class="col-md-3 form-group">
                    <label for="classdate">Class Date <span class="text-danger">*</span></label>
                        {{-- @error('classdate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    <input type="date" name="classdate" id="classdate" class="form-control form-control-sm rounded-0" value="{{old('classdate')}}" />
                </div>

                <div class="col-md-3 form-group">
                    <label for="post_id">Class <span class="text-danger">*</span></label>
                        {{-- @error('post_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                        <option selected disabled>Choose class</option>
                        @foreach($posts as $post)
                            <option value="{{$post->id}}">{{$post->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3 form-group">
                    <label for="attcode">Attendance Code <span class="text-danger">*</span></label>
                        {{-- @error('attcode')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror --}}
                    <input type="text" name="attcode" id="attcode" class="form-control form-control-sm rounded-0" value="{{old('attcode')}}" />
                </div>

                <div class="col-md-3">
                    <button type="reset" class="btn btn-secondary btn-sm rounded-0">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                </div>

            </div>

        </form>
        </div>

        <hr/>

        <div class="col-md-12">

            <table id="mytable" class="table table-sm table-hover border">
            <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Student ID</th>
                                            <th>Class</th>
                                            <th>Att Code</th>
                                            <th>By</th>
                                            <th>Class Date At</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($attendances as $idx=>$attendance)
                                        <tr>
                                            <td>{{++$idx}}</td>
                                            <td><a href="{{route('students.show',$attendance->studenturl())}}">{{$attendance->student($attendance->user_id)}}</a></td>
                                            <td><a href="{{route('posts.show',$attendance->post_id)}}">{{$attendance->post['title']}}</a></td>
                                            <td>{{$attendance->attcode}}</td>
                                            <td>{{$attendance['user']['name']}}</td>
                                            <td>{{$attendance->classdate}}</td>
                                            <td>{{$attendance->created_at->format('d M Y')}}</td>
                                            <td>{{$attendance->updated_at->format('d M Y')}}</td>
                                            <td>
                                                <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$attendance->id}}" data-attcode="{{$attendance->attcode}}" data-post="{{$attendance->post_id}}"><i class="fas fa-pen"></i></a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
            </table>



        </div>

    </div>


	<!-- End Page Content Area -->


    <!-- START MODAL AREA  -->

        <!-- start edit modal  -->
        <div id="editmodal" class="modal fade ">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content rounded-0">

                    <div class="modal-header">
                        <h6 class="modal-title">Edit Form</h6>
                        <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                    <form id="formaction" action="" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="row align-items-end">

                            <div class="col-md-7 form-group">
                                <label for="editpost_id">Class <span class="text-danger">*</span></label>
                                <select name="post_id" id="editpost_id" class="form-control form-control-sm rounded-0">
                                    @foreach($posts as $post)
                                        <option value="{{$post->id}}">{{$post->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3 form-group">
                                <label for="editattcode">Class Date <span class="text-danger">*</span></label>
                                <input type="text" name="attcode" id="editattcode" class="form-control form-control-sm rounded-0" />
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
        <!-- end edit modal  -->

    <!-- END MODAL AREA  -->


@endsection

@section('css')
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){

            console.log('hi');

            // Start Edit Form 
            $(document).on('click','.editform',function(e){

                console.log('hay');

                console.log($(this).attr('data-attcode'),$(this).data('post'));
            
                $('#editattcode').val($(this).attr('data-attcode'));
                $('#editpost_id').val($(this).data('post'));

                const getid = $(this).attr('data-id');
                $('#formaction').attr('action',`/attendances/${getid}`);

                e.preventDefault();
            });

            // End Edit Form 

            // for mytable 
            $('#mytable').DataTable();

        });

            </script>
@endsection
