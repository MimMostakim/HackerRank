<?php 

$array = [1,2,3,4,10,11];
$total = null;

function addArrayElements ($arr,$total){
    foreach ($arr as $key => $value) {
       $total +=$value;
    }
    print_r($total);
}
addArrayElements($array,$total);
?>