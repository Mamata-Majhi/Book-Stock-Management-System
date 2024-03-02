<?php
include './../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];

    // Handle file upload
    $image = ''; // initialize or retrieve existing image value
    if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'path/to/uploaded_images/' . $image);
    }

    $sql = "UPDATE `book` SET `title`='$title', `author`='$author', `genre`='$genre', `price`='$price', `isbn`='$isbn', `image`='$image' WHERE id=" . $id;
    $conn = mysqli_query($conn, $sql);

    if ($conn) {
        echo "Data updated successfully!";
        // header('location:/Book-Stock-Management-System/MyProject/book/index.php');
        exit();
    } else {
        echo "Data not updated!";
    }
}
?>
