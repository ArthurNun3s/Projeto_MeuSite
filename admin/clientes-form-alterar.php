<?php

require_once "config.inc.php";

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);

if ($stmt === false) {
    die("Erro ao preparar o SQL: " . mysqli_error($conexao));
}

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
    $cliente = mysqli_fetch_array($resultado);
?>

    <h2>Alterar Cliente</h2>
    
    <form action="?pg=clientes-alterar" method="post">
        
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">

        <label>Nome:</label>
        <input type="text" name="cliente" value="<?= htmlspecialchars($cliente['cliente']) ?>" required><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?= htmlspecialchars($cliente['cidade']) ?>"><br>

        <label>Estado:</label>
        <input type="text" name="estado" value="<?= htmlspecialchars($cliente['estado']) ?>"><br>

        <input type="submit" value="Salvar Alterações">
    </form>

<?php
} else {
    echo "<h2>Cliente não encontrado!</h2>";
}
mysqli_stmt_close($stmt);
?>