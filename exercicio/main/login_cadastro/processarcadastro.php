<?php
    if(isset($_POST['enviar'])) {
    include '..\includes\conexao.php';
    
    $senha = md5(htmlspecialchars((trim($_POST['senha'])), ENT_QUOTES));
    
    $nome = stripslashes(htmlspecialchars(addslashes(trim($_POST['nome'])),ENT_QUOTES));
    
    $login = stripslashes(htmlspecialchars(addslashes(trim($_POST['login'])),ENT_QUOTES));
    
    $query_login = "SELECT * FROM usuario WHERE nomeusu = '$login'";
    
    $result_login = $conected->query($query_login);

    $i = 0;     

    if ($result_login->num_rows > 0){
        $mensagem_login = "Login já em uso";
        setcookie("mensagem_login", $mensagem_login, time() + 6);
        $i = 1;
    }
    if($i == 0){
        $cadastro = "INSERT INTO usuario (id ,nome ,nomeusu ,senha) VALUES ('' ,'$nome', '$login', '$senha')";
        $conected->query($cadastro);
        session_start();
        $_SESSION["user"] = $login;
        
        echo "<script>document.location='http://localhost/http://localhost/exercicio/main/main/main.php';</script>";
    }else{
        echo "<script>document.location='http://localhost/exercicio/main/login_cadastro/cadastro.php';</script>";
        exit();
    }
    
    }
?>