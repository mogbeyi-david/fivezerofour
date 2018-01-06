<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 27/10/2017
 * Time: 22:03
 */

class DbOperations{


    public static function query($connection , $sql){
        $result = mysqli_query($connection , $sql);
        if($result){
            return $result;
        }else{
            return False;
        }
    }


}

?>