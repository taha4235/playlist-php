<?php
session_start();
$admins = array("taha","mhamd","ahmad")
if($_SERVER['REQUEST METHOD'] == 'POST'){
  $user  = $_POST['username'];
  if(in_array($user,$admins)){
      echo "admin found";
      $_SESSION['user']=$user;
      echo "<pre>";
      print_r($_SESSION);
      echo "welcome".$_SESSION['user']."you will be redirected to control panel area"
     header('REFRECH:5 ,URL:')
    }
  else{
      echo 'soory you arw not permitted to see the product upates'
  }
}
else{
    echo 'you cant browse this page directly'
}
$strings = $_POST['test'];
echo filter_var($strings,)
?>