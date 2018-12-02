<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuário</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>

    <form method="get" action="grava2.php">
        <input type="text" name="fuser" placeholder="Informe um usuário válido" required="required"/>
        <br />
        <input type="password" name="fsenha" placeholder="Informe uma senha válida" required="required"/>
        <br />
        <input type="submit" value="Salvar"/>

    <?php

        include("conecta.php");
        $seleciona=mysqli_query($conexao,"select * from user order by id desc");
        while ($campo=mysqli_fetch_array ($seleciona) ){?>
            <tr>
                <td><?=$campo["user"]?></td>
                <td><?=$campo["senha"]?></td>
                <td><a href="cadastro.php"><input type="button" value="Salvar" /></a></td>
            </tr>
        <?php }?>
    </form>



    
</body>
</html>

