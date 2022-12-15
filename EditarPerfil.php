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
    <link rel="stylesheet" type="text/css" href="EditarPerfil.css">
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
        <div class="Titulo">
            <div id="ALGORITMO">
                Perfil
                <img class="Engrenagem" src="Imagens/Engrenagem.png"></a>
            </div>
        </div>
            <div class="BlocoFoto">        
					<div class="Btn_Perfil">
						<button class="Excluir" type="submit">Excluir Perfil</button>
					</div>
            </div> 
			<div class="Tela">  
            <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id_usuario']; ?>">
      <div class="upload">
        <img src="Perfil/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
        </div>

        <div class="leftRound" id = "cancel" style = "display: none;">
        </div>
        <div class="rightRound-2" id = "confirm" style = "display: none;">
          <input type="submit">
        </div>
      </div>
    </form>

    <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>

    <?php
    if(isset($_FILES["fileImg"]["name"])){
      $id = $_POST["id_usuario"];

      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = uniqid() . $_FILES["fileImg"]["name"];

      $target = "Perfil/" . $imageName;

      move_uploaded_file($src, $target);

      $query = "UPDATE usuario SET image = '$imageName' WHERE id_usuario = $id";
      mysqli_query($conexao, $query);

      header("Location: EditarPerfil.php");
    }
    ?>
            <br>
            <br>
            <form action="AtualizarUsuarios.php" method="POST">
				<label class="Label">
					Nome 
					<br>
					<input id="Campo_Formulario" name="nome"
			 rows="1" cols="1" maxlength="20" required placeholder="<?php echo $_SESSION['nome']; ?>">
				</label>
				<br><br>
				<label class="Label">
					Senha
					<br>
					<input id="Campo_Formulario" name="senha"
			 rows="1" cols="1" maxlength="20" required placeholder="<?php echo $_SESSION['senha']; ?>">
				</label>
                <br><br>
				<label class="Label">
					E-mail
					<br>
					<input id="Campo_Formulario" name="email"
			 rows="1" cols="1" maxlength="20" required placeholder="<?php echo $_SESSION['email']; ?>">
				</label>
				<br><br>
			</div>
            <div class="Salvar_Cancelar">
                <input class="Salvar" name="Salvar" placeholder="Salvar" type="submit">
            </form>
                <a href="Perfil.php"><button class="Cancelar" type="submit">Cancelar</button></a>
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