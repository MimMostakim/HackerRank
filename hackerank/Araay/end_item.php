<?php

$startTime = microtime(true);
$startMemory = memory_get_usage();

$array = [1, 5, 4, 6];

function ItemAtEnd($item, $array){
    $lenght = count($array);
    for($i = 0; $i <= $lenght; $i++){
        if($i === $lenght){
            $array[$i] = $item;
            break;
        }
    }

    return $array;
}

$newArray = ItemAtEnd(2, $array);
var_dump($newArray);


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";