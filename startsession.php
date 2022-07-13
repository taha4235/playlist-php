<?php
session_start();//start or resume session;
$_SESSION['username']="programmer";
$_SESSION['FAVFOOD']='makarona';
echo '<a href="page2.php"></a>';
/*
description about how to make destroy for thr session
and reuming th session
session unset make clear the content of the data;
session destroy make destroying of the session
*/
session_start()
session_unset();
session_destroy();
print_r($_SESSION);
?>