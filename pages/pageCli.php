<?php
session_start();
include('../backend/verificar_login.php')?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina do Cliente</title>
  </head>
  <body>
    <h3>Bem vindo <?php echo $_SESSION['usuario']; ?></h3>
    <a href="javascript:" onclick="load_page('Cli/pedidos.php')">Meus Pedidos</a>
    <a href="javascript:"  onclick="load_page('Cli/info.php')">Minhas Informações</a>

  <div name="conteudo">
  </div>
  <script src="../ajax/ajax.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </body>
</html>
