<?php
// Função: Recebe os dados do formulário e insere no banco.

require_once "config.inc.php";

// 1. Verifica se os dados vieram via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // 2. Coleta os dados do formulário
    $titulo = $_POST["titulo"];
    $artista = $_POST["artista"];
    $ano = $_POST["ano"];
    $genero = $_POST["genero"];

    // 3. Prepara o SQL seguro (com placeholders '?')
    $sql = "INSERT INTO albuns (titulo, artista, ano, genero) VALUES (?, ?, ?, ?)";

    // 4. Prepara a declaração
    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt === false) {
        die("Erro ao preparar o SQL: " . mysqli_error($conexao));
    }

    // 5. Vincula as variáveis aos '?'
    mysqli_stmt_bind_param($stmt, "ssis", $titulo, $artista, $ano, $genero);

    // 6. Executa o comando!
    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Álbum cadastrado com sucesso.</h2>";

        echo "<a href='?pg=albuns-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao cadastrar álbum:</h2>";
        echo "<p>" . mysqli_error($conexao) . "</p>";
        echo "<a href='?pg=albuns-admin'>Voltar</a>";
    }

    // 7. Fecha a declaração
    mysqli_stmt_close($stmt);

} else {

    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=albuns-admin'>Voltar</a>";
}
?>