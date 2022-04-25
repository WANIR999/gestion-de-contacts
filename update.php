 <!-- ********barnav************** -->
 <?php
 session_start();
 if(!isset($_SESSION['name'])){
  header('location:index.php');
  }
 require_once 'classes/Contacts.php';
 $contact= new contact();
 if(isset($_GET['id'])){
     $data=$contact->displayDataById('contact',$_GET['id']);  
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
 <!-- *****************************signup form******************************* --> 
 <div id="login"  class="container-fluid mt-5 mb-5 d-flex zoner reform" style=" width:95%; justify-content: space-between; border-left: solid #5fc9f3 10px;  ">
        <form action="#" method="POST" class="container-fluid d-flex mt-4 hell evol" style="width: 70%; flex-direction: column; row-gap: 5px;" >
                <label class="text-muted" for="name">name</label>
                <input id="name" type="text" name="name" value="<?= $data['name'];?>"  placeholder="   name">
                <label class="text-muted" for="phone">phone</label>
                <input id="phone" type="text" value="<?= $data['phone'];?>"  placeholder="   phone" name="phone">
                <label class="text-muted" for="em">email</label>
                <input id="em" type="text" value="<?= $data['email'];?>"  placeholder="   email" name="email">
                <label class="text-muted" for="adr">Adresse</label>
                <input id="adr" type="text" value="<?= $data['address'];?>"  placeholder="   Adresse" name="adresse">
                <input id="btnaddcntct" class="btn btn-primary mb-3 mt-2" type="submit" name="updatecnt" value="Add">
            </form>
             <div class="w-50 rn remove ">
                     <img class="w-100 h-75 mt-5 mb-3" src="./image/undraw_astronaut_re_8c33.svg" alt="image">
                 </div>
             </div>
 <!-- *********** footer***************** -->          
      <?php
      if(isset($_POST['updatecnt'])){
          if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && isset($_POST['adresse'])){
            $contact->updatecontact($_GET['id'],$_POST['name'],$_POST['phone'],$_POST['email'],$_POST['adresse']);
          }
      }
        require_once 'footer.php';
        ?>
    