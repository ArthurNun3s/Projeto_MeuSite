<h2>Cadastro de Novo Álbum</h2>
<form action="?pg=albuns-cadastro" method="post" class="mt-4">
    <div class="mb-3">
        <label for="titulo" class="form-label">Título:</label>
        <input type="text" name="titulo" id="titulo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="artista" class="form-label">Artista:</label>
        <input type="text" name="artista" id="artista" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="ano" class="form-label">Ano:</label>
        <input type="number" name="ano" id="ano" class="form-control" min="1900" max="2099">
    </div>
    <div class="mb-3">
        <label for="genero" class="form-label">Gênero:</label>
        <input type="text" name="genero" id="genero" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="imagem" class="form-label">URL da Imagem de Capa:</label>
        <input type="text" name="imagem_url" id="imagem" class="form-control" placeholder="http://.../imagem.jpg">
    </div>
    
    <input type="submit" value="Cadastrar Álbum" class="btn btn-primary">
</form>