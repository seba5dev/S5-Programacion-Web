
<?php
include_once("conexion.php");

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $fecha = $_POST['fecha'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
}
    $update = "UPDATE estudiantes SET nombre='$nombre', apellido='$apellido', cedula='$cedula', fecha='$fecha', celular='$celular', email='$email' WHERE id='$id'";
    mysqli_query($con, $update);

    header("Location: ../crud.php");
?>