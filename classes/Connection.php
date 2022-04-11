<?php 

// git remote add origin https://github.com/kurtjohn2112/e-commerce.git
// git remote add ecm https://github.com/kurtjohn2112/e-commerce.git
// git push ecm master

class Connection{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'market';

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);
    }





}




?>