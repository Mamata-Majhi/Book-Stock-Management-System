<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <title>Add Book</title>

    <script>
        function validatePrice() {
            var priceInput = document.getElementById('price');
            var priceValue = priceInput.value.trim();
            var priceRegex = /^[0-9]+$/;

            if (!priceRegex.test(priceValue)) {
                alert('Please enter only numbers for Price.');
                priceInput.value = ''; // Clear the input
                return false;
            }
            return true;
        }

        function validateISBN() {
            var isbnInput = document.getElementById('isbn');
            var isbnValue = isbnInput.value.trim();

            if (isbnValue.length !== 13 || !/^\d+$/.test(isbnValue)) {
                alert('ISBN should be 13 digits long and contain only numbers.');
                isbnInput.value = ''; // Clear the input
                return false;
            }
            return true;
        }

        function validateForm() {
            return validatePrice() && validateISBN();
        }
    </script>
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    ?>
    <div class="container mt-5 w-50">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Book</h5>
            </div>
            <div class="card-body">
                <form action="./process_data.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <input type="hidden" name="id" value="<?php echo isset($data) ? $data['id'] : ''; ?>">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Auther</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Enter Auther" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Genre" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required  />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required />
                    </div>
                    <a type="button" href="./index.php" class="btn btn-secondary bg-secondary">Back</a>
                    <button type="submit" class="btn btn-success bg-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>