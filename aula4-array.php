<?php

#array unidmencional

$listacompra = ['Sal','café','pão','batata','sabonete'];

//echo "<pre>" e "</pre>" servem para deixar em forma de 'lista'
print_r($listacompra);


echo "<hr>";

var_dump($listacompra);

echo "<hr>";

echo $listacompra[4]. " , " . $listacompra[2];

echo "<hr>";

foreach ($listacompra as $item) {
    echo $item . ", ";
};

echo "<hr>";

#array associativo

$funcionario = [
    "Nome" => "Matheus Sandalo",
    "Cargo" => "MEP",
    "Idade" => 19,
    "Salário" => 3500.40,
    "Status" => true

];

var_dump($funcionario);

echo $funcionario["Cargo"];

#array multidimensional
$listadefuncionarios = [
    [ "Nome" => "Matheus Sandalo",
    "Cargo" => "MEP",
    "Idade" => 19,
    "Salário" => 3500.40,
    "Status" => true,
    "curso" => []
    ],

    [ "Nome" => "Edson Rodrigues",
    "Cargo" => "MEP",
    "Idade" => 29,
    "Salário" => 7500.00,
    "Status" => false,
    "curso" => ["WEB","PHP","Javascript"]
    ],

    [ "Nome" => "Cleiton",
    "Cargo" => "MEP",
    "Idade" => 22,
    "Salário" => 1500.20,
    "Status" => true,
    "curso" => ["photoshop","illuustrator"]
    ]
];


var_dump($listadefuncionarios);

echo "<hr>";
echo  "Nome: " . $listadefuncionarios [2]  ["Nome"];

echo "<br>";

echo "Cargo : " .$listadefuncionarios [2] ["Cargo"];

echo "<br>";

echo "Curso: " .$listadefuncionarios [2] ["curso"] [0];

echo "<hr>";

foreach($listadefuncionarios as $item){
    echo "Nome:" . $item["Nome"];
    echo "<br>";
    echo "Cargo:" . $item["Cargo"];
    echo "<br>";
    echo "Idade:" . $item["Idade"];
    echo "<br>";
    echo "Curso:" . implode(", ", $item["curso"]);
    echo "<hr>";

}