<?php

    include("conecta.php");

    $recnome=$_GET["fnome"];
    $recemail=$_GET["femail"];
    $recidade=$_GET["fidade"];
    $recaltura=$_GET["faltura"];
    $recpeso=$_GET["fpeso"];

    mysqli_query($conexao, "insert into dados (nome, email, idade, altura, peso) value ('$recnome', '$recemail', '$recidade', '$recaltura', '$recpeso')");    

    header("location:lista.php");

?>