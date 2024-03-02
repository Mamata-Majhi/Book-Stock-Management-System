<?php
include './../connection.php';

$book_id = $_REQUEST['id'];
$sql = "SELECT * FROM `book` WHERE id=$book_id;";
$result = mysqli_query($conn, $sql) or die("Query Failed! " . mysqli_error($conn));
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>View Book</title>
</head>

<body>
    <section class="text-center">
        <div>
            <div class="mb-10">
            <h2 class="font-bold text-6xl"><?php echo $row['title']; ?></h2>
            <p class="font-semi-bold text-2xl">Author: <?php echo $row['author']; ?></p>
            <p class="font-semi-bold text-2xl">Genre: <?php echo $row['genre']; ?></p>
            </div>

            <?php
            // Check if the image path is not empty
            if (!empty($row['image'])) {
                echo '<img src="./../uploaded_image' . $row['image'] . '" alt="Book Image" class="h-96 w-96 mx-auto">';
            } else {
                echo 'No image available';
            }
            ?>
        </div>
        <div class="pt-6">
            <a href="./../book/index.php"><button class="bg-blue-500 px-6 py-2 border-solid text-xl font-bold rounded-lg text-white">Back</button>
</a>
        </div>
    </section>
</body>

</html>
