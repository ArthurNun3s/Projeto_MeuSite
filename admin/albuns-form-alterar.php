<?php
require_once "config.inc.php";
$id = $_GET['id'];
$sql = "SELECT * FROM albuns WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($resultado) > 0) {
    $album = mysqli_fetch_array($resultado);
?>
    <h2>Alterar Álbum</h2>
    <form action="?pg=albuns-alterar" method="post" class="mt-4">
        <input type="hidden" name="id" value="<?= $album['id'] ?>">
        
        <div class="mb-3">
            <label class="form-label">Título:</label>
            <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($album['titulo']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Artista:</label>
            <input type="text" name="artista" class="form-control" value="<?= htmlspecialchars($album['artista']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Ano:</label>
            <input type="number" name="ano" class="form-control" value="<?= $album['ano'] ?>" min="1900" max="2099">
        </div>
        <div class="mb-3">
            <label class="form-label">Gênero:</label>
            <input type="text" name="genero" class="form-control" value="<?= htmlspecialchars($album['genero']) ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">URL da Imagem de Capa:</label>
            <input type="text" name="imagem_url" class="form-control" value="<?= htmlspecialchars($album['imagem_url']) ?>">
        </div>
        
        <input type="submit" value="Salvar Alterações" class="btn btn-primary">
    </form>
<?php
} else {
    echo "<h2>Álbum não encontrado!</h2>";
}
mysqli_stmt_close($stmt);
?>