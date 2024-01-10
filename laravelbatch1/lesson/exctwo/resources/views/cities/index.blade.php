@extends('layouts.adminindex')
@section('caption','Show City')
@section('content')

<div class="container-fluid">

    <div class="col-md-12">  
    
    <a href="{{route('cities.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
    <hr/>


    <table id="mytable" class="mydata table table-warning table-hover border">
    <thead>
        <tr>
            <th>No</td>
            <th>Reg Number</th>
            <th>City</th>
            <th>Remark</th>
            <th>Status</th>
            <th>By</th>
            <th>Crated At</th>
            <th>Update At</th>
            <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
        
        @foreach($cities as $idx=>$city)
        <tr>
            <td>{{++$idx}}</td>
            <td><a href="{{route('cities.show',$city->id)}}">{{$city->regnumber}}</a></td>
            <td>{{$city->city}} </td>

            <td>{{Str::limit($city -> remark,10)}}</td> 
            <td>{{$city->status_id}}</td>
            <td>{{$city->user_id}}</td>
            <td>{{$city->created_at->format('d-M-Y')}}</td>
            <td>{{$city->updated_at->format('d-M-Y')}}</td>
           
            <td>
                <a href="{{route('cities.edit',$city -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                
                <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$city -> regnumber}}"><i class="fas fa-trash-alt"></i></a>                   
            </td>

            <form id="formdelete-{{$city -> regnumber}}" action="{{route('cities.destroy',$city -> id)}}" method="POST">
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
</script>

@endsection