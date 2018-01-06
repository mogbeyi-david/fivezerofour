<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 27/10/2017
 * Time: 20:12
 */

spl_autoload_register(function ($class_name){
    include "models/" . $class_name  .".php";
});

spl_autoload_register(function ($class_name){
    include "controllers/" . $class_name  .".php";
});
?>