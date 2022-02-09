<?php
$array1 = array(2,3,4);
$array2 = array();

for($i=0; $i<count($array1); $i++){
    $mult = 1;
    for($j=0; $j<count($array1); $j++){
        if($j!=$i){
            $mult *= $array1[$j];
        }
    }
    array_push($array2, $mult);
}

?>