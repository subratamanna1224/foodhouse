<?php
echo "WelCome to PHP<br>";

function addedtwovalue($i ,$j){
    return ($i + $j);
}

$arrayOne = array(1,2,3);
$arrayTwo = [4,5,6];
$array = [];

foreach ($arrayOne as $key => $value) {
    $array[$key] = addedtwovalue($valuarre,$arrayTwo[$key]);
}

$student =[
    [
        'studentName' => 'Subrata',
        'studentRoll' => 1
    ],
    [
        'studentName' => 'Rahul',
        'studentRoll' => 2
    ],
    [
        'studentName' => 'Suman',
        'studentRoll' => 3
    ]
    ];
print_r($student);
?>