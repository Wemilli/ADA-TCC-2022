<?php
	include('ProtecaoAdaTech.php');

	include('conectBDAdaTech.php');

	if(isset($_POST['Salvar'])){

			$id_usuarioa = $_SESSION['id_usuario'];
			$nomea = $_POST['nome'];
			$emaila = $_POST['email'];
			$senhaa = $_POST['senha'];
	
			$update = mysqli_query($conexao, "UPDATE usuario SET nome='$nomea', email='$emaila', senha='$senhaa' where id_usuario='$id_usuarioa';");

			$sql = mysqli_query($conexao,$update);
		
	}
	header('Location: Perfil.php');
	die();
?>