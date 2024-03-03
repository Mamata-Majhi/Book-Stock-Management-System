<?php
session_start();
include("../connection.php");
if (isset($_GET['id'])) {
    // Retrieve user ID from the session or wherever it's stored
    $user_id = $_SESSION["id"];

    // Retrieve book ID from the URL parameter
    $book_id = $_GET['id'];
    include("../book/booklist.php");

    // Find the book with the matching ID
    $selected_book = null;
    foreach ($books as $book) {
        if ($book['id'] == $book_id) {
            $selected_book = $book;
            break;
        }
    }

    // Retrieve other details
    $purchase_date = date("Y-m-d"); // Current date
    $total_amount = $selected_book['price']; // Assuming total amount is equal to the book's price
    $quantity = 1; // Assuming quantity is always 1
    $per_unit_price = $selected_book['price']; // Assuming per unit price is equal to the book's price

    // Prepare and execute the SQL INSERT query
    $sql = "INSERT INTO `purchase` (`user_id`, `book_id`, `purchase_date`, `total_amount`, `quantity`, `per_unit_price`) 
            VALUES ('$user_id', '$book_id', '$purchase_date', '$total_amount', '$quantity', '$per_unit_price')";

    if ($conn->query($sql) === TRUE) {
        echo "Purchase recorded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo 'Book ID not provided.';
}

// Close database connection
$conn->close();
