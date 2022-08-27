<?php
function rotateLeft($d, $arr) {
    if($d > 0){
        $d--;
        $num = count($arr);
        $k = $arr[0];
        
        foreach($arr as $key => $val){
           
           if($key == $num-1){
            $arr[$key] = $k; 
           }else{
            $arr[$key] = $arr[$key+1];
           }
           
        }
        
        echo "<pre>";print_r($arr);echo "</pre>";
        rotateLeft($d, $arr);
    }
  
    
  }
  
  $arr = [1,2,3,4,5];
  
  $d = 4;
  rotateLeft($d, $arr);