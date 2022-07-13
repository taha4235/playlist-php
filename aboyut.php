<?php
session_start();
echo 'hello'.$_SESSION['NAME'].'how are you';
echo 'hello '.$_SESSION['NAME'].'YOUR AGE IS'.$_SESSION['AGE'].'how are you';
?>