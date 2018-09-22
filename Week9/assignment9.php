<?php 
$num = (int)($_GET['num']);

if ( $num == 0){
date_default_timezone_set('UTC');
echo date('H:i:s');
}
else{
date_default_timezone_set('Europe/Dublin');
echo date('H:i:s');
}
?>
