<?php

include "../models/server.php";
include "../models/DbOperations.php";


class GetPlaces
{
    public function getOnePlaces(){
        $server = new Server();
        $connection = $server->connect();
        $query = "SELECT * FROM places LIMIT 1";
        $test = mysqli_query($connection , $query);
        if($test){
            $run = mysqli_fetch_assoc($test);
            $run = json_encode($run);
            print_r($run);
        }else{
            print "No Response Received";
        }
    }
}

$getPlaces = new GetPlaces();
$getPlaces->getOnePlaces();

