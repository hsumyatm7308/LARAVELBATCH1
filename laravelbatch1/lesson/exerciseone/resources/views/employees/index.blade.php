<!DOCTYPE html>
<html>
  <head>
      <title>Employee Page </title>
      <p>This is Employee Home</p>
</head>   
<body>
    <h1>Welcome to Our blade site </h1>

    <?php
    //    foreach($employeesdata as $value){
    //     echo $value;
    //    }
    ?>

    <!-- @php
       foreach($employeesdata as $value){
        echo $value;
       }
    @endphp -->

    <ul>
        @foreach($employeesdata as $value)
           <!-- <li>{!!$value!!} </li> -->
           <li>{!!$value!!}</li>
        @endforeach

    </ul>

    @php 

    $city = "Mandalay"

    @endphp

    @if($city === "yangon")
            <h3>Correct</h3>
        @else 
        <h3> You were wrong <h3>

    @endif

    {{$thanks}}


    {{$services}}

    {{$demo}}

</body> 
</html>

<!-- 28EN  -->