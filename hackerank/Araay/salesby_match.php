<?php
//  the sockMerchant function.
function sockMerchant( $n, $ar ) {
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ( $ar[$i] != 0 ) {
            for ( $j = $i + 1; $j < $n; $j++ ) {
                if ( $ar[$i] == $ar[$j] ) {
                    $count++;
                    $ar[$j] = 0;
                    break;
                }
            }
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);