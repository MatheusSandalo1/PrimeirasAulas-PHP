<?php

    $nomeAluno = 'Darius Souza Enterrar';
    $curso = 'PHP';
    $frequencia = '90%';
    $nota = 9;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados do Aluno</h1>
    <p>
        <strong>Nome:</strong> <?=$nomeAluno?>
    </p>
    <p>
        <strong>Curso:</strong> <?=$curso?>
    </p>
    <p>
        <strong>Frequencia:</strong> <?=$frequencia?> 
    </p>
    <p>'
        <strong>Nota:</strong>  <?=$nota?>'
    </p>
    <p>
        O aluno <?=$nomeAluno?>, frequentou o curso de PHP com <?=$frequencia?> de presença.
    </p>
</body>
</html>