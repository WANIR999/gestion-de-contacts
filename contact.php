<!-- ********barnav************** -->
<?php
 include 'navbar.php';
?>
<!-- *****************************update form******************************** -->
<div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
      <div class="modal-body">
      <div id="signup"  class="container-fluid mt-5 mb-5 d-flex zoner rev hell" style="width: 150%; justify-content: space-between; border-right: solid #5fc9f3 10px; ">
     <form action="" class="container-fluid d-flex mt-4 hell evol" style="width: 100%; flex-direction: column; row-gap: 5px;" >
          <label class="text-muted" for="name">name</label>
          <input id="name" type="text" name="name" placeholder="   name">
          <label class="text-muted" for="phone">phone</label>
          <input id="phone" type="text" placeholder="   phone" name="phone">
          <label class="text-muted" for="em">email</label>
          <input id="em" type="text" placeholder="   email" name="email">
          <label class="text-muted" for="adr">Adresse</label>
          <input id="adr" type="text" placeholder="   Adresse" name="adresse">
          <input id="btnaddcntct" class="btn btn-primary mb-3 mt-2" type="submit" name="addcnt" value="Add">
     </form>
               </div>
           </div>
    </div>
</div>
  <!-- ****************************creat+ display contacts form************************************** -->
  <div id="creat"  class="container-fluid mt-3 mb-5 rev" style="width:95%; justify-content: space-between; border-right: solid #5fc9f3 10px; flex-direction: row-reverse;">
        <h2 class="text-muted text-center pt-2">Contacts :</h2>
      <div class="d-flex zoner revrs "><!-- ****************************div added just to set the layout******************************* -->
        <div class="w-50 hell evol">
          <h4 class="text-muted text-center pt-2">Contacts list</h4>
          <div class="w-100 mb-1"  style="overflow: scroll; overflow-x: hidden; height: 400px; margin-top: 50px;">
            <div class="card w-50 my-3 mx-auto hell evol mrg" style="width: 18rem; background:#93a7d1;">
              <img src="./image/undraw_male_avatar_323b.svg" class="card-img-top w-50 mx-auto" alt="img">
              <ul class="list-group list-group-flush">
                <li class="list-group-item my-1" style="border-radius: 10px;">Name:</li>
                <li class="list-group-item my-1" style="border-radius: 10px;">Phone:</li>
                <li class="list-group-item my-1" style="border-radius: 10px;">Email:</li>
                <li class="list-group-item my-1" style="border-radius: 10px;">Adress:</li>
              </ul>
               <div class="w-100 justify-content-between">
                 <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary w-25 fmin" style="font-size: 9px;"> update</button>
                 <button class=" btn btn-primary w-25 fmin " style="font-size: 9px;">delete</button>
               </div>
            </div>      
          </div>
          </div>
          <div class="w-50 hell evol">
            <h4 class="text-muted text-center pt-3">Add a contact</h4>
            <form action="" class="container-fluid d-flex mt-4 hell evol" style="width: 70%; flex-direction: column; row-gap: 5px;" >
             <label class="text-muted" for="name">name</label>
             <input id="name" type="text" name="name" placeholder="   name">
             <label class="text-muted" for="phone">phone</label>
             <input id="phone" type="text" placeholder="   phone" name="phone">
             <label class="text-muted" for="em">email</label>
             <input id="em" type="text" placeholder="   email" name="email">
             <label class="text-muted" for="adr">Adresse</label>
             <input id="adr" type="text" placeholder="   Adresse" name="adresse">
             <input id="btnaddcntct" class="btn btn-primary mb-3 mt-2" type="submit" name="addcnt" value="Add">
         </form>
          </div>
       </div>
        
      </div>
  
     <!-- *********** footer***************** -->
     <?php
 include 'footer.php';
?>




