<?php
require_once "config.inc.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST["titulo"];
    $artista = $_POST["artista"];
    $ano = $_POST["ano"];
    $genero = $_POST["genero"];
    $imagem_url = $_POST["imagem_url"]; 

    $sql = "INSERT INTO albuns (titulo, artista, ano, genero, imagem_url) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($stmt, "ssiss", $titulo, $artista, $ano, $genero, $imagem_url);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Álbum cadastrado com sucesso.</h2>";
        echo "<a href='?pg=albuns-admin' class='btn btn-primary'>Voltar</a>";
    } else {
        echo "<h2>Erro ao cadastrar álbum.</h2>";
        echo "<a href='?pg=albuns-admin' class='btn btn-secondary'>Voltar</a>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "<h2>Acesso negado.</h2>";
}
?>