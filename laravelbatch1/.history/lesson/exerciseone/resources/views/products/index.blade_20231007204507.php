@extends('layouts.app')

@section('title','Index Page')
@section('content')

<h1>Index Page</h1>

<div class="col-md-12 container mb-3"> <a href="{{route('countries.create')}}" class="btn btn-primary btn-sm rounded-0">
    Create New Country</a>
    </div> <div class="col-md-12">

    <table class="table table-sm table-hover border container"> <thead>
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>User ID</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action </th>
        </tr>

        </thead>
        <tbody> @foreach($products as $idx=>$product) <tr>
            <td>{{++$idx}}</td>
            <td><a href="{{route('countries.show',$country->id)}}">{{$country->name}}</a></td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td class="d-flex justify-content-center align-items-center">




            {{-- <a href="{{url('countries',$product['id'])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
            --}}

            <a href="{{route('products.edit',$product->id)}}" class="text-info m-3"><i class="fas fa-pen"></i></a>

            <form class="formdelete" action="{{route('products.destroy',$country->id)}}" method="POST" class="d-flex
            justify-content-center align-items-center">
            @csrf
            @method("DELETE")
            <button type="submit" class="text-danger"><i class="fas fa-trash-alt"></i></button>

            </form>
            </td>

            <td>
                <a href="#" class="btn btn-danger"
                onclick="event.preventDefault();document.getElementById('formdelete{{$country->id}}').submit();">Delete</a>
                </td>
                <form id="formdelete{{$product->id}}" action=" {{url('/countries',$country['id'])}}" method="POST">
                    {{ csrf_field()}}
                    {{method_field('DELETE')}}
                </form>
                </tr>
                @endforeach
                </tbody>

    </table>

</div>

@section('footer')


@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('.formdelete').on('submit', function () {
            if (confirm('Are you sure want to delete it?')) {
                return true;
            } else {
                return false;
            }
        })
    })

</script>


@endsection