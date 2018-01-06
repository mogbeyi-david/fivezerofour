<?php
session_start();
include "../models/server.php";
if(isset($_POST['deletePlace'])){
    $id = $_POST["id"];
    $query = "DELETE FROM places WHERE id = '$id'";
    $result = mysqli_query($connection , $query);
    if($result){
        $_SESSION['success_delete_place'] = true;
        header("location:../views/forms/places/ViewPlace.php");
    }else{
        print $connection->error;
    }
}
?>