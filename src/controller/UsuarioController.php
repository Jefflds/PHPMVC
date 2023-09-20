<?php
include_once  __DIR__ . "/../../vendor/autoload.php";



if (isset($_GET['nome']) && isset($_GET['idade']) && isset($_GET['email'])) {
    
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $email = $_GET['email'];

   
    echo "O nome do usuário é: " . $nome . "<br>";
    echo "A idade do usuário é: " . $idade . "<br>";
    echo "Seu email é: " . $email;
} else {
    echo "Parâmetros 'nome' e/ou 'idade' não foram encontrados na URL.";
}
?>

