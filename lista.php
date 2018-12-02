<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="lista">Listagem dos dados</h1>

    <table border=1>
        <tr>
            <td><strong>NOME</strong></td>
            <td><strong>E-MAIL</strong></td>
            <td><strong>IDADE</strong></td>
            <td><strong>ALTURA</strong></td>
            <td><strong>PESO</strong></td>
            <td><strong>IMC</strong></td>
            <td><strong>EXCLUIR</strong></td>
        </tr>
        <?php

        include("conecta.php");
        $seleciona=mysqli_query($conexao, "select * from dados order by id desc");
        while ($campo=mysqli_fetch_array ($seleciona) ){?>
            <tr>
                <td><?=$campo["nome"]?></td>
                <td><?=$campo["email"]?></td>
                <td><?=$campo["idade"]?></td>
                <td><?=$campo["altura"]?></td>
                <td><?=$campo["peso"]?></td>
                <td><a href="imc.php"><input type="button" value="IMC"></a></td>
                <td><a href="excluir.php?id=<?=$campo["id"]?>"><input type="button" value="Excluir"/></a></td>
            </tr>       

       <?php }?>
    </table>
    <a href="cadastro.php"><input type="button" value="Voltar"/></a>


</body>
</html>