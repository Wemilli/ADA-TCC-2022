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
    <link rel="stylesheet" type="text/css" href="Home.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>AdaTech</title>
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
    <script src="Menu.js"></script>
			<div class="Tela1">
				<img class="Bin" src="Imagens/Bin.svg">
				<div class="Titulos_botoes">
                    <br>
                    <br>
					<div class="Titulo"><b>Ola, <?php echo $user['nome']; ?></b></div>
					<br>
					<div class="Subtitulo">Por um futuro mais qualificado</div>
				</div>
			</div>
            <div class="Tela12">
				<div class="Titulos_botoes">
					<div class="Titulo"><b>Premium</b></div>
					<br>
					<div class="Subtitulo">Quer ter acesso a Mapas Mentais, um Portal de Duvidas e todas as Histórias é Módulos Desbloqueados!?</div>
					<br> <br> 
						<button class="Se_Inscrever" type="submit">Clique Aqui!</button>
				</div>
			</div>
			<div class="Tela2">
                <label class="TituloTela2"> <b>Nosso Objetivo</b></label>
                <br> <br>
                    <p class="Texto">Nós do <label class="TextoNegrito"><b>AdaTech</b></label> temos como principal objetivo facilitar o seu aprendizado
                    em <label class="TextoVerde"><b>lógica de programação</b></label> com o uso de conteúdos
                    <label class="TextoAzul"> <b>interativos e fáceis </b></label> para <label class="TextoVermelho"><b>todos os públicos!</b></label></p>
                <br>
                    <div class="TextoParticipacao">Ficou interessado? <br> Venha Participar!</div>
			</div>
			<div class="Tela3">
                <label class="TituloTela3"><b>Nossa Didática</b></label>
                <img  class="ImgDidatica" src="Imagens/Didatica.svg"> 
			</div>
			<div class="Tela4">
				<label class="TituloTela4"><b>Nossa Equipe</b></label>
                <img  class="Equipe" src="Imagens/Equipe.svg"> 
			</div>
            <br> <br> <br>
        <footer class="Rodape">
            <img class="logo_rodape" src="Imagens/Logo ADA-PNG.png"></a>
                <div class="Contato"><h2>Contatos</h2>
                    <div id="Contatinhos">
                        <div id="Alinhar_imagem"><img class="Foto_Contato" src="Imagens/instagram.png"></a>ada_.tech</div>
                        <div id="Alinhar_imagem"><img class="Foto_Contato" src="Imagens/email.png"></a>adatcc2022@gmail.com</div>
                    </div>
                </div>
                    <button class="Termos" type="submit">Termos de Uso</button>
                    <button class="Ajuda" type="submit">Central de Ajuda</button>
        </footer>
        <div class="Copyright"> ©2022 Copyright - AdaTech</div>
        <script src="Home.js"></script>
    </body>
</html>