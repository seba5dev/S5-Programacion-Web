
<?php
include_once("conexion.php");

if (isset($_POST['add'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $fecha = $_POST['fecha'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
}
    $insert = "INSERT INTO estudiantes (nombre,apellido,cedula,fecha,celular,email) VALUES ('$nombre', '$apellido', '$cedula', '$fecha', '$celular', '$email')";
    mysqli_query($con, $insert);
    header("Location: ../crud.php");
?>