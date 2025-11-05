<?php

require_once "config.inc.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $cliente = $_POST["cliente"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    $sql = "INSERT INTO clientes (cliente, cidade, estado) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt === false) {
        die("Erro ao preparar o SQL: " . mysqli_error($conexao));
    }

    mysqli_stmt_bind_param($stmt, "sss", $cliente, $cidade, $estado);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Cliente cadastrado com sucesso.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao cadastrar cliente:</h2>";
        echo "<p>"."Erro: ". mysqli_error($conexao)."</p>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }
    mysqli_stmt_close($stmt);

} else {
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}
?>