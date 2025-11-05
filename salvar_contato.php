<?php
// 1. Incluir seu arquivo de conexão
require_once 'admin/config.inc.php';

// 2. Receber os dados do formulário
$nome = $_POST['campo_nome'];
$email = $_POST['campo_email'];
$mensagem = $_POST['campo_mensagem'];

// 3. Preparar o comando SQL para inserir os dados 
$sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)";

// 4. Preparar a declaração 
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt === false) {
    die("Erro ao preparar o SQL: " . mysqli_error($conexao));
}

// 5. Vincular os dados às variáveis
mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $mensagem);

// 6. Executar o comando
if (mysqli_stmt_execute($stmt)) {
    echo "<h1>Mensagem enviada com sucesso!</h1>";
    echo "<p><a href='index.php?pg=faleconosco'>Voltar ao formulário</a></p>";
} else {
    echo "<h1>Erro ao salvar a mensagem:</h1>";
    echo "<p>" . mysqli_error($conexao) . "</p>";
}

// 7. Fechar a declaração e a conexão
mysqli_stmt_close($stmt);
mysqli_close($conexao);

?>