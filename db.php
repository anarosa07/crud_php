<?php

//INICIO DE SESSION PARA MANEJAR LOS MENSAJES DE NOTIFICACION
if(!session_id()) session_start();
//CONECTAR CON LA BASE DE DATOS farmacia
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'proyecto_inventario'
);
//conectar bd login
$conex = mysqli_connect(
    'localhost',
    'root',
    '',
    'login'
);

?>