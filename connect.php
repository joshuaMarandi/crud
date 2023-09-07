<?php

//database connection
$con=new mysqli('localhost','root','','mpya');

if (!$con)
{
    die (mysqli_error($con));
}
    
?>
