@extends('layouts.adminindex')
@section('caption','Country List')
@section('content')

<!--Start Page Content Area-->

<div class="container-fluid">

    <div class="col-md-12">  
    
    <a href="{{route('countries.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
    <hr/>


    <table id="mytable" class="mydata table table-warning table-hover border">
    <thead>
        <tr>
            <th>No</td>
            <th>Reg Number</th>
            <th>Country</th>
            <th>Remark</th>
            <th>Status</th>
            <th>By</th>
            <th>Crated At</th>
            <th>Update At</th>
            <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
        
        @foreach($countries as $idx=>$country)
        <tr>
            <td>{{++$idx}}</td>
            <td><a href="{{route('countries.show',$country->id)}}">{{$country->regnumber}}</a></td>
            <td>{{$country->country}} </td>

            <td>{{Str::limit($country -> remark,10)}}</td> 
            <td>{{$country->status_id}}</td>
            <td>{{$country->user_id}}</td>
            <td>{{$country->created_at->format('d-M-Y')}}</td>
            <td>{{$country->updated_at->format('d-M-Y')}}</td>
           
            <td>
                <a href="{{route('countries.edit',$country -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                
                <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$country -> regnumber}}"><i class="fas fa-trash-alt"></i></a>                   
            </td>
            <form id="formdelete-{{$country -> regnumber}}" action="{{route('countries.destroy',$country -> id)}}" method="POST">
                @csrf 
                @method('DELETE')
               
            </form>
        
        </tr> 
        @endforeach

    </tbody>
    </table>

    </div>

</div>
           
<!--End Page Content Area-->

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