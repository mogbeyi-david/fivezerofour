<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 17/11/2017
 * Time: 08:58
 */

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
header("location:../index.php");