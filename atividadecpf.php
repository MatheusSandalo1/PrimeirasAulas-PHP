<?php  

$cpf = "501.479.628-11";
$cpfSemPonto = str_replace(".", "", $cpf);
$cpfSemPonto = substr($cpfSemPonto, 0, 9);

echo $cpfSemPonto. "<hr>";

#strlen($cpfSemPonto) == 8
function Validar_digito1($cpfSemPonto){
    $sequencia = 10;
    $multiplicacao = 0;

    for($contador = 0; $contador < strlen($cpfSemPonto); $contador++){
        $multiplicacao += $sequencia * intval($cpfSemPonto[$contador]);        //multiplicacao += valor registao + multiplicacao do cpf
        $sequencia--;
    };
    return $multiplicacao;       
};

$meuResultado = Validar_digito1($cpfSemPonto) % 11 == $resto;

