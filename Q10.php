<?php 
function Is_Prime($x){
    for($i = 2 ; $i < $x ; $i++){
        if($x % $i == 0)return false ; 
    }
    return true ;
}
$num = 5 ;
if(Is_Prime($num)){
    echo "$num Is Prime Number";
}else{
    echo "$num Is Not Prime Number";

}
?>