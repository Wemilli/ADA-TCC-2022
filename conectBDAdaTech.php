<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "ada";

$conexao = new mysqli($host, $usuario, $senha, $bd);

if ($conexao->connect_errno) {
	echo "Erro";
}
?>