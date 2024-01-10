@extends('layouts.adminindex')
@section('caption','Edit Student')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">


        <form action="/posts/{{$post->id}}" method="POST" enctype="multi/form-data">

            @csrf
            @method('PUT')

            <div class="row">


                <div class="col-md-4 form-group mb-3">
                    <label for="firstname">First Name <span class="text-danger">*</span></label>
                    <input type="text" name="firstname" class="form-control form-control-sm rounded-0"
                        placeholder="Enter First Name" value="{{$student->firstname}}">
                </div>

                <div class="col-md-4 form-group mb-3">
                    <label for="lastname">Last Name <span class="text-danger">*</span></label>
                    <input type="text" name="lastname" class="form-control form-control-sm rounded-0"
                        placeholder="Enter Last Name" value="{{$student->lastname}}">
                </div>

                <div class="col-md-4 form-group mb-3">
                    <label for="regnumber">Register Number <span class="text-danger">*</span></label>
                    <input type="text" name="regnumber" class="form-control form-control-sm rounded-0"
                        value="{{$student->regnumber}}">

                </div>



                <div class="col-md-12">
                    <label for="remark">Remark</label>

                    <textarea name="remark" id="remark" class="form-control form-control-sm rounded-0"
                        rows="3">{{$student->remark}}</textarea>

                </div>

                <div class="col-md-6 form-group">
                    <label for="type_id">Type</label>
                    <select name="type_id" id="">
                        @foreach($types as $type)
                        <option value="{{$tag->id}}"
                        @if($type['id'] === $post['type_id'])
                        @endif>
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="attshow">Show on Att Form</label>
                    <select name="attshow" id="attshow">
                        @foreach($attshows as $attshow)
                        <option value="{{$attshow->id}}"
                        @if($attshow['id'] === $post['attshow'])
                           selected
                        @endif>
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-3 form-group">
                    <label for="status_id">Status</label>
                    <select name="attshow" id="attshow">
                        @foreach($attshows as $attshow)
                        <option value="{{$status->id}}" >
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-12 mt-5">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('students.index')}}" class="btn">Cancel</a>
                        <button class="btn btn-primary bg-secondary">Update</button>
                    </div>
                </div>


            </div>
        </form>






    </div>

</div>


@endsection