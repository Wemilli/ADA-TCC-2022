<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Cadastrar.css">
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
                    <li class="nav-item"><a href="HomeVisitante.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Premium.html" class="nav-link">Planos</a></li>
                    <li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="Imagens/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="HomeVisitante.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="Premium.html" class="nav-link">Planos</a></li>
                <li class="nav-item"><a href="Login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </header>
    <script src="Menu.js"></script>
    <br>
    <br>
		<div class="Botões">
        <a href="Login.php"><button class="Botão-1" type="submit">Login</button></a>
        <br>
        <a  href="Cadastrar.php"><button class="Botão-2" type="submit">Cadastrar</button></a>
		</div>
        <section class="Formulario-1">
			<div class="Formulario-1-1"><!--Problemática 1:2. Formulário refere-se ao conjunto.(Login/senha)-->
				<h1 class="Titulo-1">Cadastrar</h1>
                <br>
				<form class="Formulario-1-1-1" action="InformacoesUsuarios.php" method="post">
					<input class="Input1" type="text" name="nome" placeholder="Nome do usúario:" required>
					<br>
					<br>
					<input class="Input" type="date" name="datanasc" placeholder="Data de nascimento:" required>
					<br>
					<br>
					<select class="Input-3" name="sexo">
						<option value="Escolha" disabled selected>Gênero:</option>
						<option value="Masculino">Masculino</option>
						<option value="Feminino">Feminino</option>
						<option value="Outro">Outro</option>
					</select>
					<br>
					<br>
					<input class="Input3" type="text" name="email" placeholder="Insira seu e-mail:">
					<br>
					<br>
					<input class="Input4" type="password" name="senha" placeholder="Insira sua senha:">
                    <br>
					<br>
					<button class="Botão" type="submit">Cadastrar</button>
				</form>
        </section>
        <script src="Cadastrar.js"></script>
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