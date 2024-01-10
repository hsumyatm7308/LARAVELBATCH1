<!DOCTYPE html>
<html>
  <head>
      <title>Data One Page </title>
      <p>This is Staff Home</p>
</head>   
<body>
    <h1>Welcome to Our site </h1>
     <p>This is Employee Data One</p>

     <h3>Hi there!!</h3>

     @php 
         echo "<pre>".print_r($students,true)."</pre>";
         echo $students[0]."<br>";
         echo $students[1]."<br>";
         echo $students[2]."<br>";
         
     @endphp


     @php 

      @foreach($students as $value)
         
      <li>{{$value}} <li>

      @endforeach

     @endphp 
</body> 
</html>