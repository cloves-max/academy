<?php
include('verificalogin.php');
if (!isset($_SESSION)) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenamento</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <header></header>
  <nav class="nav">
    <ul>
      <li><a href="index_admin.php?menuop=home">Discentes</a></li>
      <li><a href="index.php?menuop=contatos">Contatos</a></li>
      <li><a href="index.php?menuop=tarefas">Tarefas</a></li>
      <li><a href="index.php?menuop=eventos">eventos</a></li>
      <li style="float:right"><a class="active" href="logout.php">Sair</a></li>
    </ul>
  </nav>
  <main>
    <hr>
    
    <?php
    $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
    switch ($menuop) {

      case 'home':
        include('paginas/home/home.php');
        break;
      case 'createdisc':
        include('paginas/discente/create.php');
        break;
        case 'env-disc':
          include('paginas/discente/create-env.php');
          break;
    }
    ?>
  </main>
  <footer>

  </footer>
</body>

</html>