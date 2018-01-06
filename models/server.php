<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 27/10/2017
 * Time: 19:56
 */

class Server{

    private $serverame;
    private $username;
    private $password;
    private $dbname;
    public $connection;

    public function __construct()
    {
        $this->servername = "127.0.0.1";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "project";
    }

    public function connect(){
        $this->connection = new mysqli($this->servername , $this->username , $this->password , $this->dbname);
        if($this->connection){
            return $this->connection;
        }else{
            return false;
        }
    }
}

$server = new Server();
$connection = $server->connect();

?>