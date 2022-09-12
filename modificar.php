<?php
include("db.php");

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE ID=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['NOMBRE'];
      $fecha_i = $row['FECHA_I'];
      $fecha_v = $row['FECHA_V'];
      $precio = $row['PRECIO'];
      $cantidad = $row['CANTIDAD'];

      
    }
  }

if(isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $fecha_i = $_POST['fecha_i'];
    $fecha_v = $_POST['fecha_v'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

   $query = "UPDATE productos set NOMBRE='$nombre', FECHA_I='$fecha_i', FECHA_V='$fecha_v', PRECIO='$precio', CANTIDAD='$cantidad' WHERE id=$id";
   mysqli_query($conn, $query);

   $_SESSION['message'] = 'Producto modificado';
   $_SESSION['message_type'] = 'primary';
   header("location: inventario.php");

}

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="POST">
       
      
      <div class="form-group">
            Nombre
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre" required>
        </div><br>
        <div class="form-group">
            Fecha de ingreso
          <input name="fecha_i" type="date" class="form-control" value="<?php echo $fecha_i; ?>" placeholder="Actualizar fecha de ingreso" required>
        </div><br>
        <div class="form-group">
            Fecha de vencimiento
          <input name="fecha_v" type="date" class="form-control" value="<?php echo $fecha_v; ?>" placeholder="Actualizar fehca de vencimiento" required>
        </div> <br>

        <div class="form-group">
            Precio
          <input name="precio" type="number" step="0.01" class="form-control" value="<?php echo $precio; ?>" placeholder="Actualizar precio" required>
        </div><br>
        <div class="form-group">
            Cantidad
          <input name="cantidad" type="number" class="form-control" value="<?php echo $cantidad; ?>" placeholder="Actualizar cantidad" required>
        </div><br>

        <center><button class="btn btn-dark" name="actualizar">
          ACTUALIZAR
        </button></center>
      </form>
      </div>
    </div>
  </div>
</div>


<?php include("includes/footer.php") ?>