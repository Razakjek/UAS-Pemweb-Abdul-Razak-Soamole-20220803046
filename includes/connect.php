<?php 
// $con=mysqli_connect('localhost','root','','ecommercephp');
$con = new mysqli('localhost','root','','ecommercephp');
if(!$con){
    die(mysqli_error($con));
}




?>