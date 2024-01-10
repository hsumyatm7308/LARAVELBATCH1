@extends('layouts.app')

@section('title','Index Page')
@section('content')

<h1>Index Page</h1>

<div class="col-md-12 container mb-3"> <a href="{{route('products.create')}}" class="btn btn-primary btn-sm rounded-0">
    Create New Country</a>
    </div> <div class="col-md-12"> <table class="table table-sm table-hover border container"> <thead> <tr>
    <th>No</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>

    <th>Created At</th>
    <th>Updated At</th>
    <th>Action </th>
    </tr>

    </thead>
    <tbody> @foreach($products as $idx=>$product) <tr>
            <td>{{++$idx}}< /td> <td><a href="{{route('products.show',$product->id)}}">{{$product->name}}</a></td> <td>
                {{$product->name}}</td>
                <td>{{$product->price}}< /td> <td> <!-- <img src="{{ asset($product->image) }}" class="rounded"
                    style="width:50px;height:50px" alt="{{$product->image}}"> <img src="{{
                    asset('images/'.$product->image) }}" class="rounded" style="width:50px;height:50px"
                    alt="{{$product->image}}">
                    <img src="{{ asset('images/'.$product->image) }}" class="rounded" style="width: 50px; height: 50px"
                    alt="{{ $product->image }}">

                    <img src="{{ url($product->image) }}" class="rounded" style="width:50px;height:50px"
                    alt="{{$product->image}}">
                    <img src="{{ URL::asset('images/' . $product->image) }}" class="rounded" style="width: 50px; height:
                    50px"
                    alt="{{ $product->image }}">
                    <img src="{{ asset($product->image) }}" class="rounded" style="width: 50px; height: 50px" alt="{{
                    $product->image }}">
                    -->

                    <img src="{{ asset('storage/images/'.$product->image) }}" class="rounded" style="width: 50px;height: 50px"
                    alt="{{ $product->image }}">
                    <img src="{{ asset('storage/images/'.$product->image) }}" class="rounded"
                    style="width: 50px; height: 50px" alt="{{ $product->image }}">


                    $product->image}}

                    </td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td class="d-flex justify-content-center align-items-center">




            {{-- <a href="{{url('products',$product['id'])}}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
            --}}
            
                       
    <a href=            "{{route('products.edit',$product->id)}}" class="text-info m-3"><i class="fas fa-pen"></i></a>

                        <form class="formdelete" action="{{route('products.destroy',$product->id)}}" method="
P                       OST" class="d-flex
            justify-content-center align-items-center">
                        @csrf
                            @method("DELETE")                </td> ?button
                      <
        td>
                <a href="#" class="btn btn-danger"
                        onclick="event.preventDefault();document.getElementById('formdelete{{$product->id}}').submit();">Delete</a>
                </td>
                        <form id="formdelete{{$product->id}}" action=" {{url('/products',$product['id'])}}" method="POST">
                        ?/td? {{method_field('DELETE')}}
                       
                </form>
                    >
                            @endforeach
                        </tbody>
                
tabl

   </di         @s      }