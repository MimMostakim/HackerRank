<?php

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path) {
    // Write your code here
    $count = $sealevel = 0;
    for($i =0; $i<$steps;$i++){
        if($path[$i]==='U'){
            ++$sealevel;
            if($sealevel===0){
                ++$count;
            }
        }else{
            --$sealevel;
        }
    }
    return $count;

}

$fptr = fopen(getenv("output.txt"), "w");

$steps = intval(trim(fgets(STDIN)));

$path = rtrim(fgets(STDIN), "\r\n");

$result = countingValleys($steps, $path);

fwrite($fptr, $result . "\n");

fclose($fptr);
