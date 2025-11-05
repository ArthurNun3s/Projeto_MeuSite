<?php

require_once "config.inc.php";
?>

<h3><a class="btn btn-primary" href="?pg=pagina-form">Cadastrar nova página</a></h3>
<h2>Lista de páginas do site</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Página</th>
            <th>Descrição</th>
            <th>URL (Link)</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT id, pagina_titulo, pagina_descricao, pagina_url FROM paginas ORDER BY pagina_titulo";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($dados = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "  <td>" . htmlspecialchars($dados['pagina_titulo']) . "</td>";
                echo "  <td>" . htmlspecialchars($dados['pagina_descricao']) . "</td>";
                echo "  <td>" . htmlspecialchars($dados['pagina_url']) . "</td>";
                echo "  <td>";
                
                echo "    <a href='?pg=pagina-form-alterar&id=" . $dados['id'] . "'>Editar</a> | ";
                
                echo "    <a href='?pg=pagina-excluir&id=" . $dados['id'] . "' onclick=\"return confirm('Tem certeza?');\">Excluir</a>";
                
                echo "  </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhuma página cadastrada.</td></tr>";
        }
        ?>
    </tbody>
</table>