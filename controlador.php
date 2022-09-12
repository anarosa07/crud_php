<?php
if(isset($_POST["postLogin"])){
    $usuario=$_POST["usuario"];
    $clave=$_POST["clave"];
    $sql=$conex->query("SELECT * FROM registro WHERE usuario='$usuario' AND clave='$clave'");
    if($datos=$sql->fetch_object()){
        header("location:inventario.php");
    } else{
        $_SESSION['warning'] = 'Acceso Denegado';
        $_SESSION['message_type'] = 'danger';
    }
}
?>
