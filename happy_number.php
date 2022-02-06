<?php

function IsIn($n,$numbers){
    foreach($numbers as $i){
        if($n == $i){
            return true;
        }
    }
    return false;

}

function IsHappy($number){
    $b = true;
    $numbers = array();
    while ($b != false){
        $sum = 0;
        $number_i = $number % 10;
        $number_j = $number / 10;
        while($number_j != 0){
            $sum = $sum + pow($number_i,2);
            $number_i = $number_j%10;
            $number_j = $number_j/10;    
        }
        $sum = $sum + pow($number_i,2);
        if(!IsIn($sum, $numbers)){
            array_push($numbers, $sum);
            if ($sum != 1){
                $number = $sum;
            }
            else{
                $b=false;
                echo "Es un numero feliz";
            }
        }
        else{
            $b=false;
            echo "No es un numero feliz";
        }
    }
}
IsHappy(94);
?>