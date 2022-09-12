<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&family=Lalezar&family=Roboto+Flex:opsz,wght@8..144,200&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php
            include("db.php");
            include('controlador.php')
            ?>
        
    
    <div class="container">
        <div class="logo">
            <img class="logo_img" src="img/logo.jpeg" alt="">
        </div>
    
        <form action="index.php" class="form" method="post">
        <?php
            include("db.php");
            ?>
<?php if (isset($_SESSION['warning'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['warning']?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
          
        </button>
      </div>
      <?php session_destroy(); } ?>
            <div class="form__usuario">
                <label for="">Usuario</label>
                <input type="text" class="usuario style" name="usuario" required autocomplete="off" placeholder="Ingrese su usuario">
                <i class="fa fa-user-circle" style="font-size:20px; position:absolute; left:-1px; bottom:12px;" aria-hidden="true"></i></div>
            <div class="form__clave">
                <label for="">Contraseña</label>
                <input id="clave" type="password style" class="clave" name="clave" required autocomplete="off" placeholder="Ingrese su contraseña">
                <i class="fa fa-unlock-alt" style="font-size:20px; position:absolute; left:-1px; bottom:14px;" aria-hidden="true"></i>
                <span id="ver" class="ver_clave"><i id="icono" class="fas fa-eye"></i></span>
            </div>
            <div class="form__boton">
                <button class="boton" name="postLogin">Ingresar</button>
            </div>
        </form>
    </div>
    <script src="js/main.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>