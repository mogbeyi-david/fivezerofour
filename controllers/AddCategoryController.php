<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 06/11/2017
 * Time: 16:59
 */

include "../models/server.php";
include "../models/DbOperations.php";
session_start();
class AddCategoryController{

    private $category;

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

if(isset($_POST['addCategory'])){
    $server = new Server();
    $connection = $server->connect();
    $addCategory = new AddCategoryController();
    $addCategory->setCategory($_POST['category']);
    $category = $addCategory->getCategory();
    $query = "INSERT INTO categories(category) VALUES ('$category')";
    $test = DbOperations::query($connection,$query);
    if($test){
        $_SESSION['success_add_category'] = true;
        header("location:../views/forms/category/AddCategory.php");
    }
}
?>