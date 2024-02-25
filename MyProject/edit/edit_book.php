<?php
include'./../connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
$data='';
$title=$_POST['title'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$price=$_POST['price'];
$image=$_POST['image'];
$isbn=$_POST['isbn'];

$conn=mysqli_query($conn,$sql);
if(isset($conn)){
    
}


?>