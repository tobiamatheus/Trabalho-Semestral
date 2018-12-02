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
    <form method="post" action="imc.php">
    <table>
        <tr>
            <td>PESO:</td><td><input type="text" name="peso"></td>
            <td>ALTURA:</td><td><input type="text" name="altura"></td>
            <td><input type="submit" value="Calcular"></td>
        </tr>    
    </table>
    </form>
<?php

$imc=0;
$peso = isset($_POST["peso"]);
$altura = isset($_POST["altura"]);
if ($altura !=0) {
    $imc = $peso/($altura * $altura);
}

echo $imc;

?>
    
</body>
</html>