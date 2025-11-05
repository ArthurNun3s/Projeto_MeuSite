<?php

require_once "config.inc.php";

echo "<a href='?pg=clientes-form'>Cadastrar novo cliente</a>";

echo "<h1>Lista de Clientes</h1>";

$sql = "SELECT * FROM clientes ORDER BY cliente ASC";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    
    while($dados = mysqli_fetch_array($resultado)){
        
        echo "ID: " . $dados['id'] . "<br>";
        echo "Nome: " . htmlspecialchars($dados['cliente']) . "<br>";
        echo "Cidade: " . htmlspecialchars($dados['cidade']) . "<br>";
        echo "Estado: " . htmlspecialchars($dados['estado']) . "<br>";
        
        echo " <a href='?pg=clientes-form-alterar&id=$dados[id]'>Editar</a>";
        
        echo "| <a href='?pg=clientes-excluir&id=$dados[id]' onclick=\"return confirm('Tem certeza que deseja excluir este cliente?');\">Excluir</a>";
        
        echo "<hr>";
    }
}else{
    echo "<h3>Nenhum cliente cadastrado!</h3>";
}
?>