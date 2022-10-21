<?php

$data= "23/09/2022 ";

function inverter($data){
    $datainvertida = explode("/" , $data);          
    $datainvertida = array_reverse($datainvertida);
    return implode("-",$datainvertida);
};

echo inverter($data);
