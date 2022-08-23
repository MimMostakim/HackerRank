<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();

$array = [1, 5, 4, 6];

function addItemAtFirst($position, $array){
    $lenght = count($array);
    for($i = $lenght; $i >= 0; $i--){
        if($i === 0){
            $array[$i] = $position;
            break;
        }
        $Indexitem = $i - 1;
        $array[$i] = $array[$Indexitem];
    }

    return $array;
}

$newArray = addItemAtFirst(2, $array);
var_dump($newArray);


$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";