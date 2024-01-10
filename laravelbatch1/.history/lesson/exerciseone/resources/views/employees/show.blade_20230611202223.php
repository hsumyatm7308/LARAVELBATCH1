<!DOCTYPE html>
<html>
  <head>
      <title>Employee Page </title>
      <p>This is Employee Home</p>
</head>   
<body>
    <h1>Welcome to Our blade site </h1>

     <p>This is Employess Show </p>

     @php 
      echo "<pre>".print_r($employeesdata,true)."</pre>";
      echo $employeesdata['name'];
      echo $employeesdata['email'];
      echo $employeesdata['phone'];
     @endphp 

      <ul>
        @foreach($employeesdata as $value)

        <li>{!!$value!!}</li>
        @endforeach
</ul>
</body> 
</html>

<!-- 28EN  -->