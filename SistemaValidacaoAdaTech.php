<?php
    session_start();    
    include_once("conectBDAdaTech.php"); 
       
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
            
        $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id_usuario'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['nvlacs'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: Perfil.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: Perfil.php");
            }else{
                header("Location: Perfil.php");
            }

        }else{    
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: Login.php");
        }
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: Login.php");
    }
?>