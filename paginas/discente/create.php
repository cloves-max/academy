<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesform.css">
    <title>Create</title>
</head>

<body>

    <h3>Cadastrar Discente</h3>

    <div>
    <form action="index_admin.php?menuop=env-disc" method="POST">
            <label for="fname">Nome</label>
            <input type="text" id="fname" name="nome" placeholder="Nome"><br>
            <label for="fname">Senha</label>
            <input type="password" id="fname" name="senha" placeholder="Senha"><br>
            <label for="fname">Matricula</label>
            <input type="text" id="fname" name="matricula" placeholder="matricula"><br>
            <label for="fname">Idade</label>
            <input type="text" id="fname" name="idade" placeholder="idade"><br>
            <label for="fname">Sexo</label>
            <input type="text" id="fname" name="sexo" placeholder="Sexo"><br>
            <label for="lname">Altura</label>
            <input type="text" id="lname" name="altura" placeholder="altura"><br>
            <label for="fname">Peso</label>
            <input type="text" id="fname" name="peso" placeholder="peso"><br>
            <input type="submit" name='btnadd' value="Cadastrar">
        </form>
    </div>

</body>

</html>

</html>