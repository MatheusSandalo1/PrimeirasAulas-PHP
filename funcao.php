<?php

function soma($num1,$num2){

    $total = $num1 + $num2;

    return $total;

};

echo soma(10,20);
echo "<hr>";

function subtração($numsubtracao,$numsubtracao1){

    $totalsub = $numsubtracao - $numsubtracao1;
    return $totalsub;
};

echo subtração(40,20);
echo "<hr>";

function multiplicacao($numer1,$numer2){

    $totalmultiplicacao = $numer1 * $numer2;
    return $totalmultiplicacao;
};

echo multiplicacao(8,2);
echo "<hr>";

function divisao($numero1,$numero2){

    $totaldivisao = $numero1 / $numero2;

    return $totaldivisao;
};

echo divisao(10,2);
echo "<hr>";


function verificar($numero1){

     if($numero1 %2 ==0){
         echo "O numero é par";
     }else{
         echo "O numero é impar";}
            
};

echo verificar(10);
echo "<hr>";
function par_ou_impar_mod2($numero){
    return ($numero %2 ==0)? "Numero é par" : "Numero é impar";
};

echo par_ou_impar_mod2(10);


echo "<hr>";

function geradorSenhaComFor($senhaInicial = 1,$senhaFinal = 10){

    for($contador = $senhaInicial; $contador <= $senhaFinal;$contador++){
        echo $contador. "-";
    }

};

echo geradorSenhaComFor();

echo "<hr>";

function geradorSenhaComWhile($senhaInicial = 1,$senhaFinal = 10){
        $contador = $senhaInicial;
    while($contador <= $senhaFinal){
        echo $contador." ";
        $contador++;
       }
};

echo geradorSenhaComWhile();
