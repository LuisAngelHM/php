<?php 
$arreglo1 = array(3,4,9,6,1);
$arreglo2 = array();

for($i=0; $i<count($arreglo1); $i++){
    $cantidad = 0;
    for($j=$i+1;$j<count($arreglo1); $j++){
        if($arreglo1[$i]>$arreglo1[$j]){
            $cantidad++;
        }
    }
    array_push($arreglo2, $cantidad);
}
print_r($arreglo2);

?>