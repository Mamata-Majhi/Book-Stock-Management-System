<?php
include './../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $full_name = $_POST['fullname'];
    $user_name = $_POST['email'];
    $password = $_POST['password'];
    $gender=$_POST['gender'];
    

    // // Inserting data into the user table
    // $sql = "INSERT INTO `user` (`full_name`, `user_name`,`gender`, `password`) 
    //         VALUES ('$full_name', '$user_name','$gender', '$password')";
    
    // // Perform the query
    // $conn = mysqli_query($conn, $sql);

    // if ($conn) {
    //     // echo "Data inserted successfully";
    //     header('location:/Book-Stock-Management-System/MyProject/user/user_login.php');
    // } else {
    //     echo "Error: ";
    // }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $current_date = date("Y-m-d H:i:s");
    // Inserting data into the user table
    $sql = "INSERT INTO user (full_name, user_name,gender, password, created) 
            VALUES ('$full_name', '$user_name','$gender', '$hashed_password', '$current_date')";

    // Perform the query
    $conn = mysqli_query($conn, $sql);

    if ($conn) {
        // echo "Data inserted successfully";
        echo "<script>
                        alert(\"User Creation Successful\");
                        window.location =\"./user_login.php\";
                </script>";
    } else {
        echo "Error: ";
    }

}
?>
