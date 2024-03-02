<?php
include'./../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Add Book</title>
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    $sql="SELECT * FROM book";
    $result=mysqli_query($conn,$sql);
    // if(isset($result))
    // {
    //     echo"hey !!";
    // }
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Book List</h5>
                <a href="./add_book.php" class="btn btn-primary">Add Book</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Auther</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <!-- <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Sample Title 1</td>
                            <td>Sample Author 1</td>
                            <td>Sample Genre 1</td>
                            <td>$10.00</td>
                            <td>sample-image-1.jpg</td>
                            <td>1234567890</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">View</button>
                                <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Sample Title 2</td>
                            <td>Sample Author 2</td>
                            <td>Sample Genre 2</td>
                            <td>$20.00</td>
                            <td>sample-image-2.jpg</td>
                            <td>0987654321</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm">View</button>
                                <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()">Delete</button>
                            </td>
                        </tr>
                    </tbody> -->
                    <?php
                    $counter=0;
                    if(mysqli_num_rows($result)>0){
                        while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo ++$counter?></td>
                                <td><?php echo $rows['title'];?></td>
                                <td><?php echo $rows['author'];?></td>
                                <td><?php echo $rows['genre'];?></td>
                                <td><?php echo $rows['price'];?></td>
                                <td><?php echo $rows['image'];?></td>
                                <td><?php echo $rows['isbn'];?></td>

                                <td><button type="submit" class="hover:text-blue-500 transition duration-400 ease-in-out"><a href="./php/view.php?id=<?php echo $rows['id'];?>">View</a></button>
                                <button type="submit" class="hover:text-blue-500 transition duration-400 ease-in-out"><a href="./../edit/edit_book.php?id=<?php echo $rows['id'];?>">Edit</a></button>
                                <button type="submit" class="text-red-500 hover:text-red-900 transition duration-400 ease-in-out"><a href="./../delete/delete_book.php?id=<?php echo $rows['id'];?>">Delete</a></button></td>
                                


                            </tr>
                            <?php
                        }
                    }
                    ?> 
                    
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            if (window.confirm("Are you sure you want to delete ?")) {
                // Proceed with deletion logic here
                alert("Item deleted!"); // Example alert, replace with actual deletion logic
            }
        }
    </script>
</body>

</html>