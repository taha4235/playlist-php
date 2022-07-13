<?php
if(empty($_SESSION['counter'])){
    $_SESSION['counter']=1;
}
else{
    $_SESSION['counter']++ 
}
echo "you viewed this page";
echo "<a href ="about.php"></a>"
?>