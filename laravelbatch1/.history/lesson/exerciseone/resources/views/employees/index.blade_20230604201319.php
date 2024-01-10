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

</body> 
</html>

<!-- 28EN  -->