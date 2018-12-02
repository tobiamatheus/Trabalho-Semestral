<?php session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Formulário de cadastro do seu IMC</h1>
    <form method="get" action="grava.php" class="formulario">
        <input type="text" name="fnome" placeholder="Digite seu nome completo" required="required"/>
        <br />
        <input type="email" name="femail" placeholder="Informe seu e-mail" required="required"/>
        <br />
        <input type="text" name="fidade" placeholder="Informe sua idade" required="required"/>
        <br />
        <input type="text" name="faltura" placeholder="Informe sua altura (metros)" required="required"/>
        <br />
        <input type="text" name="fpeso" placeholder="Informe seu peso(em Kg)" required=" required"/>
        <br />
 
        <input type="submit" value="Gravar" />
    
    </form>
    
</body>
</html>