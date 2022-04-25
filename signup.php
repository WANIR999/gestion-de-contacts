 <!-- ********barnav************** -->
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
            <a href="signform.php" class="btn text-white minfs11">Login</a>
    </div>
 <!-- *****************************signup form******************************* --> 
 <div id="login"  class="container-fluid mt-5 mb-5 d-flex zoner reform" style=" width:95%; justify-content: space-between; border-left: solid #5fc9f3 10px;  ">
      <form action="#" method="POST" class="container-fluid d-flex mt-5 hell evol mrg" style=" order: 2; width: 30%; flex-direction: column; row-gap: 10px;" >
      <h2 class="text-muted text-center">Sign-up</h2>
      <?php if(isset($_GET['signup'])){ ?><div class="alert alert-danger" role="alert"><?= $_GET['signup']; ?></div><?php }?>
      <?php if(isset($_GET['signin'])){ ?><div class="alert alert-success" role="alert"><?= $_GET['signin']; ?></div><?php }?>
                     <input id="name" type="hidden" name="id" placeholder="   username">
                     <label class="text-muted" for="name">Username</label>
                     <input id="name" type="text" name="name" placeholder="   username">
                     <label class="text-muted" for="pass">password</label>
                     <input id="pass" type="password" placeholder="   password" name="password">
                     <label class="text-muted" for="pass2">verify your password</label>
                     <input id="pass2" type="password" placeholder="   password" name="passwordv">
                     <input id="btn" class="btn btn-primary mb-4 mt-2" type="submit" name="signup" value="Sign-up">
                 </form>
             <div class="w-50 rn remove ">
                     <img class="w-100 h-75 mt-5 mb-3" src="./image/undraw_astronaut_re_8c33.svg" alt="image">
                 </div>
             </div>
 <!-- *********** footer***************** -->          
      <?php
        require_once './classes/user.php';
          if(isset($_POST['signup'])){
              $user= new user();
              $user->SignFormAlerts($_POST['name'],$_POST['password'],$_POST['passwordv']);
            if(!empty($_POST['name'])&& !empty($_POST['password'])){
                if($_POST['password']==$_POST['passwordv']){
                        $user->addUsers($_POST['name'],password_hash($_POST['password'], PASSWORD_DEFAULT));
                        header('location:signform.php');
                   }
                }
            }
        require_once 'footer.php';
        ?>
    