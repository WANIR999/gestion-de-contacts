<!-- ********barnav************** -->
<?php
 include 'navbar.php';
 include 'signup.php';
?>
    <!-- **********************************login form**************************************** -->
<div id="login"  class="container-fluid mt-5 mb-5 d-flex zoner reform" style=" width:95%; justify-content: space-between; border-left: solid #5fc9f3 10px;  ">
      <form action="" class="container-fluid d-flex mt-5 hell evol mrg" style=" order: 2; width: 30%; flex-direction: column; row-gap: 10px;" >
           <h2 class="text-muted text-center">Log-in</h2>
          <label class="text-muted" for="name">Username</label>
          <input id="name" type="text" name="name" placeholder="   username">
          <label class="text-muted" for="pass">Password</label>
          <input id="pass" type="password" placeholder="   password" name="password">
          <input id="btn" class="btn btn-primary mb-2 mt-2" type="submit" name="login" value="Login">
            <h6 class="text-muted fs-6 mb-4">you have no account? <a  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn">Sign-up</a></h6>
      </form>
      <div class="w-50 rn evol" style="order: 1;">
        <img class="w-100 mb-3 evol circl mrg" src="./image/undraw_contact_us_re_4qqt.svg" alt="image">
      </div>
    </div>
     <!-- *********** footer***************** -->
     <?php
        include 'footer.php';
    ?>