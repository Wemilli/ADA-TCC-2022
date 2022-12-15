<?php

include('ProtecaoAdaTech.php');

require 'conectBDAdaTech.php';

$sessionId = $_SESSION["id_usuario"];
$user = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT * FROM usuario WHERE id_usuario = $sessionId"));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Perfil.css">
    <title>AdaTech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="nav-bar">
            <img class="Logo" src="Imagens/Logo ADA-PNG.png">
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="Home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Modulos.php" class="nav-link">Módulos</a></li>
                    <li class="nav-item"><a href="Biblioteca.php" class="nav-link">Biblioteca</a></li>
                    <li class="nav-item"><a href="Perfil.php" class="nav-link">Perfil</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="Imagens/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
            <li class="nav-item"><a href="Home.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Modulos.php" class="nav-link">Módulos</a></li>
                    <li class="nav-item"><a href="Biblioteca.php" class="nav-link">Biblioteca</a></li>
                    <li class="nav-item"><a href="Perfil.php" class="nav-link">Perfil</a></li>
            </ul>
        </div>
    </header>
        <div class="Titulo">
            <div id="ALGORITMO">
                Perfil
                <img class="Engrenagem" src="Imagens/Engrenagem.png"></a>
            </div>
        </div>
            <div class="BlocoFoto">        
                <img class="Perfil" src="Perfil/<?php echo $user['image']; ?>">
					<div class="Btn_Perfil">
                        <a href="EditarPerfil.php"><button class="Editar" type="submit">Editar Perfil</button></a>
						<a href="Deslogar.php"><button class="Excluir" type="submit">Sair do Perfil</button></a>
					</div>
            </div>
			<div class="Tela">  
				<label class="Label">
					Nome
					<br>
					<textarea id="Campo_Formulario" name="Campo_Formulario"
			 rows="1" cols="1" maxlength="20" required disabled placeholder="<?php echo $user['nome']; ?>"></textarea>
				</label>
				<br><br>
				<label class="Label">
					Acesso
					<br>
					<textarea id="Campo_Formulario" name="Campo_Formulario"
			 rows="1" cols="1" maxlength="20"  required disabled placeholder="Usuário tipo: <?php echo $user['nvlacs']; ?>"></textarea>
				</label>
				<br><br>
				<label class="Label">
					Senha
					<br>
					<input id="Campo_Formulario" name="Campo_Formulario" type="password"
			 rows="1" cols="1" maxlength="20" required disabled placeholder="<?php echo $user['senha']; ?>">
				</label>
				<br><br>
				<label class="Label">
					E-mail
					<br>
					<textarea id="Campo_Formulario" name="Campo_Formulario"
			 rows="1" cols="1" maxlength="20" required disabled placeholder="<?php echo $user['email']; ?>"></textarea>
				</label>
				<br><br>
			</div>
            <footer class="Rodape">
                <img class="logo_rodape" src="Imagens/Logo ADA-PNG.png"></a>
                    <div class="Contato"><h2>Contatos</h2>
                        <div id="Contatinhos">
                            <div id="Alinhar_imagem"><img class="Foto_Contato" src="Imagens/instagram.png"></a>Ada_Tech</div>
                            <div id="Alinhar_imagem"><img class="Foto_Contato" src="Imagens/email.png"></a>adatcc2022@gmail.com</div>
                        </div>
                    </div>
                        <button class="Termos" type="submit">Termos de Uso</button>
                        <button class="Ajuda" type="submit">Central de Ajuda</button>
            </footer>
            <div class="Copyright"> ©2022 Copyright - AdaTech</div>
    </body>
</html>