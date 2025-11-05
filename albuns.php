<?php

require_once 'admin/config.inc.php';

echo "<h1>Nossa Discografia</h1>";
echo "<p>Explore os álbuns que fazem parte do nosso acervo.</p>";
echo "<hr>";

$sql = "SELECT titulo, artista, ano, genero FROM albuns ORDER BY artista ASC, ano ASC";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    
    echo '<div class="container">';
    echo '  <div class="row">'; 

    while ($dados = mysqli_fetch_array($resultado)) {
        
        echo '<div class="col-md-4 mb-3">'; 
        echo '  <div class="card h-100">'; 
        echo '    <div class="card-body">';
        echo '      <h5 class="card-title">' . htmlspecialchars($dados['titulo']) . '</h5>';
        echo '      <h6 class="card-subtitle mb-2 text-muted">' . htmlspecialchars($dados['artista']) . '</h6>';
        echo '      <p class="card-text">';
        echo '        <strong>Gênero:</strong> ' . htmlspecialchars($dados['genero']) . '<br>';
        echo '        <strong>Ano:</strong> ' . $dados['ano'];
        echo '      </p>';
        echo '    </div>'; 
        echo '  </div>'; 
        echo '</div>'; 
    }

    echo '  </div>'; 
    echo '</div>'; 

} else {
    echo "<p>Nenhum álbum cadastrado no momento.</p>";
}
mysqli_close($conexao);
?>