<?php

include "AddPlaceController.php";
class UpdatePlaceController extends AddPlaceController{

    private $id;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}

if(isset($_POST['updatePlace'])){
    $server = new Server();
    $connection = $server->connect();


    $updatePlace = new UpdatePlaceController();
    $updatePlace->setActivities($_POST['activities']);
    $updatePlace->setAddress($_POST['address']);
    $updatePlace->setDescription($_POST['description']);
    $updatePlace->setDescriptionGate($_POST['description_gate']);
    $updatePlace->setDescription($_POST['description']);
    $updatePlace->setDescriptionHostel($_POST['description_hostel']);
    $updatePlace->setDescriptionSub($_POST['description_sub']);
    $updatePlace->setName($_POST['name_of_place']);
    $updatePlace->setId($_POST['id']);

    $id = $updatePlace->getId();
    $name = $updatePlace->getName();
    $address = $updatePlace->getAddress();
    $activities = $updatePlace->getActivities();
    $description = $updatePlace->getDescription();
    $description_sub = $updatePlace->getDescriptionSub();
    $description_hostel = $updatePlace->getDescriptionHostel();
    $description_gate = $updatePlace->getDescriptionGate();

    $query = "UPDATE places SET
          name_of_place = '$name',
          address = '$address',
          activities = '$activities',
          description = '$description',
          description_sub = '$description_sub',
          description_gate = '$description_gate',
          description_hostel = '$description_hostel'
          WHERE id='$id'
    ";
    $test = DbOperations::query($connection,$query);
    if($test){
        $_SESSION['success_update_place'] = true;
        header("location:../views/forms/places/ViewPlace.php");
    }

}
?>