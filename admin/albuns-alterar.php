<?php

require_once "config.inc.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $artista = $_POST["artista"];
    $ano = $_POST["ano"];
    $genero = $_POST["genero"];

    $sql = "UPDATE albuns SET 
                titulo = ?, 
                artista = ?, 
                ano = ?, 
                genero = ? 
            WHERE 
                id = ?"; 

    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt === false) {
        die("Erro ao preparar o SQL: " . mysqli_error($conexao));
    }

    mysqli_stmt_bind_param($stmt, "ssisi", $titulo, $artista, $ano, $genero, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=albuns-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao alterar álbum:</h2>";
        echo "<p>" . mysqli_error($conexao) . "</p>";
        echo "<a href='?pg=albuns-admin'>Voltar</a>";
    }

    mysqli_stmt_close($stmt);

} else {
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=albuns-admin'>Voltar</a>";
}
?>