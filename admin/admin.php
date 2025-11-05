<?php

include_once "../topo.php"; 

echo '<div class="container mt-4">'; 

echo "<h1>Painel Administrativo</h1>";

$login = True; 

if ($login == True) {
    
    ?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pg=paginas"> Gestão de Páginas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pg=clientes-admin"> Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pg=albuns-admin"> Discografia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?pg=contato"> Dados de Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <hr> <?php
    
    if (empty($_GET['pg'])) {
        $pg = "principal"; 
    } else {
        $pg = $_GET['pg'];
    }
    
    if (file_exists("$pg.php")) {
        include_once "$pg.php";
    } else {
        echo "<div classclass='alert alert-danger'>Erro: A página '$pg.php' não foi encontrada.</div>";
        include_once "principal.php";
    }
    
} else {
    include "login.php"; 
}

echo '</div>'; 

include_once "../rodape.php";
?>