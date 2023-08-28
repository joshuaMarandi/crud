<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from rekebisha where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
if (isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $password=$_POST['password'] ;

 $sql="update rekebisha set id='$id', 
 name='$name', email='$email', 
 mobile='$mobile', password='$password' where id='$id'";
 $result=mysqli_query($con,$sql);
if($result)
{
    //echo "Date inserted succesfully"; 
    header('location: display.php');
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
  <div style="align-items:center; text-align:center; font: size 70px; ">
    <p style="font-size: 50px;">Update your information here</p>
  </div>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control"  
    placeholder="Enter your name" name="name" 
    autocomplete="off" value=<?php echo $name;?>>  
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control"  
    placeholder="Enter your email" 
    name="email" autocomplete="off" value=<?php echo $email;?>>  
  </div>
  <div class="form-group">
    <label>mobile</label>
    <input type="text" class="form-control"  
    placeholder="Enter your mobile number" 
    name="mobile" autocomplete="off" value=<?php echo $mobile;?>>  
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control"  
    placeholder="Enter your password" 
    name="password" autocomplete="off" value=<?php echo $password;?>>  
  </div>
  <button type="submit" class="btn btn-primary" name="submit">update</button>
  <button  class="btn btn-primary" name="submit"><a href="display.php"></a>cancel</button>
</form>
   </div>
<style>
  .form-control{
    background-color: beige;
  }
</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>