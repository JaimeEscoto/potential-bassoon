<?php
//This is the connection to DB.
include "connect.php";

if (isset($_GET['termino'])) {
    $termino = ($_GET['termino']);
} else {
    return;
}
if (isset($_GET['codigo'])) {
    $codigo = ($_GET['codigo']);
} else {
    return;
}
if (isset($_GET['definicion'])) {
    $definicion = ($_GET['definicion']);
} else {
    return;
}
if (isset($_GET['pagina'])) {
    $pagina = ($_GET['pagina']);
} else {
    return;
}
if (isset($_GET['nombreLibro'])) {
    $nombreLibro = ($_GET['nombreLibro']);
} else {
    return;
}
$conn = getFuenteBibliograficaConnection();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$nowFormat = date('Y-m-d H:i:s');

$sql = "UPDATE Definiciones SET Termino= '".$termino. "', Definicion='".$definicion."', Pagina= ".$pagina.", Libro=".$nombreLibro." where Codigo=".$codigo;

if ($result = $conn->query($sql)) {
} else {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_close($conn);
