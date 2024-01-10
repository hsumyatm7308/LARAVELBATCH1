@extends('layouts.adminindex')
@section('caption',"post Show")
@section('content')

<!--Start Page Content Area-->

<div class="container-fluid">

    <div class="col-md-12">

    <a href="{{route('posts.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>
        <a href="{{route('posts.index')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Enroll</a>
        <hr />

        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header">

                        <h5 class="card-title">{{$post->name}} </h5>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item fw-bold"><img src="{{asset($post -> image)}}" class="rounded-circle"
                                width="20" height="20" /></li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["tag"]["name"]}}</span>
                                <br>
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["tag"]["name"]}} : {{$post->fee}}</span>
                                <br>
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{ optional($post->user)['name'] }}</span>

                                <br>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-file fa-sm"></i>
                                <span>{{ optional($post->attstatus)['name'] }}</span>
                                <br>

                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($post->created_at))}} | {{date('h:i:s
                                    A',strtotime($post->created_at))}}</span>
                                <br />

                                <i class="fas fa-edit fa-sm"></i>
                                <span>{{date('d M y h:i:s A',strtotime($post->updated_at))}}</span>
                            </div>

                            <div class="col-md-6">
                                <i class="fas fa-calender fa-sm">
                                    <span>
                                        @foreach($dayables as $dayable)
                                        {{$dayable['name']}} ,
                                        @endforeach
                                    </span>
                                </i>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card-box rounded-0">
                    <ul class="list-group text-center rounded-0">
                        <li class="list-group-item active">Information</li>
                    </ul>
                    {{-- start remark --}}
                    <table class="table table-sm table-border">
                        <thead>
                            <tr>
                                <th>Info....</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$post->content}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- end remark --}}
                </div>

                <div class="col-md-12">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <!-- message area  -->
                            <ul class="list-group chat-boxs">
                                @foreach($comments as $comment)
                                <li class="list-group-item mt-2">
                                    <div>
                                        <p>{{$comment->description}}</p>

                                    </div>
                                    <div>
                                        <span class="small fw-bold float-end"> {{$comment->user_id}} |
                                            {{$comment->created_at->diffForHuman()}}</span>

                                    </div>

                                </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="card-body border-top">
                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf

                                <div class="col-md-12 d-flex justify-between">
                                    <textarea name="description" id="description"
                                        class="form-control border-0 rounded-0" placeholder="Comment here..." rows="1"
                                        style="resize:none"></textarea>
                                    <button type="submit" class="btn btn-info btn-sm text-light ms-3"><i
                                            class="fas fa-paper-plane"></i></button>
                                </div>

                                <!-- start hidden fields -->
                                <input type="hidden" name="commentable_id" id="commentable_id" value="{{ $post->id }}">
                                <input type="hidden" name="commentable_type" id="commentable_type"
                                    value="App\Models\Post">
                            </form>


                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<!--End Page Content Area-->



<div id="editmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Edit Form</h6>
                <button type="category" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST" enctype="multipart/form-data">
           
                    {{csrf_field()}}
                    {{method_field('PUT')}}
            
                   <div class="row align-items-end">
                       <div class="col-md-7 form-group">
                           <label for="remark"> Remark <span class="text-danger">*</span></label>

                           <textarea type="text" name="remark" id="remark" class="form-control form-control-sm rounded-0" placeholder="Enter Remark"  />
                       </div>

                       <div class="col-md-3 form-group">
                        <label for="name"> Status <span class="text-danger">*</span></label>
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

            <div class="modal-footer">

            </div>

        </div>
    </div>
</div>

@endsection

@section('css')
<style type="text/css">
    .chat-boxs {
        height: 200px;
        overflow-y: scroll;
    }
</style>
@endsection

@section('scripts')
@endsection