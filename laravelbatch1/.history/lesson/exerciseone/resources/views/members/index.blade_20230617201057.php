@extends('layouts.layout')

@section('title', 'Member page')

@section('heading')
    {{$header}}
    My First Member Template
@endsection

@section('content')
    <div>
        <h4>Hello, This is Content</h4>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>

    @php
        echo count($students);
    @endphp

    @if(count($students))
        <div>
            <!-- Display additional content for students -->
            @foreach($students as $student)
                <li>{{$student}}</li>
            @endforeach
        </div>
    @endif
@endsection

@section('footer')
    Thanks for using our platform. {{$hay}}
@endsection
