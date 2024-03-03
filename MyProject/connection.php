<?php
$servername="localhost";
$username="root";
$password="";

$database="bookstock";

//creating database connection
$conn = mysqli_connect($servername,$username,$password,$database);
//check connection
if (!$conn) {
    die("Database Not Connected!" . mysqli_connect_errno());
} else {
    // echo "Database Connected Successfully!";
    echo "</br>";
}

?>