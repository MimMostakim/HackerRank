<?php

/*
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b,$n,$m) {
    /*
     * Write your code here.
     */
     $result =-1;
     for($i=0;$i<$n;$i++){
         for($j=0;$j<$m;$j++){
            $price = $keyboards[$i] + $drives[$j];
            if($price <= $b && $price >=$result){
                $result = $price;
            }
         }
     }
     return $result;

}

$fptr = fopen(("output.txt"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $bnm_temp);
$bnm = explode(' ', $bnm_temp);

$b = intval($bnm[0]);

$n = intval($bnm[1]);

$m = intval($bnm[2]);

fscanf($stdin, "%[^\n]", $keyboards_temp);

$keyboards = array_map('intval', preg_split('/ /', $keyboards_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $drives_temp);

$drives = array_map('intval', preg_split('/ /', $drives_temp, -1, PREG_SPLIT_NO_EMPTY));

/*
 * The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
 */

$moneySpent = getMoneySpent($keyboards, $drives, $b,$n,$m);

fwrite($fptr, $moneySpent . "\n");

fclose($stdin);
fclose($fptr);