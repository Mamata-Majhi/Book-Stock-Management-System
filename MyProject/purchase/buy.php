<?php
session_start();
include("../connection.php");

if (!isset($_SESSION["id"])) {
    exit("You need to login first.");
}
$user_id = $_SESSION["id"];


// Function to handle form submission and rating insertion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {

        $book_id = $_POST['id'];
        $rating = $_POST['rating'] ?? 0;

        echo $rating;

        insert_rating($user_id, $book_id, $rating);

        // Trigger recommendation system
        recommend($user_id, $book_id);
        echo '<script>
    alert("Rating Success");
    window.location.href = "../dashboard/index.php";
</script>';
        exit();
    } else {
        echo "Error: Book ID or rating is missing.";
        exit();
    }
} else {
    echo "Error: Form submission method is not POST.";
    exit();
}

function insert_rating($user_id, $book_id, $rating)
{
    
    global $conn;
    

    $sql = "INSERT INTO rating (user_id, book_id, rating) VALUES ($user_id, $book_id, $rating)";
    
    mysqli_query($conn, $sql);
}

function recommend($user_id, $book_id)
{
    include("../connection.php");

    $sql = "SELECT * FROM book WHERE id = $book_id";
    $result = mysqli_query($conn, $sql);
    $selected_book = mysqli_fetch_assoc($result);

    if ($selected_book) {
        // Extract relevant features of the selected book (e.g., genre, author)
        $selected_genre = $selected_book['genre'];
        $selected_author = $selected_book['author'];

        // Define a similarity threshold (you may adjust this based on your requirements)
        $similarity_threshold = 0.5;

        $sql = "SELECT * FROM book WHERE genre = '$selected_genre' OR author = '$selected_author'";
        $result = mysqli_query($conn, $sql);

        // Iterate through the result set to filter out similar books and calculate scores
        $recommendations = array();
        while ($row = mysqli_fetch_assoc($result)) {
            // Calculate similarity score based on genre and author
            $genre_similarity = ($selected_genre == $row['genre']) ? 1 : 0;
            $author_similarity = similar_text($selected_author, $row['author']) / 100;

            $overall_similarity = ($genre_similarity + $author_similarity) / 2;

            if ($overall_similarity >= $similarity_threshold) {
                $score = calculate_score($row['id']);

                $sql = "INSERT INTO recommendation (user_id, book_id, score) VALUES ($user_id, {$row['id']}, $score)";
                mysqli_query($conn, $sql);
            }
        }
    }
}

function calculate_score($book_id)
{
    return rand(1, 100);
}
