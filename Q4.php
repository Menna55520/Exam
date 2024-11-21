<?php 
$arr = [50 , 40 , 75 , 99 , 80];
$sum = 0 ;
foreach($arr as $val){
    $sum+= $val ;
}
$AVG = $sum / count($arr) ;
echo "AVG : ".$AVG ;
?>