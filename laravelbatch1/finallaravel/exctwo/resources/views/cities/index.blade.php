@extends('layouts.adminindex')
@section('caption','Show City')
@section('content')

<div class="container-fluid">

    <div class="col-md-12">  
    
    <a href="{{route('cities.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
    <hr/>



    <div class="col-md-12">
        <form action="" method="">
            <div class="row justify-content-end">
                <div class="col-md-2 col-sm-6 mb-2">
                    <div class="input-group">
                        <input type="text" name="filtername" id="filtername" class="form-control form-control-sm rounded-0" placeholder="Search" value="{{request('filtername')}}">
                        <button type="button" id="btn-search" class="btn btn-secondary btn-sm"><i class="fas fa-search"></i></button>

                    </div>

                </div>

            </div>
        </form>

    </div>



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

//   Start Filter 
  const getfilterbtn = document.getElementById('btn-search');
  getfilterbtn.addEventListener('click',function(e){
    // console.log('hi')
    const getfiltername = document.getElementById('filtername').value;
    const getcururl = window.location.href;

    window.location.href = getcururl.split('?')[0] + '?filtername='+getfiltername;
    console.log(getfiltername)
    e.preventDefault();
  })
// End Filter 



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