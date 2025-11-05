<?php

// --- 1. Definição das Variáveis de Conexão ---
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_de_dados = "projeto1"; 

// --- 2. Criação da Conexão ---
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

// --- 3. Verificação da Conexão ---
if (!$conexao) {
    die("<h2>Erro de Conexão</h2> " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8mb4");

?>
