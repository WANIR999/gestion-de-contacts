<!-- ********barnav************** -->
<?php
 require_once 'classes/Contacts.php';
 $contact= new contact();
 session_start();
 if(!isset($_SESSION['name'])){
  header('location:index.php');
  }
 $id=$_SESSION['id'];
 $disp=$contact->displaydata('contact',$id);
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

  <!-- ****************************creat+ display contacts form************************************** -->
  <div id="creat"  class="container-fluid mt-3 mb-5 rev" style="width:95%; justify-content: space-between; border-right: solid #5fc9f3 10px; flex-direction: row-reverse;">
        <h2 class="text-muted text-center pt-2">Contacts :</h2>
      <div class="d-flex zoner revrs "><!-- ****************************div added just to set the layout******************************* -->
        <div class="w-50 hell evol">
          <h4 class="text-muted text-center pt-2">Contacts list</h4>
          <div class="w-100 mb-1"  style="overflow: scroll; overflow-x: hidden; height: 400px; margin-top: 50px;">
           <?php foreach($disp as $data){ ?>
            <div class="card w-50 my-3 mx-auto hell evol mrg" style="width: 18rem; background:#93a7d1;">
              <img src="./image/undraw_male_avatar_323b.svg" class="card-img-top w-50 mx-auto" alt="img">
              <ul class="list-group list-group-flush">
                <li class="list-group-item my-1" style="border-radius: 10px;">Name: <?= $data['name'];?></li>
                <li class="list-group-item my-1" style="border-radius: 10px;">Phone:  <?= $data['phone'];?></li>
                <li class="list-group-item my-1" style="border-radius: 10px;">Email: <?= $data['email'];?></li>
                <li class="list-group-item my-1" style="border-radius: 10px;">Adress: <?= $data['address'];?></li>
              </ul>
               <div class="w-100 justify-content-between">
                 <a href="update.php?id=<?= $data['id'];?>" class="btn btn-primary w-25 fmin" style="font-size: 9px;"> update</a>
                 <a href="remove.php?id=<?= $data['id'];?>" class=" btn btn-primary w-25 fmin " style="font-size: 9px;">delete</a>
               </div>
            </div> 
            <?php }?>     
          </div>
          </div>
          <div class="w-50 hell evol">
            <h4 class="text-muted text-center pt-3">Add a contact</h4>
            <form action="#" method="POST" class="container-fluid d-flex mt-4 hell evol" style="width: 70%; flex-direction: column; row-gap: 5px;" >
             <label class="text-muted" for="name">name</label>
             <input id="name" type="text" name="name" placeholder="   name">
             <label class="text-muted" for="phone">phone</label>
             <input id="phone" type="text" placeholder="   phone" name="phone">
             <label class="text-muted" for="em">email</label>
             <input id="em" type="text" placeholder="   email" name="email">
             <label class="text-muted" for="adr">Adresse</label>
             <input id="adr" type="text" placeholder="   Adresse" name="adresse">
             <input id="btnaddcntct" class="btn btn-primary mb-3 mt-2" type="submit" name="add" value="Add">
         </form>
          </div>
       </div>
  
      </div> 
      <!-- <script>
          if ( window.history.replaceState ) {
              window.history.replaceState( null, null, window.location.href );
          }
    </script> -->

     <!-- *********** footer***************** -->
     <?php
        if(isset($_POST['add'])){
          if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['adresse'])){
            $contact->addcontact($id,$_POST['name'],$_POST['phone'],$_POST['email'],$_POST['adresse']);
            echo '<script> window.location.replace("contact.php");</script>';
          }
        } 
        require_once 'footer.php';
      ?>




