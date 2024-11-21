<?php 
$arr = [50 , 20 , 10 , 40 , 30];
// insertion sort ASC
for ($i=1; $i < count($arr) ; $i++) { 
    $j = $i - 1 ;
    $temp = $arr[$i];
    while($j >= 0 && $arr[$j] > $temp){
        $arr[$j+1] = $arr[$j];
        $j--;
    }
    $arr[$j+1] = $temp ;
}
echo "Array In Asc. Order: ";
foreach($arr as $val){
    echo $val." ";
}
echo "<br>";
// insertion sort DSC
for ($i=1; $i < count($arr) ; $i++) { 
    $j = $i - 1 ;
    $temp = $arr[$i];
    while($j >= 0 && $arr[$j] < $temp){
        $arr[$j+1] = $arr[$j];
        $j--;
    }
    $arr[$j+1] = $temp ;
}
echo "Array In Des. Order: ";
foreach($arr as $val){
    echo $val." ";
}
?>