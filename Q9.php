<?php 
$s = "Hello Menna Nice To Meet You";
$substring = '/[^\w]Menna\s/'; ;
if(preg_match($substring , $s)){
    echo "Substring Is Found";
}else{
    echo "Substring Is Not Found";
}

?>