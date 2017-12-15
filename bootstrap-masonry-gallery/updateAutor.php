<?php
//This is the connection to DB.
include "connect.php";

if (isset($_GET['nombreAutor'])) {
    $nombreAutor = ($_GET['nombreAutor']);
} else {
    return;
}
if (isset($_GET['codigo'])) {
    $codigo = ($_GET['codigo']);
} else {
    return;
}
$conn = getFuenteBibliograficaConnection();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$nowFormat = date('Y-m-d H:i:s');

$sql = "UPDATE Autores SET Nombre= '".$nombreAutor. "' where Codigo=".$codigo;

if ($result = $conn->query($sql)) {
} else {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_close($conn);
