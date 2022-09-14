<?php

/**
 * Dynamic Array Solution
 *
 * @param int $n
 * @param array $queries
 * @return void
 */
function matchingStrings($strings, $queries) {
    $outputArray = [];
    
    for( $i = 0; $i < sizeof($queries); $i++) {
        $counter = 0;
        
        for($j = 0; $j < sizeof($strings); $j++) {
            if ( $queries[$i] == $strings[$j] ) {
                $counter++;
            }
        }
        $outputArray[] = $counter;
    }

    return $outputArray;
    
}



$fptr = fopen(("output.txt"), "w");

$strings_count = intval(trim(fgets(STDIN)));

$strings = [];

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = rtrim(fgets(STDIN), "\r\n");
    $strings[] = $strings_item;
}

$queries_count = intval( trim( fgets( STDIN ) ) );
$queries = [];

for ($i = 0; $i < $queries_count; $i++) { 
    $query_item = rtrim( fgets( STDIN ), "\r\n" );
    $queries[] = $query_item;
}

$result = matchingStrings($strings, $queries);

fwrite($fptr, print_r( $result, true ) );

fclose($fptr);