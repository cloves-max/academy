
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesform.css">
    <title>Contatos</title>
</head>
</head>


<div class="adiscent">
    <button class="button button2"><a href="index_admin.php?menuop=createdisc">ADD Discente</a></button>   
</div>
<body>
<table>
        <tr>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Idade</th>
            <th>Sexo</th>
          
            
        </tr>
        <?php
        include('db/conexao.php');
        $query = " SELECT * FROM discente";
        $result = mysqli_query($conexao, $query) or die("Erro ao execultar consulta de contatos" . mysqli_error($conexao));
        while ($discentes = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td><?= $discentes['nome']?></td>
                <td><?= $discentes['matricula']?></td>
                <td><?= $discentes['idade']?></td>
                <td><?= $discentes['sexo']?></td>
                
                <td>editar</td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>