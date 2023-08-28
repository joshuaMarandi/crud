
<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <div >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mama crud</title>
</head>
<body style="background-color: chocolate;">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<div class="container" >
<div class="center-container">
    <button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">Add user </a>
    </button>
</div>
    <table class="table">
        <thead>
<tr>
    <th scope="col">SI no</th>
    <th scope="col">name</th>
    <th scope="col">Email</th>
    <th scope="col">mobile</th>
    <th scope="col">password</th>
    <th scope="col">operations</th> 
</tr>
<?php
$sql="select * from rekebisha";
$result=mysqli_query($con,$sql);
if($result)
{
   while ( $row=mysqli_fetch_assoc($result))
{
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
 echo '<tr>
 <th scope="row">'.$id.'</th>
 <td>'.$name.'</td>
 <td>'.$email.'</td>
 <td>'.$mobile.'</td>
 <td>'.$password.'</td>
 <td>
    <button class="btn btn-danger"><a href="delete.php?
     deleteid='.$id.' " class="text-light">delete</a></button>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a>
    </button>
</td>
 </tr> ';
}
}
?>


 </thead>
</table>
</body>
</div>
</html>