<?php

session_start();

if (empty($_SESSION['id_usuario'])){
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"HomeVisitante.html\">Entrar</a></p>");
}

?>