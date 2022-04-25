<!-- ********barnav************** -->
<?php
 include './classes/user.php';
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
            <a href="signup.php" class="btn text-white minfs11">Signup</a>
    </div>
    <!-- **********************************login form**************************************** -->
<div id="login"  class="container-fluid mt-5 mb-5 d-flex zoner reform" style=" width:95%; justify-content: space-between; border-left: solid #5fc9f3 10px;  ">
      <form action="#" method="POST" class="container-fluid d-flex mt-5 hell evol mrg" style=" order: 2; width: 30%; flex-direction: column; row-gap: 10px;" >
           <h2 class="text-muted text-center">Log-in</h2>
           <?php if(isset($_GET['logerror'])){ ?><div class="alert alert-danger" role="alert"><?= $_GET['logerror']; ?></div><?php }?>
          <label class="text-muted" for="name">Username</label>
          <input id="name" type="text" name="name" placeholder="   username">
          <label class="text-muted" for="pass">Password</label>
          <input id="pass" type="password" placeholder="   password" name="password">
          <input id="btn" class="btn btn-primary mb-2 mt-2" type="submit" name="login" value="Login">
            <h6 class="text-muted fs-6 mb-4">you have no account? <a  href="signup.php" class="btn">Sign-up</a></h6>
      </form>
      <div class="w-50 rn evol" style="order: 1;">
        <img class="w-100 mb-3 evol circl mrg" src="./image/undraw_contact_us_re_4qqt.svg" alt="image">
      </div>
    </div>
     <!-- *********** footer***************** -->
     <?php
       if(isset($_POST['login'])){
        $user =new user();
        if(!empty($_POST['name']) && !empty($_POST['password'])){
            $user->alertByUserName($_POST['name'],$_POST['password']);
            $user->logByUserName($_POST['name'],$_POST['password']);
            header('location:profil.php');
             }
          }






        include 'footer.php';
    ?>