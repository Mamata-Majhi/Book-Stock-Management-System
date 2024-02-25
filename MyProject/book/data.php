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

// inserting data into the book table
$sql="INSERT INTO book(title,author,genre,price,isbn,image)
VALUES('$title','$author','$genre',$price','$image','$isbn')";
$conn=mysqli_query($conn,$sql);

if(isset($conn)){
    header('location:/Book-Stock-Management-System/MyProject/dashboard/indexx.php');
}
else{
    echo"Data not inserted !!";
}

?>