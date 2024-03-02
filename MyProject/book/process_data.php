<?php
include'./../connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
$data='';
$title=$_POST['title'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$price=$_POST['price'];
// $image=$_FILES['image'];
$isbn=$_POST['isbn'];

// Handle image upload
$imagePath = './../uploaded_image';  // Specify your image folder path
$imageName = $_FILES['image']['name'];
$imageTmpName = $_FILES['image']['tmp_name'];
$imageDestination = $imagePath . $imageName;

move_uploaded_file($imageTmpName, $imageDestination);

// inserting data into the book table
$sql="INSERT INTO book(title,author,genre,price,isbn,image,user_id)
VALUES('$title','$author','$genre','$price','$isbn','$imageName',3)";
$conn=mysqli_query($conn,$sql);

if(isset($conn)){
    // echo"data inserted!!";
    // $lastInsertedId = mysqli_insert_id($conn);
    // echo "Data inserted with ID: " . $lastInsertedId;

    header('location:/Book-Stock-Management-System/MyProject/book/index.php');
}
else{
    echo"Data not inserted !!" . mysqli_error($conn);
}


?>