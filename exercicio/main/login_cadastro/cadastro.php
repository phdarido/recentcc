<?php

session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"] != "") {
    echo "<script>document.location='http://localhost/php/exercicio/main/main/main.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="processarcadastro.php" method="post">

        <label for="nome">Nome: </label>       
        
        <input type="text" name="nome" required> <br>
        
        <label for="login" placeholder= "login">Login: </label>       
        
        <input type="text" name="login" required> <br>
        
        <?php if (isset($_COOKIE["mensagem_login"])){echo $_COOKIE["mensagem_login"];
        
        echo "<br>";}?> 
        
        <label for="senha">Senha: </label>       
        
        <input type="password" name="senha" required> <br>

        <button type="submit" value="enviar" name="enviar">Cadastrar-se</button> 
    </form>
    <a href="http://localhost/exercicio/main/login_cadastro/login.php">login</a>

</body>
</html>