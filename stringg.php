<?php

$nome = "Matheus Sandalo";
$cpf= "501.479.628-11";
$cpfsemponto = substr($cpf,0 , 11);



echo $nome[4];
echo "<hr>";
echo $cpf;
echo "<hr>";
echo $cpfsemponto;
echo "<hr>";
echo $nome;
echo "<hr>";
echo str_replace(".","",$cpfsemponto);
echo "<hr>";

$data = "20/05/2012";
$dataArray = explode("/",$data);
var_dump($dataArray);