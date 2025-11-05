<?php

require_once "config.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM paginas WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt === false) {
    die("Erro ao preparar o SQL: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    echo "<h2>Página excluída com sucesso.</h2>";
} else {
    echo "<h2>Erro ao excluir página:</h2>";
    echo "<p>" . mysqli_error($conexao) . "</p>";
}

echo "<a href='?pg=paginas' class='btn btn-primary'>Voltar</a>";

mysqli_stmt_close($stmt);
?>