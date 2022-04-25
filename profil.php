<?php
 session_start();
 if(!isset($_SESSION['name'])){
  header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
 <!-- *****************************barnav****************************************************** -->
 <div id="barnav" class="container-fluid w-100 d-flex" style=" height: 50px; justify-content: space-between; align-items: center;">
         <h5 class="text-white menu">Contact List</h5>
         <input class="d-none" type="checkbox" id="check">
        <div id="menu" style=" width: 21%; justify-content:space-between; ">
            <a href="profil.php" class="btn text-white minfs11"><?= $_SESSION['name'];?></a>
            <a href="contact.php" class="btn text-white minfs11">contact</a>
            <a href="logout.php" class="btn text-white minfs11">Logout</a>
        </div>
        <label class="text-muted fs-3 d-none add" for="check">&#9776;</label>
    </div>
  <!-- ************************hello user+ profile info******************************** -->
  <div id="welcm"  class="container-fluid mb-5 d-flex zoner reform" style="margin-top: 6%; height:400px; width:95%; justify-content: space-between;border-left: solid #5fc9f3 10px; ">
        <div class="w-50 hell evol mrg">
          <h2 class="text-muted text-center pt-3">Welcome, <span class="text-muted"><?= $_SESSION['name'];?></span>!</h2>
          <h4 class="text-muted text-center mt-4">Your profile:</h4>
          <div class="w-75 mx-auto my-3 " style=" background-color: #8594e4; border-radius: 20px 3px;">
            <ul class="py-3 ">
              <li class=" text-white mb-3 fs-4 fns">Username: <span class="text-muted ps-4"><?= $_SESSION['name'];?></span></li>
              <li class=" text-white mb-3 fs-4 fns">Sign-up date: <span class="text-muted ps-4"><?= $_SESSION['signdate'];?></span> </li>
              <li class=" text-white mb-3 fs-4 fns">Last login: <span class="text-muted ps-4"><?= $_SESSION['date'];?></span></li>
          </ul>
          </div> 
        </div>
        <div class="w-50 hell evol">
         <img class="w-100 mt-5 mb-3 evol mrg" src="./image/undraw_hello_re_3evm.svg" alt="image">
         <a href="contact.php" class="btn ms-4 text-white fs-4 minfs minfs11"  style="width:95%; background: #8594e4;">Add contacts</a>
        </div>
      </div>
     <!-- *********** footer***************** -->
     <?php
 include 'footer.php';
?>