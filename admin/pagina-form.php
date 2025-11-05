<h2>Cadastrar Nova Página</h2>
<hr>

<form action="?pg=pagina-cadastro" method="post" class="mt-4">
    
    <div class="mb-3">
        <label for="titulo" class="form-label">Título da Página:</label>
        <input type="text" name="pagina_titulo" id="titulo" class="form-control" placeholder="Ex: Quem Somos" required>
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição (Pequeno resumo):</label>
        <input type="text" name="pagina_descricao" id="descricao" class="form-control">
    </div>

    <div class="mb-3">
        <label for="url" class="form-label">URL (Ex: quemsomos):</label>
        <input type="text" name="pagina_url" id="url" class="form-control" placeholder="só minúsculas, sem espaços" required>
    </div>

    <div class="mb-3">
        <label for="conteudo" class="form-label">Conteúdo Principal da Página:</label>
        <textarea name="pagina_conteudo" id="conteudo" class="form-control" rows="10"></textarea>
    </div>

    <input type="submit" value="Salvar Nova Página" class="btn btn-primary">
</form>