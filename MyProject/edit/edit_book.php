<?php
// echo"edit here";
include'./../connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
$data='';
$id=$_POST['id'];
$title=$_POST['title'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$price=$_POST['price'];
$image=$_POST['image'];
$isbn=$_POST['isbn'];

$sql="UPDATE `book` SET `title`='$title',`author`='$author',`genre`='$genre',`price`='$price',`isbn`='$isbn',`image`='$image' WHERE id=".$id;
$conn=mysqli_query($conn,$sql);
if(isset($conn)){
    echo"hello edit page";
    header('location:/Book-Stock-Management-System/MyProject/book/index.php');
    exit();
}
else{
    echo"Data not updated !!";
}


?>