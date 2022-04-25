<?php
require_once 'Database.php';
  class User extends Database{
    // ************************registre method*********************************
    public static function addUsers($name,$pass){
          $con= Database::connect();
          $added= $con->query("INSERT INTO users (username,password,regitretime) VALUES ('$name','$pass',sysdate())");
          return $added;
    }
     // ************************verifying is the username exist method*********************************
    public  function logByUserName($name,$pass){
          $con= Database::connect();
          $search= $con->query("SELECT * FROM users WHERE username='$name'");
          $data = $search->rowCount();
          if($data!=0){
              $a= $search->fetch(PDO::FETCH_ASSOC);
            if($data && password_verify($pass,$a['password'])){
               session_start();
               $_SESSION['name']=$a['username'];
               $_SESSION['id']=$a['id'];
               $_SESSION['date']=date('Y-m-d H:i:s');
               $_SESSION['signdate']=$a['regitretime'];
            }
          }
     }
     // ************************verifying is the username exist method*********************************
    public  function alertByUserName($name){
          $con= Database::connect();
          $search= $con->query("SELECT * FROM users WHERE username='$name'");
          $data = $search->rowCount();
          if($data==0){
                header('location:signform.php?logerror= please check your password or username');
            }
          }

     // ************************show alerts method*********************************
     public static function SignFormAlerts($name,$pass,$passver){
          if(isset($_POST['signup'])){
              if(empty($name) || empty($pass) || empty($passver)){header('location:signup.php?signup=all the inputs are required!!');}
              if($pass!=$passver){ header('location:signup.php?signup=password compatibilities issue!!');}
              if(!empty($name) && !empty($pass) && ($pass==$passver) ){ header('location:signup.php?signin=added successfully!!');}
              }

        }
         // ************************session start method*********************************
  

     
}