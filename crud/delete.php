<?php
include_once("conexion.php");

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
}

$delete = "DELETE FROM estudiantes WHERE id='$id'";
mysqli_query($con, $delete);

header("Location:../crud.php");
?>