<?php

require_once 'admin/config.inc.php';

$url_da_pagina = 'quemsomos';
$sql = "SELECT pagina_titulo, pagina_conteudo FROM paginas WHERE pagina_url = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt === false) {
    die("Erro ao preparar o SQL: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "s", $url_da_pagina);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
    $pagina = mysqli_fetch_array($resultado);

    echo "<h1>" . htmlspecialchars($pagina['pagina_titulo']) . "</h1>";
    echo "<hr>";
    
    echo "<div>" . nl2br(htmlspecialchars($pagina['pagina_conteudo'])) . "</div>";

} else {
    echo "<h1>Página não encontrada</h1>";
    echo "<p>O conteúdo para esta página não foi encontrado no banco de dados.</p>";
}

mysqli_stmt_close($stmt);
?>
