 <!-- ********barnav************** -->
<?php
 include 'navbar.php';
?>
 <!-- *****************************signup form******************************* --> 
 <div id="login"  class="container-fluid mt-5 mb-5 d-flex zoner reform" style=" width:95%; justify-content: space-between; border-left: solid #5fc9f3 10px;  ">
      <form action="#" method="POST" class="container-fluid d-flex mt-5 hell evol mrg" style=" order: 2; width: 30%; flex-direction: column; row-gap: 10px;" >
      <h2 class="text-muted text-center">Sign-up</h2>
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
        include 'footer.php';
    ?>

 <?php
    require_once "user.php";
    $user= new user();
   if(isset($_POST["signup"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
     if($_post["password"]==$_post["passwordv"]){$pass =hash('sha256', $_POST["password"]);}
    $date=date("D, d M Y H:i:s");
    $table="users";

    if (!empty($name) && !empty($pass)) {
            if ($user->searchByName($name,$table) > 0) {
                header('location:signin.php?error= email existe already ');
              } else {
                    $user->addUser($id,$name,$pass,$date,$table);
                    }
                }
            }
?>