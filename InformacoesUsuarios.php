<?php

	include('conectBDAdaTech.php');

	if(isset($_POST['nome'])){

            $nvlacsa = $_POST['nvlacs'];
			$nomea = $_POST['nome'];
			$datanasca = $_POST['datanasc'];
			$sexoa = $_POST['sexo'];
            $emaila = $_POST['email'];
			$senhaa = $_POST['senha'];
	
			$result = mysqli_query($conexao, "INSERT INTO usuario(nome,datanasc,sexo,email,nvlacs,senha,image) 
			VALUES ('$nomea','$datanasca','$sexoa','$emaila','$nvlacsa','$senhaa','Perfil.png')");
		
	}
	header('Location: Login.php');
	die();
?>