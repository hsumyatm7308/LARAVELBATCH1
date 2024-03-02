@extends('layouts.adminindex')
@section('caption','City List')
@section('content')

    <!-- Start Inner Content Area -->

    <div class="container-fluid">

        <div class="col-md-12">

            {{--            <form action="/cities" method="POST">--}}
            {{--            <form action="cities" method="POST">--}}
            {{--            <form action="{{url('cities')}}" method="POST">--}}
            <form action="{{url('/cities')}}" method="POST">
                {{ csrf_field() }}

                <div class="row align-items-end">

                    <div class="col-md-6 form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter City Name" value="{{old('name')}}"/>
                    </div>


                    <div class="col-md-6">
                        <button type="reset" class="btn btn-secondary btn-sm rounded-0 me-3">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ">Submit</button>
                    </div>


                </div>

            </form>


        </div>

        <hr/>

        <div class="col-md-12">
            <form action="" method="">
                <div class="row justify-content-end">
                    <div class="col-md-2 col-sm-6 mb-2">
                        <div class="input-group">
                            <input type="text" name="filtername" id="filtername" class="form-control form-control-sm rounded-0" placeholder="Search..." value="{{request('filtername')}}" />
                            <button type="button" id="btn-search" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-md-12">

            <table id="mytable" class="table table-sm table-hover border">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cities as $idx=>$city)
                    <tr>
                        <td>{{++$idx}}</td>
                        <td>{{$city->name}}</td>
                        <td>{{$city->user['name']}}</td>
                        <td>{{$city->created_at->format('d M Y')}}</td>
                        <td>{{$city->updated_at->format('d M Y')}}</td>
                        <td>
                            <a href="{{route('cities.edit',$city->id)}}" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$city->id}}" data-name="{{$city->name}}"><i class="fas fa-pen"></i></a>
                            <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>
                        </td>

                        <form id="formdelete-{{$idx}}" action="{{route('statuses.destroy', $city->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>


    <!-- End Inner Content Area -->


    <div id="editmodal" class="modal fade"  aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Form</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <form id="formaction" action="" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="row align-items-end">

                            <div class="col-md-8 form-group">
                                <label for="editname">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="editname" class="form-control form-control-sm rounded-0" />
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



@endsection
@section('css')

@endsection

@section('scripts')

    <script>

        // Start Filter 
        const getfilterbtn = document.getElementById('btn-search');
        getfilterbtn.addEventListener('click',function(e){
            const getfiltername = document.getElementById('filtername').value;
            const getcururl = window.location.href;

            // console.log(getcururl); // http://localhost:8000/cities?filtername=yan#
            // console.log(getcururl.split('?')); // ['http://localhost:8000/cities', 'filtername=yan#']
            // console.log(getcururl.split('?')[0]); //
            window.location.href = getcururl.split('?')[0] + '?filtername='+getfiltername;

            e.preventDefault();

        });
        // End Filter 




        $(document).ready(function () {


            // Start Edit Form

            $(document).on('click', '.editform', function(e) {

                $("#editname").val($(this).attr('data-name'));

                const getid = $(this).data('id');
                $("#formaction").attr('action',`/cities/${getid}')}}`);


                e.preventDefault();

            });

            // End Edit Form


            // Start Delete Item

            $('.delete-btns').click(function () {

                var getidx = $(this).data('idx');
                // console.log(getidx);


                if (confirm(`Are you sure !!! you want to Delete Number ${getidx} ?`)) {
                    $('#formdelete-' + getidx).submit();
                    return true;
                } else {
                    return false;
                }


            });

            // End Delete Item


        });
    </script>
@endsection





