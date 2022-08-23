<?php
$startTime = microtime(true);
$startMemory = memory_get_usage();
$count = 0;


function array_rev(array $a) {
    $array_length = count($a);
    $res = array();
    for ($i=1; $i <= $array_length; $i++) { 
        $res[] = $a[$array_length - $i];
    }
    var_dump($res);
}

//calling function and giving output here
array_rev([1, 4, 3, 2]);

$endTime = microtime(true);
$endMemory = memory_get_usage();
echo "execution time: " . ($endTime - $startTime) . "\n";
echo "memory used: " . ($endMemory - $startMemory) / (1024 * 1024) . "\n";