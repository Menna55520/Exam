<?php 
$arr = [10,30,20] ;
$max = $arr[0] ;
$min = $arr[0] ;
foreach($arr as $x){
    if($x < $min) $min = $x ;
    if($x > $max) $max = $x ;
}
echo "Max Is : $max<br>";
echo "Min Is : $min<br>";
?>