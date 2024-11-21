<?php
$space = 4;
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0;$j < $space; $j++)
    echo "&nbsp";
    for ($j = 0;$j <= $i; $j++)
    echo "* ";

    echo "<br>";
    $space--;
}


$space = 1;
for ($i = 4; $i > 0; $i--){
    for ($j = 0; $j < $space; $j++)
    echo "&nbsp";
    for ($j = 0;$j < $i;$j++)
    echo "* ";

    echo "<br>";
    $space++;
}






?>