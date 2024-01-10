<!DOCTYPE html>
<html>
  <head>
      <title>Employee Page </title>
</head>   
<body>
    <h1>Welcome to Our blade site </h1>
    <p>This is edit page</p>

    @php 
      echo "<pre>".print_r($data,true)."</pre>";
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