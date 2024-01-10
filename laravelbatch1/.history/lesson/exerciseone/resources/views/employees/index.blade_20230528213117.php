<!DOCTYPE html>
<html>
  <head>
      <title>Employee Page </title>
      <p>This is Employee Home</p>
</head>   
<body>
    <h1>Welcome to Our blade site </h1>

    <?php
       foreach($employeesdata){
        echo $employeesdata;
       }
    ?>

</body> 
</html>