<?php

$listaClientes = [
    'Edson Rodrigues',
    'Matheus Sandalo',
    'Gustavo Lima'
];

$limite = 10;
$tabuada = 5;

$contagem = 0;
while($contagem <= 10){

    echo ++$contagem . " ";
    //pós impressao $contagem ++;
    //++$contagem;pré impressão
}

#########################################
echo "<h2>Exemplo de do...while</h2>";
$contagem = 0;

do{
    echo $contagem++.' ';
} while($contagem <= 10);

#########################################
echo "<h2>Exemplo de for(para....)</h2>";

for($contagem = 0; $contagem <= 10; $contagem++){
    echo $contagem.' ';
}

#########################################
echo "<h2>Exemplo de foreach</h2>";

// Ambiente de Desenvolvimento
var_dump($listaClientes);
//Ambiente de Produção
echo $listaClientes[2] . "<br>";

foreach($listaClientes as $key => $nome){
    echo "O index/chave é:  $key e o valor é: $nome";
    echo "<br>";
}

echo "<br><br>";

foreach($listaClientes as $nome){
    echo "O index/chave é:  $key e o valor é: $nome";
    echo "<br>";
}