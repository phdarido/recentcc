<?php
$servidor = "localhost";
$database = "exercicio";
$usuario = "root";
$senha = "";

$conected = new mysqli($servidor, $usuario, $senha, $database);
if ($conected->connect_errno){
    die("Connection failed: " . mysqli_connect_error());
}

?>