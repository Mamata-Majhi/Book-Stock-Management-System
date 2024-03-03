<?php

session_start();
include './../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];

    // Specify your image folder path
    $imagePath = './../uploaded_image';
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageDestination = $imagePath . $imageName;

    move_uploaded_file($imageTmpName, $imageDestination);

    $user_id =$_SESSION['id'];


    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO book (title, author, genre, price, isbn, image, user_id) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssssssi", $title, $author, $genre, $price, $isbn, $imageName, $user_id);



    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('location:/Book-Stock-Management-System/MyProject/book/index.php');
    } else {
        echo "Data not inserted: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>



?>