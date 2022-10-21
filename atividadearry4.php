<?php

$funcionarios = [
    [
    "nome" => 'José Carlos',
    "cpf" => '222.222.333-77',
    "data" => "20/05/1972",
    "cidade" => "Marília"
    ],
    ["nome"  => 'Roseane da Silva',
    "cpf" => '225.365.258-88',
    "data" => "25/01/1983",
    "cidade" => "Oriente"
    ],
    ["nome" =>'Marcos dos Santos ',
    "cpf" => '258.369.147-78',
    "data" => "03/07/1963",
    "cidade" => "Marília"
    ]
];

foreach ($funcionarios as $item) {
    echo "nome: " . $item["nome"];
    echo "<br>";
    echo "cpf: " . $item["cpf"];
    echo "<br>";
    echo "data: " . $item["data"];
    echo "<br>";
    echo "cidade: " . $item["cidade"];
    echo "<hr>";
}