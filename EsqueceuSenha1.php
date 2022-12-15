<?php
session_start();
ob_start();
include_once 'conectBDAdaTech.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './lib/vendor/autoload.php';
$mail = new PHPMailer(true);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EsqueceuSenha1.css">
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

            <div class="Informar_E-mail">Informe seu E-mail</div>
            <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['confirma'])) {
        //var_dump($dados);
        $query_usuario = "SELECT id_usuario, nome, email 
                    FROM usuario 
                    WHERE email =:email  
                    LIMIT 1";
        $result_usuario = $conexao->prepare($query_usuario);
        $result_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $result_usuario->execute();

        if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
            $chave_recuperar_senha = password_hash($row_usuario['id_usuario'], PASSWORD_DEFAULT);
            //echo "Chave $chave_recuperar_senha <br>";

            $query_up_usuario = "UPDATE usuarios
                        SET recuperar_senha =:recuperar_senha 
                        WHERE id_usuario =:id_usuario 
                        LIMIT 1";
            $result_up_usuario = $conn->prepare($query_up_usuario);
            $result_up_usuario->bindParam(':recuperar_senha', $chave_recuperar_senha, PDO::PARAM_STR);
            $result_up_usuario->bindParam(':id_usuario', $row_usuario['id_usuario'], PDO::PARAM_INT);

            if ($result_up_usuario->execute()) {
                $link = "http://localhost/EsqueceuSenha2.php?chave=$chave_recuperar_senha";

                try {
                    /*$mail->SMTPDebug = SMTP::DEBUG_SERVER;*/
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.mailtrap.io';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'e3efb8755943d1';
                    $mail->Password   = 'fe84283081bb96';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 2525;

                    $mail->setFrom('adatcc2022@gmail.com', 'Atendimento');
                    $mail->addAddress($row_usuario['email'], $row_usuario['nome']);

                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recuperar senha';
                    $mail->Body    = 'Prezado(a) ' . $row_usuario['nome'] .".<br><br>Você solicitou alteração de senha.<br><br>Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: <br><br><a href='" . $link . "'>" . $link . "</a><br><br>Se você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.<br><br>";
                    $mail->AltBody = 'Prezado(a) ' . $row_usuario['nome'] ."\n\nVocê solicitou alteração de senha.\n\nPara continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço no seu navegador: \n\n" . $link . "\n\nSe você não solicitou essa alteração, nenhuma ação é necessária. Sua senha permanecerá a mesma até que você ative este código.\n\n";

                    $mail->send();

                    $_SESSION['msg'] = "<p style='color: green'>Enviado e-mail com instruções para recuperar a senha. Acesse a sua caixa de e-mail para recuperar a senha!</p>";
                    header("Location: Login.php");
                } catch (Exception $e) {
                    echo "Erro: E-mail não enviado sucesso. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                echo  "<p style='color: #ff0000'>Erro: Tente novamente!</p>";
            }
        } else {
            echo "<p style='color: #ff0000'>Erro: Usuário não encontrado!</p>";
        }
    }

    if (isset($_SESSION['msg_rec'])) {
        echo $_SESSION['msg_rec'];
        unset($_SESSION['msg_rec']);
    }

    ?>
            <form action="">
            <?php
        $usuario = "";
        if (isset($dados['email'])) {
            $usuario = $dados['email'];
        } ?>
            <input id="E-mail" name="Nova_Senha"
			 rows="1" cols="1" maxlength="20" value="<?php echo $usuario; ?>" required placeholder="E-mail:" >
             <input class="Confimar" type="submit" name="confirma" value="confirma" placeholder="Confimar">
             <br><br>
            </form>
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
        <div class="Copyright"> ©2022 Copyright - AdaTech</div>
</body>
</html>