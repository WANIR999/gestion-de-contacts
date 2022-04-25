<?php
  class Database{
    public $conn;

    public static function connect(){
          $conn = new PDO("mysql:host=localhost;dbname=contactapp", "root","");
        return $conn;
    }   
}