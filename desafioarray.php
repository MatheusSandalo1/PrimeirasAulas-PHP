<?php

$numeros = [ 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,18,19,20];

foreach ($numeros as $pares){

    if($pares %2==0 ){
        echo $pares . ", ";
    }
}