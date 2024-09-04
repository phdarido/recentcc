<?php 
session_start();

$user = $_SESSION["user"];

if ($user == "") {
    echo "<script>document.location='http://localhost/exercicio/main/login_cadastro/login.php';</script>";
}

?>