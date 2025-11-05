<?php

require_once "config.inc.php";

$id = $_GET['id'];

$sql = "SELECT * FROM paginas WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt === false) {
    die("Erro ao preparar o SQL: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
    $pagina = mysqli_fetch_array($resultado);

?>

    <h2>Alterar Página: <?= htmlspecialchars($pagina['pagina_titulo']) ?></h2>
    <hr>
    
    <form action="?pg=pagina-alterar" method="post" class="mt-4">
        
        <input type="hidden" name="id" value="<?= $pagina['id'] ?>">

        <div class="mb-3">
            <label for="titulo" class="form-label">Título da Página:</label>
            <input type="text" name="pagina_titulo" id="titulo" class="form-control" value="<?= htmlspecialchars($pagina['pagina_titulo']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição (Pequeno resumo):</label>
            <input type="text" name="pagina_descricao" id="descricao" class="form-control" value="<?= htmlspecialchars($pagina['pagina_descricao']) ?>">
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL (Ex: quemsomos):</label>
            <input type="text" name="pagina_url" id="url" class="form-control" value="<?= htmlspecialchars($pagina['pagina_url']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteúdo Principal da Página:</label>
            <textarea name="pagina_conteudo" id="conteudo" class="form-control" rows="10"><?= htmlspecialchars($pagina['pagina_conteudo']) ?></textarea>
        </div>

        <input type="submit" value="Salvar Alterações" class="btn btn-primary">
    </form>

<?php
} else {
    echo "<div class='alert alert-danger'>Página não encontrada!</div>";
}
mysqli_stmt_close($stmt);
?>