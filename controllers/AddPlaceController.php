<?php

session_start();
include "../models/server.php";
include "../models/DbOperations.php";
class AddPlaceController{

    private $name;
    private $activities;
    private $description;
    private $description_sub;
    private $description_gate;
    private $description_hostel;
    private $address;

    public function getActivities()
    {
        return $this->activities;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDescriptionGate()
    {
        return $this->description_gate;
    }

    public function getDescriptionHostel()
    {
        return $this->description_hostel;
    }

    public function getDescriptionSub()
    {
        return $this->description_sub;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setActivities($activities)
    {
        $this->activities = $activities;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setDescriptionGate($description_gate)
    {
        $this->description_gate = $description_gate;
    }

    public function setDescriptionHostel($description_hostel)
    {
        $this->description_hostel = $description_hostel;
    }

    public function setDescriptionSub($description_sub)
    {
        $this->description_sub = $description_sub;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

if(isset($_POST['addPlace'])){
    $server = new Server();
    $connection = $server->connect();


    $addPlace = new AddPlaceController();
    $addPlace->setActivities($_POST['activities']);
    $addPlace->setAddress($_POST['address']);
    $addPlace->setDescription($_POST['description']);
    $addPlace->setDescriptionGate($_POST['description_gate']);
    $addPlace->setDescription($_POST['description']);
    $addPlace->setDescriptionHostel($_POST['description_hostel']);
    $addPlace->setDescriptionSub($_POST['description_sub']);
    $addPlace->setName($_POST['name_of_place']);
    $name = $addPlace->getName();
    $address = $addPlace->getAddress();
    $activities = $addPlace->getActivities();
    $description = $addPlace->getDescription();
    $description_sub = $addPlace->getDescriptionSub();
    $description_hostel = $addPlace->getDescriptionHostel();
    $description_gate = $addPlace->getDescriptionGate();

    $query = "INSERT INTO places(name_of_place,address,description,activities,description_sub,description_hostel,description_gate)
              VALUES('$name', '$address' , '$description' , '$activities' ,'$description_sub','$description_hostel','$description_gate')";
    $test = DbOperations::query($connection,$query);
    if($test){
        $_SESSION['success_add_category'] = true;
        header("location:../views/forms/places/AddPlace.php");
    }

}

?>