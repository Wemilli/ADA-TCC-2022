<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EsqueceuSenha2.css">
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
                    <li class="nav-item"><a href="Premium.html" class="nav-link">Premium</a></li>
                    <li class="nav-item"><a href="Login.php" class="nav-link">Perfil</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="Imagens/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                    <li class="nav-item"><a href="HomeVisitante.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="Premium.html" class="nav-link">Premium</a></li>
                    <li class="nav-item"><a href="Login.php" class="nav-link">Perfil</a></li>
            </ul>
        </div>
    </header>
    <script src="Menu.js"></script>
        <div class="Tela">
            <div class="EsqueceuSenha">Esqueceu a senha?</div>

            <input id="Nova_Senha" name="Nova_Senha"
			 rows="1" cols="1" maxlength="20" required placeholder="Digite sua nova senha:" >

             <br><br>

             <button class="Confimar" type="submit">Confimar</button>

             <br><br>
        </div>
        <footer class="Rodape">
            <img class="logo_rodape" src="Imagens/Logo ADA-PNG.png"></a>
                <div class="Contato"><h2>Contatos</h2>
                    <div id="Contatinhos">
                        <div id="Alinhar_imagem"><img class="Foto_Contato" src="Imagens/Instagram.png"></a>Ada_Tech</div>
                        <div id="Alinhar_imagem"><img class="Foto_Contato" src="Imagens/Email.png"></a>adatcc2022@gmail.com</div>
                    </div>
                </div>
                    <button class="Termos" type="submit">Termos de Uso</button>
                    <button class="Ajuda" type="submit">Central de Ajuda</button>
        </footer>
        <div class="Copyright"> ??2022 Copyright - AdaTech</div>
</body>
</html>