<?php
include './../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $full_name = $_POST['fullname'];
    $user_name = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];

    $current_date = date("Y-m-d H:i:s");
    // Inserting data into the user table
    $sql = "INSERT INTO `user` (`full_name`, `user_name`,`gender`, `password`, `created`) 
            VALUES ('$full_name', '$user_name','$gender', '$password', '$current_date')";

    // Perform the query
    $conn = mysqli_query($conn, $sql);

    if ($conn) {
        // echo "Data inserted successfully";
        echo "<script>
                        alert(\"registration Successful\");
                        window.location =\"../../login.php\";
                </script>";
    } else {
        echo "Error: ";
    }
}
