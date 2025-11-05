<?php
require_once 'admin/config.inc.php';

$sql = "SELECT titulo, artista, ano, imagem_url FROM albuns ORDER BY id DESC LIMIT 3";
$resultado = mysqli_query($conexao, $sql);
$albuns = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <?php
        foreach ($albuns as $key => $album) {
            $activeClass = ($key == 0) ? 'active' : '';
            echo "<button type='button' data-bs-target='#demo' data-bs-slide-to='$key' class='$activeClass'></button>";
        }
        ?>
    </div>

    <div class="carousel-inner">
        <?php
        foreach ($albuns as $key => $album) {
            $activeClass = ($key == 0) ? 'carousel-item active' : 'carousel-item';
            $descricao = htmlspecialchars($album['artista']) . " (" . $album['ano'] . ")";
            
            echo "<div class='$activeClass'>";
            
            $imagem_placeholder = 'https://www.w3schools.com/bootstrap5/la.jpg'; // Placeholder
            $imagem = !empty($album['imagem_url']) ? htmlspecialchars($album['imagem_url']) : $imagem_placeholder;
            
            echo '<img src="' . $imagem . '" alt="' . htmlspecialchars($album['titulo']) . '" class="d-block" style="width:100%; height: 500px; object-fit: cover;">';

            echo '  <div class="carousel-caption">';
            echo '    <h3>' . htmlspecialchars($album['titulo']) . '</h3>';
            echo '    <p>' . $descricao . '</p>';
            echo '  </div>';
            echo "</div>"; 
        }
        
        if (empty($albuns)) {
            echo '<div class="carousel-item active">';
            echo '  <img src="https://www.w3schools.com/bootstrap5/la.jpg" alt="Site" class="d-block" style="width:100%">';
            echo '  <div class="carousel-caption">';
            echo '    <h3>Bem-vindo ao Site Institucional</h3>';
            echo '    <p>Cadastre álbuns no painel de admin para exibi-los aqui.</p>';
            echo '  </div>';
            echo '</div>';
        }
        ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container-fluid mt-3">
    <h3>Showcase Dinâmico</h3>
    <p>Este carrossel agora é alimentado diretamente pelo seu banco de dados.</p>
</div>