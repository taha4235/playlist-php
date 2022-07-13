<?php
session_start();
if($_SESSION['user']){
    echo 'welcome'.$_SESSION['user']."you are the admin of this page"
   echo "<pre>";
   print_r($_SESSION)
}
else{
    echo "you are not permitted to see thi page"
}
?>