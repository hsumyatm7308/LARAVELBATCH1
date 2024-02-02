@extends('layouts.adminindex')
@section('caption',"announcement List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">  
        
        <a href="{{route('announcements.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
        <hr/>


        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td>
                <th>Title</th>
                <th>Class</th>
              
                <th>By</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
            @foreach($announcements as $idx=>$announcement)
            <tr>
                <td>{{++$idx}}</td>
               
                <td><img src="{{asset($announcement -> image)}}" class="rounded-circle" width="20" height="20" /><a href="{{route('announcements.show',$announcement->id)}}">{{Str::limit($announcement->title,20)}}</a></td>

                <td><a href="{{asset('posts.show',$announcement->post_id)}}">{{$announcement->post['title']}}</a></td>

                
                <td>{{$announcement->user['name']}}</td>
                <td>{{$announcement->created_at->format('d-M-Y')}}</td>
                <td>{{$announcement->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="{{route('announcements.edit',$announcement -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$announcement -> id}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$announcement -> id}}" action="{{route('announcements.destroy',$announcement -> id)}}" method="announcement">
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


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" type="text/css">
 
@endsection

{{-- Str = string --}}
{{-- Str::limit($announcement -> remark,10) --}}

@section('script')

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $('.delete-btns').click(function(){
            // console.log("hi");
            var getidx = $(this).data('idx');

            if(confirm(`Are you sure !!! you want to delete ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });
    });


    //datatable.com
    // let table = new DataTable('#mytable');
    $('#mytable').DataTable();
</script>

@endsection 