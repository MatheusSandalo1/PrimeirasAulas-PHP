<?php

$nome = "Matheus Sandalo";
echo $nome;

$idade = 18;

echo "</br>";

echo $idade;

echo "<hr>";

$salario = 10000.50;

echo $salario;

echo "<hr>";

echo "R$ " . number_format($salario,2,",",".");

echo "<hr>";

$meunome = "Matheus";
$meusobrenome = "Sandalo";

echo $meunome . " " . $meusobrenome; // ou echo "{$meunome} {$meusobrenome}";  echo "Meu nome é: ${meunome} e meu sobrenome é: {$meusobrenome}";

echo 'A caixa d\'agua está vazia';

echo "</br>";

echo 'Aula de "PHP"';


?>