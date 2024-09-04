<?php
    if(isset($_POST['enviar'])) {
      include '../includes/conexao.php';

      $login = stripslashes(htmlspecialchars(addslashes(trim($_POST['login'])),ENT_QUOTES));

      $senha = md5(htmlspecialchars((trim($_POST['senha'])), ENT_QUOTES));

      $nome = stripslashes(htmlspecialchars(addslashes(trim($_POST['nome'])),ENT_QUOTES));

      $query = "SELECT * FROM usuario WHERE nome = '$nome' AND nomeusu = '$login' AND senha = '$senha'"; 
      
      $result = $conected->query($query);
            
    if ($result->num_rows <= 0){
        $mensagem = "<br>nome e/ou Login e/ou senha incorretas";
        setcookie("mensagem", $mensagem, time() + 6);
        echo "<script>document.location='http://localhost/exercicio/main/login_cadastro/login.php';</script>";
        exit();
      }else{
        session_start();
        $_SESSION["user"] = $login;
        if($login == "adm"){
        echo "<script>document.location='http://localhost/exercicio/main/main/mainadm.php';</script>";
      }else{
        echo "<script>document.location='http://localhost/exercicio/main/main/main.php';</script>";
      }
      }  
    }else{
      echo "<script>document.location='http://localhost/exercicio/main/login_cadastro/login.php';</script>";
    }
?>  