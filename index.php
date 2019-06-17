<!DOCTYPE html>
<html lang="PT-Br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="Getpg" content="">

  <title>Agenda Telefônica</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS PERSONALIZADO -->
  <link href="css/style.css" rel="stylesheet">
  
</head>
<?php
include "config.php";

?>

<body>

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Agenda</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=">Início</a></li>
          <li><a href="index.php?page=form_contato">Cadastrar</a></li>
          <li><a href="index.php?page=listar_contatos&contato=">Listar</a></li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <form class="navbar-form navbar-left" role="search" name="busca" action="index.php">
            <div class="form-group">
              <input type="hidden" name="page" value="listar_contatos" />          
              <input type="text" name="contato" class="form-control" placeholder="Buscar (Nome ou código)">
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
          </form>
        </ul>
        
      </div>
    </div>
  </nav>


  <div class="container">

    
    <?php 
    $page='';
    if( empty($_REQUEST['page'])){  
      ?>
      <div class="jumbotron">
        <h2>Agenda Telefônica</h2>
      </div>
    <?php }else{
      $pagina = $_REQUEST['page'];
      include ($pagina.'.php');
    }
    ?>

  </div>

  <?php
  mysqli_close($con);

  ?>
    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>