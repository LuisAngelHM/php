<?php 
function fibo($n){
    $num_ant1 = 1;
    $num_ant2 = 0;
    for($i=0; $i<$n-2; $i++){
        $num = $num_ant2 + $num_ant1;
        $num_ant2 = $num_ant1;
        $num_ant1 = $num ;
    }
    echo "El digito es: $num";
}

fibo(18)
?>