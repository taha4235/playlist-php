<?php
/*
sleep(seconds);
usleep(microsecond);
time-sleep-until(time()*5)
usleep come from the smart system like unix
*/
$name ="this app has been rogrammed by taha";
echo $name;
sleep(5);
usleep(2500000);
echo 'sorry iam forget to say hi';
function checkfile(){
    if(file_exists("taha.txt")){
        echo 'good the file is found'
    }
    else{
        sleep(5)
        checkfile()
    }
}
checkfile()

?>