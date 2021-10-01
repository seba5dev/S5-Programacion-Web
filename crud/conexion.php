
<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "uweb";

$con = mysqli_connect($host, $user, $password, $dbname)
    or die('Could not connect to the database server' . mysqli_connect_error());

return $con;
//$con->close();
?>