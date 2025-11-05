<?php
  echo "<h1>Fale conosco</h1>";
?>

<form action="salvar_contato.php" method="POST">

  <div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="campo_nome" required>
  </div>

  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="campo_email" required>
  </div>

  <div class="mb-3">
    <label for="mensagem" class="form-label">Mensagem:</label>
    <textarea class="form-control" id="mensagem" name="campo_mensagem" rows="5" placeholder="Digite sua mensagem" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>

</form>