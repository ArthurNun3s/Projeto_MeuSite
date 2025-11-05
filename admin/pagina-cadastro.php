<?php

require_once "config.inc.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = $_POST["pagina_titulo"];
    $descricao = $_POST["pagina_descricao"];
    $url = $_POST["pagina_url"];
    $conteudo = $_POST["pagina_conteudo"];

    $sql = "INSERT INTO paginas (pagina_titulo, pagina_descricao, pagina_url, pagina_conteudo) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt === false) {
        die("Erro ao preparar o SQL: " . mysqli_error($conexao));
    }

    mysqli_stmt_bind_param($stmt, "ssss", $titulo, $descricao, $url, $conteudo);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Página cadastrada com sucesso.</h2>";
        echo "<a href='?pg=paginas' class='btn btn-primary'>Voltar</a>";
    } else {
        echo "<h2>Erro ao cadastrar página:</h2>";
        echo "<p>" . mysqli_error($conexao) . "</p>";
        echo "<a href='?pg=paginas' class='btn btn-secondary'>Voltar</a>";
    }
    mysqli_stmt_close($stmt);

} else {
    echo "<div class='alert alert-danger'>Acesso negado.</div>";
    echo "<a href='?pg=paginas' class='btn btn-secondary'>Voltar</a>";
}
?>