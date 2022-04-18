<?php
   class database{
    private static $host='localhost';
    private static $username='root';
    private static $password='';
    private static $con='contactapp';

    public function __construct(){
         $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->con,$this->username,$this->password);
         }
        
   }