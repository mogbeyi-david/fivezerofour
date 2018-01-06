<?php
session_start();
include "../models/server.php";
if(isset($_POST['deleteCategory'])){
    $id = $_POST["id"];
    $query = "DELETE FROM categories WHERE id = '$id'";
    $result = mysqli_query($connection , $query);
    if($result){
        $_SESSION['success_delete_category'] = true;
        header("location:../views/forms/category/ViewCategory.php");
    }else{
        print $connection->error;
    }
}
?>