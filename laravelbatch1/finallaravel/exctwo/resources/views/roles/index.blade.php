@extends('layouts.adminindex')
@section('caption',"Role List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">  
        
        <a href="{{route('roles.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
        <hr/>



    <div class="col-md-12">
        <form action="" method="">
            <div class="row justify-content-end">
                <div class="col-md-2 col-sm-6 mb-2">
                    <div class="form-group">
                        <select name="filterstatus_id" id="filterstatus_id" class="form-control form-control-sm rounded-0">
                            <option value="" selected>Choose Status...</option>
                            @foreach($filterstatuses as $id => $name)
                            <option value="{{$id}}">{{$name}}</option>                              

              
                            @endforeach
                        </select>
                    </div>

                </div>

            </div>
        </form>

    </div>
    

        <div class="col-md-12">

        <table id="mytable" class="mydata table table-warning table-hover border">
            <thead>
                <tr>
                    <th>No</td>
                    <th>Name</th>
                    <th>Status</th>
                    <th>By</th>
                    <th>Crated At</th>
                    <th>Update At</th>
                    <th>Action</th>
                   
                </tr>
            </thead>
            <tbody>
                
                @foreach($roles as $idx=>$role)
                <tr>
                    {{-- <td>{{++$idx}}</td> --}}
                    <td>{{$idx+ $roles->firstItem()}}</td>
                   
                    <td><img src="{{asset($role -> image)}}" class="rounded-circle" width="20" height="20" /><a href="{{route('roles.show',$role->id)}}">{{$role->name}}</a></td>
    
                    <td>{{$role->status->name}}</td>
                    <td>{{$role->user['name']}}</td>
                    <td>{{$role->created_at->format('d-M-Y')}}</td>
                    <td>{{$role->updated_at->format('d-M-Y')}}</td>
                   
                    <td>
                        <a href="{{route('roles.edit',$role -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                        
                        <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$role -> id}}"><i class="fas fa-trash-alt"></i></a>                   
                    </td>
                    <form id="formdelete-{{$role -> id}}" action="{{route('roles.destroy',$role -> id)}}" method="POST">
                        @csrf 
                        @method('DELETE')
                       
                    </form>
                
                </tr> 
                @endforeach
    
            </tbody>
            </table>
            {{$roles->links('pagination::bootstrap-4')}}
    
             </div>

        </div>

    </div>
               
<!--End Page Content Area-->

@endsection

{{-- Str = string --}}
{{-- Str::limit($role -> remark,10) --}}

@section('script')

<script type="text/javascript">

//   Start Filter 
const getfilterstatus = document.getElementById('filterstatus_id');
  getfilterstatus.addEventListener('click',function(){
    // console.log('hi')
    // const getstatusid = this.value;
    const getstatusid = this.value || this.options[this.selectedIndex].value;

    const getcururl = window.location.href;

    window.location.href = getcururl.split('?')[0] + '?filterstatus_id='+getstatusid;
    console.log(getstatusid)
  })
// End Filter 

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

</script>

@endsection 