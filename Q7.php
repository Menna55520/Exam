<?php 
$date = strtotime("2012-12-21") ;
$afterMonth = strtotime("+1 month" , $date);
$afterMonth = date("Y-m-d" , $afterMonth);
echo $afterMonth ;

?>