<?php

$numbers = [3,2,1,4];

usort($numbers, "sortNumbers");

function sortNumbers($first, $second){

   return   $first - $second;
}
// 3-2 = 1
// 2-1 = 1
// 1-4 = -3
// 4-3 = 1

//print_r($numbers);


$authors = [

    1 => 'Astrid Lundgren',
    2 => 'Selma Lagerhof',
    3 => 'Jan Guldski',
    4 => 'August Stravinski',
    5 => 'Villiam Morbeck',
];




function getName( int $id, array $writers){

    echo $writers[$id];
   
}

echo getName(1, $authors);

