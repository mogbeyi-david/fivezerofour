<?php

/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 06/11/2017
 * Time: 17:56
 */

include "../models/server.php";
include "../models/DbOperations.php";

class GetCategory
{
    public function getAllCategory(){
        $server = new Server();
        $connection = $server->connect();
        $query = "SELECT * FROM categories";
        $test = mysqli_query($connection , $query);
        if($test){
            $row = mysqli_fetch_all($test);
            $output = json_encode($row);
            print $output;
        }

    }
}

$getPlaces = new GetCategory();
$getPlaces->getAllCategory();
