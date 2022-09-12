<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM productos WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("error");
  }

  $_SESSION['message'] = 'Se ha eliminado un producto';
  $_SESSION['message_type'] = 'danger';
  header('Location: inventario.php');
}

?>