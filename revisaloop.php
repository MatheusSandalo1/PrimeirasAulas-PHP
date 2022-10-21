<?php 
$nome = 'Edson Rodrigues';
$idade = 12;
$email = 'palmeiras@gmail.com';
$senha = '1234567';
$cursos = ['PHP','HTML','CSS'];


echo '<h1>Trabalhando com estrutura condicional </h1>';

echo '<h2> Exemplo de if(se...)</h2>';

if($idade >= 18){

    echo "O usuário $nome é maior de idade.";
}

echo "<hr>";
#################################################
echo "<h2>Exemplo de if ternário</h2>";

echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

#################################################
echo "<h2>Exemplo de if e else</h2>";

if($email =='palmeiras@gmail.com' && $senha == '1234567'){
        echo "Usuário Logado <br>";
} else{
    echo "Email/senha senha inválidos";
}

if($email == 'palmeiras@gmail.com'){
    if($senha == '1234567'){
        echo "Usuário Logado";
    } else{
         echo 'Usuário/senha inválidos' ;  
     }
} else {
    echo "Usuário/senha inválidos";
}

###############################################
echo "<hr>";
echo "<h2>Exemplo de Multiplas Condições</h2>";

$num1 = 10;
$num2 = 20;

if($num1 == $num2){
    echo "Os numeros são iguais";
} else if($num1 > $num2){   
    echo "O numero 1 é maior que o numero 2";
}else{
    echo "O numero 2 é maior que o numero 1";
}

###############################################
echo "<hr>";
echo "<h2> Exemplo de get </h2>";

$menu = $_GET['menu'] ?? "Home";

switch(strtolower ($menu)){
    case "home":
            echo "Página principal";
        break;
        case "empresa":    
            echo "Página Empresa";
        break;
        case "produtos":
            echo "Página produtos";
        break;
        case "contato":
            echo "Página contatos";
        break;
        default:
        echo "Página Erro 404";
}
