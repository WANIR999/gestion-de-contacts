<?php
  require_once "database.php";
  class user extends database{
    public $id;
    public $name;
    public $pass; 
    public $date; 

    public function addUser($id,$name,$pass,$date,$table){
         $sql = "INSERT INTO $table SET id=:id,username=:name,password=:password,regitretime=:date";
         $q = $this->conn->prepare($sql);
         $q->execute(array(':id'=>$id,':name'=>$name,':password'=>$pass,':date'=>$date));
         return true;
         }
         public function searchByName($name,$table){
             $sql="SELECT * FROM $table WHERE username = :name";
             $q = $this->conn->prepare($sql);
             $q->execute(array(':username'=>$name));
             $data = $q->fetch(PDO::FETCH_ASSOC);
             return $data;
             }
            
   }  
?>