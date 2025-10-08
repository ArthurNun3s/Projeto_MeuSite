<?php
    echo "<h1> Painel Admin</h1>"
?>
<nav>
    <ul>
        <li><a href="?pg=conteudo">Home</a></li>
        <li><a href="?pg=quemsomos">Quem Somos</a></li>
        <li><a href="?pg=clientes">Clientes</a></li>
        <li><a href="?pg=faleconosco">Fale Conosco</a></li>
    </ul>
</nav>
<?php
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo.php";
        include_once("$var");
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
?>