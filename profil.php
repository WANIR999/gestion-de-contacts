<!-- ********barnav************** -->
<?php
 include 'navbar.php';
?>
  <!-- ************************hello user+ profile info******************************** -->
  <div id="welcm"  class="container-fluid mb-5 d-flex zoner reform" style="margin-top: 6%; height:400px; width:95%; justify-content: space-between;border-left: solid #5fc9f3 10px; ">
        <div class="w-50 hell evol mrg">
          <h2 class="text-muted text-center pt-3">Welcome, user!</h2>
          <h4 class="text-muted text-center mt-4">Your profile:</h4>
          <div class="w-75 mx-auto my-3 " style=" background-color: #8594e4; border-radius: 20px 3px;">
            <ul class="py-3 ">
              <li class=" text-white mb-3 fs-4 fns">Username:</li>
              <li class=" text-white mb-3 fs-4 fns">Sign-up date:</li>
              <li class=" text-white mb-3 fs-4 fns">Last login:</li>
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