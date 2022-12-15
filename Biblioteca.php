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
    <link rel="stylesheet" type="text/css" href="Biblioteca.css">
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
    <script src="Menu.js"></script>
    	<br>
		<br>
        <div class="Titulo">Biblioteca</div>
        <br> 
        <br>
	    <a href="AdaLovelace.html"><button class="Ada_Lovelace" type="submit">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao1">Ada Lovelace
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/CadeadoAberto.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Algoritmo</b> 
                            <br>para desbloquear</div>
                    </div>
            </button></a>
            <button class="Grace_Hopper">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao2">Grace Hopper
                        <div class="Textinho">Criadora da linguagem Flow-Matic e 
                            <br>programadoras do Harvard Mark</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Constantes</b>
                            <br> para desbloquear</div>
                    </div>
            </button>
            <button class="Carol_Shaw">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao3">Carol Shaw
                        <div class="Textinho">Primeira mulher a desenvolvr jogos 
                            <br>eletrônicos no mundo.</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Variáveis</b>
                            <br>para desbloquear</div>
                    </div>
            </button>
            <button class="Roberta_Williams">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao4">Roberta Williams
                        <div class="Textinho">A mais respeitada e conhecida designer 
                            <br>de jogos de computador.</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Entrada 
                            <br>e saída</b> para desbloquear</div>
                    </div>
            </button>
            <button class="Tipos_de_dados">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao5">Tipos de dados
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Tipos de dados</b> 
                            <br>para desbloquear</div>
                    </div>
            </button>
            <button class="Operadores">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao6">Operadores
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Operadores</b> 
                            <br>para desbloquear</div>
                    </div>
            </button>
            <button class="Funções_matemáticas">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao7">Funções matemáticas
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Funções matemáticas</b> 
                            <br>para desbloquear</div>
                    </div>
            </button>
            <button class="Expressões_lógicas">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao8">Expressões lógicas
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Expressões lógicas</b> 
                            <br>para desbloquear</div>
                    </div>
            </button>
            <button class="Estruturas_de_repetição">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao9">Estruturas de repetição
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Estruturas de repetição</b> 
                            <br>para desbloquear</div>
                    </div>
            </button>
            <button class="Matriz_e_Vetores">
                <img class="livro" src="Imagens/livro.svg">
                    <div class="TituloBotao10">Matriz e Vetores
                        <div class="Textinho">Escritora do Primeiro algoritimo para ser
                            <br> processado por uma máquina</div>
                    </div>
                    <div class="Cadeado"> <img class="Cadeado" src="Imagens/Cadeado.png">
                        <br> 
                        <div class="Desbloquear">Complete <b>Matriz e Vetores</b> 
                            <br>para desbloquear</div>
                    </div>
            </button>
            <br> <br> <br>
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
        <div class="Copyright"> ©2022 Copyright - AdaTech</div>
    </body>
</html>