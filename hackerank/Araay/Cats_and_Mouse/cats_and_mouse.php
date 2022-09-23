<?php

// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {

$cat_distance_A = abs($x-$z);
$cat_distance_B = abs($y - $z);

if($cat_distance_A > $cat_distance_B){
    return 'Cat B';
}else if($cat_distance_A == $cat_distance_B){
    return 'Mouse C';
}else{
    return 'Cat A';
}
}

$fptr = fopen(("output.txt"),"w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);