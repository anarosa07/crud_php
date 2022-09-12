<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
     
    <!--Compobrar si existe la session -->
    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
          
        </button>
      </div>
      <?php session_destroy(); } ?>

      <!-- formulario -->
      <div class="card card-body">
        <form action="insertar.php" method="POST">

          <div class="form-group">
                <p>Nombre</p>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del producto" autofocus required>
          </div>

          <div class="form-group">
                <br><p>Fecha de Ingreso</p>
                <input type="date" name="fecha_i" class="form-control" placeholder="Fecha de ingreso" autofocus required>
          </div>

          <div class="form-group">
                <br><p>Fecha de vencimiento</p>
                <input type="date" name="fecha_v" class="form-control" placeholder="Fecha de vencimiento" autofocus required>
                </div>

            <div class="form-group">
                <br><p>Precio</p>
                <input type="number" step="0.01" name="precio" class="form-control" placeholder="Ingrese el precio del producto" autofocus required>
            </div>

            <div class="form-group">
                <br><p>Cantidad</p>
                <input type="number" name="cantidad" class="form-control" placeholder="Ingrese la cantidad existente" autofocus required><br>
            </div>

          <center>
            <input type="submit" class="btn btn-dark btn-block" name="insertar" value="INSERTAR"></center>
           

        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>

            <th>NOMBRE</th>
            <th>F. INGRESO</th>
            <th>F. VENCIMIENTO</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th style="text-align:center;">OPCIONES</th>
          </tr>
        </thead>
        <tbody>

<?php
$query = "SELECT * FROM productos";
$resultado_p = mysqli_query($conn, $query);    

while($row = mysqli_fetch_assoc($resultado_p)) { ?>
<tr>
  <td><?php echo $row['NOMBRE']; ?></td>
  <td><?php echo $row['FECHA_I']; ?></td>
  <td><?php echo $row['FECHA_V']; ?></td>
  <td><?php echo $row['PRECIO']; ?></td>
  <td><?php echo $row['CANTIDAD']; ?></td>
  <td style="display:flex; align-items:center; justify-content:center;">
    <a href="modificar.php?id=<?php echo $row['ID']?>" class="btn btn-secondary" style="
    margin-right: 0.25rem;">
      <i class="fas fa-marker"></i>
    </a>
    <a href="borrar.php?id=<?php echo $row['ID']?>" class="btn btn-danger">
      <i class="far fa-trash-alt"></i>
    </a>
  </td>
</tr>
<?php } ?>
</tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
