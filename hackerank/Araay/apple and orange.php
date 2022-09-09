<?php
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
  $ap = 0; $or = 0;
  foreach($apples as $c){
    $g = $a+$c;
    if ($g >= $s && $g <=$t){
      $ap++;
    }
  }
  echo "$ap\n";
  foreach($oranges as $c){
    $g = $b+$c;
    if ($g >= $s && $g <=$t){
      $or++;
    }
  }
  echo "$or\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($stdin, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $apples_temp);

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $oranges_temp);

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);

fclose($stdin);