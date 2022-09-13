<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    if(($x1 > $x2 && $v1 > $v2)||($x2 > $x1 && $v2 > $v1)){
        return "NO";
    }else {
        $count = 0;
        while(true){
            if($x1 == $x2 ){
                return "Yes";
                break;
            }else if($count > 10000){
                return "NO";
                break;
                
            }
            $x1 += $v1;
            $x2 += $v2;
            $count++;
        }
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($fptr);
