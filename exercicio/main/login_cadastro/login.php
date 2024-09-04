<?php

session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"] != "") {
    echo "<script>document.location='http://localhost/exercicio/main/main/main.php';</script>";
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
<form action="processarlogin.php" method="post">
        <p>nome</p>
        <input type="text" name="nome" placeholder="informe seu nome" required>
        <p>Usuario</p>
        <input type="text" name="login" placeholder="informe seu login" required>
        <p>Senha</p>
        <input type="password" name="senha" placeholder="informe sua senha" required>
        <?php if (isset($_COOKIE["mensagem"])){echo $_COOKIE["mensagem"];}?>
        <br>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <a href="http://localhost/exercicio/main/login_cadastro/cadastro.php">Cadastre-se</a>
</body>
</html>