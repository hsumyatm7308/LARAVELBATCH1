<!DOCTYPE html>
<html>
  <head>
      <title>Profile Page </title>
</head>   
<body>
    <h1>Welcome to Our site </h1>

    <li><a href="javascrit:void(0);">Home</a></li>
    <li><a href="{{URL::to('/sayhi/')}}">about </a></li>
    <li><a href="{{route('profiles')}}">Profile </a></li>
</body> 
</html>