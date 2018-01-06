<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 29/10/2017
 * Time: 20:17
 */
include "../init.php";
class UpdateCategoryController{
    private $id;
    private $category;

    public function setIdToUpdate($id_to_update)
    {
        $this->id_to_update = $id_to_update;
    }

    public function getIdToUpdate()
    {
        return $this->id_to_update;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }
}

if(isset($_POST['updateCategory'])){
    $server = new Server();
    $connection = $server->connect();
    $updateCategory = new UpdateCategoryController();

    $updateCategory->setIdToUpdate($_POST['id']);
    $id= $updateCategory->getIdToUpdate();
    $updateCategory->setCategory($_POST['category']);
    $category = $updateCategory->getCategory();

    $query = "UPDATE categories SET category = '$category' WHERE id = '$id' ";
    $output = DbOperations::query($connection , $query);
    if($output){
        $_SESSION['success_update_category'] = true;
        header("location:../views/forms/category/ViewCategory.php");
    }else{
        print $connection->error;
    }

}
?>