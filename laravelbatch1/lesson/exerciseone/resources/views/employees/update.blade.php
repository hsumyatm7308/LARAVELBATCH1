<!DOCTYPE html>
<html>
  <head>
      <title>Employee Page </title>
</head>   
<body>
    <h1>Welcome to Our blade site </h1>
    <p>This is edit page</p>

   


     @php 
        echo "<pre>".print_r($employee,true)."</pre>";
    @endphp

    <ul>
        @foreach($employee as $value)
        <!-- <li>{{$value}}</li> -->
        <li>{!!$value!!}</li>
        @endforeach
    </ul>

    
</body> 
</html>

<!-- 28EN  -->