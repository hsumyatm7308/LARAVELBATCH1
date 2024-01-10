@extends('layouts.adminindex')
@section('caption','Student Show')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">



        <div class="col-md-12 ">
            <a href="{{route('students.index')}}" class="btn btn-secondary btn-sm rounded-0">Close</a>
            <hr>
        </div>
       
        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <h5 class="card-title">{{$students->regnumber}}  | <span class="text-muted">{{$students->status["name"]}} </span></h5>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item fw-bold"><h6>{{$students->firstname}} {{$students->lastname}}</h6></li>
                    </ul>

                   <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fas fa-user fa-sm"></i>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                   </div>
                </div>
            </div>
            <div class="col-md-8"></div>
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