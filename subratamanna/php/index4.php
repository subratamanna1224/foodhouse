<?php
echo "WelCome to PHP<br>";

function addedtwovalue($i ,$j){
    return ($i + $j);
}

$arrayOne = array(1,2,3);
$arrayTwo = [4,5,6];
$array = [];

foreach ($arrayOne as $key => $value) {
    $array[$key] = addedtwovalue($value,$arrayTwo[$key]);
}

echo $arrayTwo[0];



?>