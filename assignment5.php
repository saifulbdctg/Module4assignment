<?php
function bSort(&$arr) {
    $n = sizeof($arr);
  
   
    for($i = 0; $i < $n; $i++) {
        $swapped = False;
       
        for ($j = 0; $j < $n - $i - 1; $j++) {
         
            if ($arr[$j] <$arr[$j+1]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $t;
                $swapped = True;
            }
        }
  
        if ($swapped == False)
            break;
    }
}
          
$arr = array(64, 34, 25, 12, 22, 11, 90);
$len = sizeof($arr);
bSort($arr);
  
if($arr[0] == $arr[1]) {
  echo "No element";
}
else {
  echo "Second Largest element is ".$arr[1];
}
      
?>