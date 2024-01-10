@extends('layouts.adminindex')
@section('caption','Show Gender')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">

        <a href="{{route('genders.create')}}" class="btn btn-primary rounded-0 mb-3">Create</a>

        <hr/>

        <table id="mytable" class="mydata table table-info table-hover border">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Reg Number</th>
                    <th>Gender</th>
                    <th>Remark</th>
                    <th>Status</th>
                    <th>By</th>
                    <th>Crated At</th>
                    <th>Update At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genders as $idx => $gender)
                <tr>
                    <td>{{++$idx}}</td>
                    <td><a href="{{route('genders.show',$gender->id)}}">{{$gender->regnumber}}</a></td>
                    <td>{{$gender ->gender}}</td>
                    <td>{{Str::limit($gender ->remark,10)}}</td>
                    <td>{{$gender -> status_id}}</td>
                    <td>{{$gender -> user_id}}</td>
                    <td>{{$gender -> created_at->format('d-M-Y')}}</td>
                    <td>{{$gender -> updated_at->format('d-M-Y')}}</td>
                    <td>
                        <a href="{{route('genders.edit',$gender -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                        
                        <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$gender -> regnumber}}"><i class="fas fa-trash-alt"></i></a>                   
                    </td>
        
                    <form id="formdelete-{{$gender -> regnumber}}" action="{{route('genders.destroy',$gender -> id)}}" method="POST">
                        @csrf 
                        @method('DELETE')
                       
                    </form>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@endsection

@section('script')

<script type="text/javascript">

$(document).ready(function(){
    $(".delete-btns").click(function(){
        var getidx = $(this).data('idx');
        if(confirm(`Are you sure , You want to delete ${getidx}?`)){
            $("#formdelete-"+getidx).submit();
            return true;
        }else{
            return false;
        }
    });
});



 //datatable.com
    let table = new DataTable('#mytable');
    // $('#mytable').DataTable();

</script>

@endsection