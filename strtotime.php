<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
$oldway=time()+(365+24*60*60);
$newway= strtotime('+1 years')
$otherways= strtotime("next wednesday")
$time = strtotime("taha")//+x days //week/month
date_default_timezone_set("AISA/RIYADH");//set to riyadh timezone
$time = strtotime('now');
echo date('y-m-d h:m:s',$time)."<br>";

?>
</html>