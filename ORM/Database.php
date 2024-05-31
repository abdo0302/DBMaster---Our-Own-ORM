<?php
   class Database{
    private $conn;

    public function __construct($host, $dbname, $username, $password){
        $this->conn=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

     public function query($sql){
        return $this->conn->query($sql);
     }
    
   }



?>