<?php
include'./../connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM book WHERE id=".$id;
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:/Book-Stock-Management-System/MyProject/book/index.php');

    }
    else{
        echo"Book not deleted!!";
    }

}
?>