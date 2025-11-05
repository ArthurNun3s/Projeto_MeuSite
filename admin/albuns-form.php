<h2>Cadastro de Novo Álbum</h2>

<form action="?pg=albuns-cadastro" method="post">
    
    <label>Título:</label>
    <input type="text" name="titulo" required><br>

    <label>Artista:</label>
    <input type="text" name="artista" required><br>

    <label>Ano de Lançamento:</label>
    <input type="number" name="ano" min="1900" max="2099" placeholder="Ex: 2023"><br>

    <label>Gênero:</label>
    <input type="text" name="genero"><br>

    <input type="submit" value="Cadastrar Álbum">
</form>