<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Farmacia - Inventario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&family=Lalezar&family=Roboto+Flex:opsz,wght@8..144,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estiloin.css">

</head>
  <body>
  <nav class="barra">
      <div class="conte">
        <div class="content-info">
      <img src="./img/logo.jpeg" alt="Logo-Farmacia">
      <a class="link" href="index.php">FARMACIA PROFARMA</a>  
      </div>
        
<?php 
include('db.php');
?>
        <form class="d-flex aparicion-3" action="busqueda.php" method="GET">
            <input class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Búsqueda" name="busqueda">
            <button class="btn btn-dark btn-block" type="submit" name="enviar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Búsqueda</font></font></button>
          </form>
          <?php
          if(isset($_GET['enviar'])){
            $busqueda = $_GET['busqueda'];

            if(isset($_GET['busqueda']))
            {
              $where = "SELECT * FROM `productos` WHERE NOMBRE like '".$busqueda."%';";
            }
          }
          ?>



      </div>
    </nav>



