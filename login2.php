<?php
session_start();
include("conecta.php");

if(empty($_GET['user']) or empty($_GET['senha'])) {
    header('location:login.php');
} 
$usuario = mysqli_real_escape_string($conexao, $_GET['user']);
$senha = mysqli_real_escape_string($conexao, $_GET['senha']);

$query = "select id, user from user where user = '{$usuario}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row==1) {
    $_SESSION['user'] = $usuario;
    header('location:cadastro.php');
} else {
    header('location:login.php');
}
?>