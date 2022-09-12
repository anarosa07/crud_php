<?php

include('db.php');

if (isset($_POST['insertar'])) {
    //obtener los datos mediante el formulario
    $nombre = $_POST['nombre'];
    $fecha_i = $_POST['fecha_i'];
    $fecha_v = $_POST['fecha_v'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    //sql para insertar el registro en la basededatos
    $query ="INSERT INTO productos(NOMBRE, FECHA_I, FECHA_V, PRECIO, CANTIDAD) VALUES('$nombre', '$fecha_i', '$fecha_v', '$precio', '$cantidad');";
    //funcion para conectar con la conexion que establecimos en db.php para enlazar la bd y la instruccion
    $result = mysqli_query($conn, $query);

    if(!$result){
        die(mysqli_error($conn));
    }

    //mensaje de notificacion
    $_SESSION['message'] = 'Se ha añadido un producto';
    //color del mensaje
    $_SESSION['message_type'] = 'success';

    //Redireccionar a index
    header("location: inventario.php");


}

?>