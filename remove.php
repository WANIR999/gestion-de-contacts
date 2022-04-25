<?php
require_once './classes/Contacts.php';
$contact=new contact();
if(isset($_GET['id'])){
    $contact->removeById('contact',$_GET['id']);
}
