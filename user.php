<?php
include  'connect.php';
if (isset($_POST['submit']))
{
   $id=$_POST['id'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'] ;
 $sql="insert into rekebisha (id,name,email,mobile,password)
  values ('$id','$name','$email','$mobile','$password')";
 $result=mysqli_query($con,$sql);
if($result)
{
    echo "Data inserted succesful";
}
else{
    die (mysqli_error($con));
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>mama crud</title>
  </head>
  <body style="background-color: chocolate;">
  <div>

  </div>
   <div class="container my-5">

    <form method="post">
   <div class="form-group">
    <label>id</label>
    <input type="text" class="form-control"  placeholder="Enter your id" name="id" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>mobile</label>
    <input type="text" class="form-control"  placeholder="Enter your mobile number" name="mobile" autocomplete="off">  
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control"  placeholder="Enter your password" name="password" autocomplete="off">  
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
  <style>
    .form-control{
      background-color: beige;
    }
  </style>
</html>