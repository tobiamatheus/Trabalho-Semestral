<?php

    include("conecta.php");

    $recuser=$_GET["fuser"];
    $recsenha=$_GET["fsenha"];

    mysqli_query($conexao, "insert into user (user, senha) value ('$recuser', '$recsenha')");    

    header("location:lista.php");

?>