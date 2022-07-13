<?php 

/*
how we can make modify of the seesion
*/
session_start();
echo "hello".$_SESSION['username']='taha';
echo "hello".$_SESSION['favfood']='pizza';
echo '<a href='page3.php'>hello</a>';
echo 'this app has been programmed by taha';
echo 'your favorite food now is'.$_SESSION['favfood'];
echo"<pre>"
print_r($_SESSION)
?>