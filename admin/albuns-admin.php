<?php

    require_once "config.inc.php";

    echo "<a href='?pg=albuns-form'>Cadastrar albuns</a>";

    echo "<h1>Lista de albuns</h1>";

    $sql = "SELECT * FROM albuns";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "titulo: ".$dados['titulo']."<br>";
            echo "artista: ".$dados['artista']."<br>";
            echo "ano: ".$dados['ano']."<br>";
            echo "gênero: ".$dados['gênero']."<br>";
            echo " <a href='?pg=albuns-form-alterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=albuns-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum albuns cadastrado!</h3>";
    }


