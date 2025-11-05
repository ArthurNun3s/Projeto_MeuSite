<?php

require_once "config.inc.php";

echo "<h2>Mensagens Recebidas (Fale Conosco)</h2>";
echo "<p>Aqui estão as mensagens enviadas pelos visitantes do site.</p>";

$sql = "SELECT id, nome, email, mensagem FROM contatos ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
?>
    <table class="table table-striped table-bordered mt-4">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($dados = mysqli_fetch_array($resultado)) {
                
                echo "<tr>";
                echo "  <td>" . $dados['id'] . "</td>";
                echo "  <td>" . htmlspecialchars($dados['nome']) . "</td>";
                echo "  <td>" . htmlspecialchars($dados['email']) . "</td>";
                echo "  <td>" . htmlspecialchars($dados['mensagem']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
<?php
} else {
    echo "<div class='alert alert-info mt-4'>Nenhuma mensagem recebida no momento.</div>";
}
?>