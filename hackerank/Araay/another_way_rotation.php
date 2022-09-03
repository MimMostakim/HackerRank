<?php
function rotateLeft($d, $arr) {
    $remaining = array_slice($arr, $d);
    array_splice($arr, $d);
    return array_merge($remaining,$arr);
}
$d =4; 
$arr = [1,2,3,4,5];
$result = rotateLeft($d, $arr);
echo "<pre>";print_r($result);echo "</pre>";