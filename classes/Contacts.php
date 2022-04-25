<?php
require_once 'Database.php';
  class contact extends Database{    
    // ************************add contact method*********************************
    public  function addcontact($id,$name,$phone,$email,$address){
            $con= Database::connect();
            $added= $con->query("INSERT INTO contact (name,phone,email,address,id_user) VALUES ('$name','$phone','$email','$address','$id')");
         
    }
    // ************************update contact method*********************************
    public  function updatecontact($id,$name,$phone,$email,$address){
             $con= Database::connect();
             $added= $con->query("UPDATE contact SET name='$name',phone='$phone',email='$email',address='$address' WHERE id='$id'");
             header('location:contact.php');    
    }
     // ************************display methods*********************************
    public  function displayData($table,$id){
          $con= Database::connect();
          $search= $con->query("SELECT * FROM $table WHERE id_user='$id' ORDER BY id DESC ");
          $a= $search->fetchall(PDO::FETCH_ASSOC);
          return $a;
     }
    public  function displayDataById($table,$id){
          $con= Database::connect();
          $search= $con->query("SELECT * FROM $table WHERE id='$id' ");
          $a= $search->fetch(PDO::FETCH_ASSOC);
          return $a;
     }
//      ******************************delete method*************************************
public  function removeById($table,$id){
      $con= Database::connect();
      $search= $con->query("DELETE FROM $table WHERE id='$id' ");
      $a= $search->fetch(PDO::FETCH_ASSOC);
      header('location:contact.php');
      return $a;
}
//      ******************************check cnx method*************************************
  public function checking(){
        if(!isset($_SESSION['name'])){
              header('location:index.php');
        }
  }

     
}