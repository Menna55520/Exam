<?php 
for($i = 1 ; $i <= 5 ; $i+=2){
    for($j = 1 ; $j <= $i ; $j++){
        echo "* ";
    }
    echo "<br>";
}
for($i = 3 ; $i >= 1 ; $i-=2){
    for($j = 1 ; $j <= $i ; $j++){
        echo "* ";
    }
    echo "<br>";
}

//alternative way
// for($i=1; $i<=5; $i++)  
// {  
//     if($i%2 != 0)  
//     {  
//         for($j= 1; $j<=$i; $j++)  
//         {  
//         echo "* ";  
//         }  
//         echo "<br>";  
//     }  
// }  
// for($i=3; $i<=3; $i--)  
// {  
//     if($i%2 != 0)  
//     {  
//         for($j=1; $j<=$i; $j++)  
//         {  
//         echo "* ";  
//         }  
//         echo "<br>";  
//     }  
// }  


?>