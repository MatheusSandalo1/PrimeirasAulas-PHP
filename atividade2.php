<?php   
$nome = 'Matheus Sandalo' ;
$nacionalidade = 'chileno';
$cargo = 'Docente';
$cpf = '111.222.333-11';
$rg = '62.111.221-X';
$empresa = 'Interação';
$CNPJ = '51.111.322/0001-00';
$endereco = 'R. João Barcelon, 80 - Marília, Sp, 17509-060';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>DECLARAÇÃO DE LOCAL DE TRABALHO</h2>
    <br>
    <br>
            <p>Eu, <?=$nome?>, <?=$nacionalidade?>, <?$cargo?>, inscrito(a)no CPF sob o nº<?=$cpf?> e no RG nº<?=$rg?>,
                 declaro para os devidos fins que possuo vínculo empregatício com a empresa 
                <?=$empresa?> inscrita no CNPJ sob o nº<?=$CNPJ?>, localizada à <?=$endereco?> 
            </p>

    <p>Por ser expressão da verdade,firmo a presente para efeitos legais.</p>
    <p>Marília - SP, 15 de Setembro de 2022</p>

    <br>
    <br>
    <br>
    <?=$nome?>



</body>
</html>