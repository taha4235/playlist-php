<?php
/*$strings = $_POST['test'];
if(filter_var($strings,FILTER_VALIDATE_INT) !== FALSE){
    echo 'good the '.$input.'you enter thi integer'
}
else{
    echo 'sorry the input '.$input."is not  a validate email"
}
if(filter_var($strings,FILTER_VALIDATE_IP) !== FALSE){
    echo 'good the '.$input.'you enter this is an ip addres'
}
else{
    echo 'sorry the input '.$input."is not  a validate ip adrees "
}
*/
/*$input = $_POST['test'];
$opt = array(
    'option'=>array(
        'min-range'=>1;
        'min-range'=>999;

    )
   $flags=>FILTER_FLAG_IPV4
   if(!flags){
       echo 'good the ip i version 4'
       sleep(5)
       echo "=================================="
   }
   else{
       echo "the ip is not version 4"
   }
    )

if(filter_var($input,FILTER_VALIDATE_INT)!==FALSE){
    echo 'good the '.$input.'this not an ip version 6'
}
else{
    echo 'soory the '.$input."is not ip version 4"
}*/
$input=$_POST['test'];
$sanitize =($input,FILTER_SANITIZE_EMAIL);
//print the result
echo 'main Input'.$input.'input after sanitize'
//sheck for the result
if(filter_var($input,FILTER_VALIDATE_INT)!==FALSE){
    echo 'good the ip is version 4'
}
else{
    echo 'the ip is not version 4';
    sleep(5)
    echo "==============================="
}
?>