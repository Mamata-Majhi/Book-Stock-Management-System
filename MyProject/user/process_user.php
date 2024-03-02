<?php
include './../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $full_name = $_POST['fullname'];
    $user_name = $_POST['email'];
    $password = $_POST['password'];
    $gender=$_POST['gender'];
    

    // Inserting data into the user table
    $sql = "INSERT INTO `user` (`full_name`, `user_name`,`gender`, `password`) 
            VALUES ('$full_name', '$user_name','$gender', '$password')";
    
    // Perform the query
    $conn = mysqli_query($conn, $sql);

    if ($conn) {
        // echo "Data inserted successfully";
        header('location:/Book-Stock-Management-System/MyProject/dashboard/index.php');
    } else {
        echo "Error: ";
    }
}
?>
