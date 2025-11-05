<?php

require_once "config.inc.php";

$id = $_GET['id'];

$sql = "SELECT * FROM albuns WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt === false) {
    die("Erro ao preparar o SQL: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
    $album = mysqli_fetch_array($resultado);

?>

    <h2>Alterar Álbum</h2>
    
    <form action="?pg=albuns-alterar" method="post">
        
        <input type="hidden" name="id" value="<?= $album['id'] ?>">

        <label>Título:</label>
        <input type="text" name="titulo" value="<?= htmlspecialchars($album['titulo']) ?>" required><br>

        <label>Artista:</label>
        <input type="text" name="artista" value="<?= htmlspecialchars($album['artista']) ?>" required><br>

        <label>Ano de Lançamento:</label>
        <input type="number" name="ano" value="<?= $album['ano'] ?>" min="1900" max="2099"><br>

        <label>Gênero:</label>
        <input type="text" name="genero" value="<?= htmlspecialchars($album['genero']) ?>"><br>

        <input type="submit" value="Salvar Alterações">
    </form>

<?php
} else {
    echo "<h2>Álbum não encontrado!</h2>";
}


mysqli_stmt_close($stmt);
?>