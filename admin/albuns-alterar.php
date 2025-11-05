<?php
require_once "config.inc.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $artista = $_POST["artista"];
    $ano = $_POST["ano"];
    $genero = $_POST["genero"];
    $imagem_url = $_POST["imagem_url"]; 

    $sql = "UPDATE albuns SET titulo = ?, artista = ?, ano = ?, genero = ?, imagem_url = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($stmt, "ssissi", $titulo, $artista, $ano, $genero, $imagem_url, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=albuns-admin' class='btn btn-primary'>Voltar</a>";
    } else {
        echo "<h2>Erro ao alterar álbum.</h2>";
        echo "<a href='?pg=albuns-admin' class='btn btn-secondary'>Voltar</a>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "<h2>Acesso negado.</h2>";
}
?>