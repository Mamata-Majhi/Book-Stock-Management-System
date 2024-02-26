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
VALUES('$title','$author','$genre','$price','$isbn','$image')";
$conn=mysqli_query($conn,$sql);

if(isset($conn)){
    // echo"data inserted!!";
    // $lastInsertedId = mysqli_insert_id($conn);
    // echo "Data inserted with ID: " . $lastInsertedId;

    header('location:/Book-Stock-Management-System/MyProject/book/index.php');
}
else{
    echo"Data not inserted !!";
}

?>