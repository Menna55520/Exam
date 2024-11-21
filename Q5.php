<?php 
function odd($x){
    return $x % 2 != 0 ;
}
$arr = [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10];
$odd_arr = array_filter($arr , 'odd');
$odd_arr = array_values($odd_arr);
echo "<pre>";
var_dump($odd_arr);
echo "</pre>";

?>