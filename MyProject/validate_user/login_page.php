
<?php
include './../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user against the database
    $query = "SELECT * FROM user WHERE full_name = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // User found in the database, redirect to the dashboard
        header('location:/Book-Stock-Management-System/MyProject/dashboard/index.php');
        exit();
    } else {
        // Invalid username or password
        header("Location: /Book-Stock-Management-System/index.php?error=1");
        exit();
    }
}
?>
