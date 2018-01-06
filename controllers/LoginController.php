<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 28/10/2017
 * Time: 10:36
 */
include "../init.php";
class LoginController{

    private $email;
    private $password;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

if(isset($_POST['login'])){
    $server = new Server();
    $connection = $server->connect();
    $login = new LoginController();
    $login->setPassword($_POST['email']);
    $login->setEmail($_POST['password']);
    $email = $login->getEmail();
    $password = $login->getPassword();
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $output = DbOperations::query($connection , $query);
    if($output){
        header("location:../views/template/profile_page.php");
    }else{
        print $connection->error;
    }
}


?>