<?php
//This is the connection to DB.
include "connect.php";

if (isset($_GET['nombreAutor'])) {
    $nombreAutor = ($_GET['nombreAutor']);
} else {
    return;
}
if (isset($_GET['ip'])) {
    $ip = ($_GET['ip']);
} else {
    $ip = "";
}
if (isset($_GET['city'])) {
    $city = ($_GET['city']);
} else {
    $city = "";
}
if (isset($_GET['country_code'])) {
    $country_code = ($_GET['country_code']);
} else {
    $country_code = "";
}
if (isset($_GET['longitude'])) {
    $longitude = ($_GET['longitude']);
} else {
    $longitude = 1;
}
if (isset($_GET['latitude'])) {
    $latutide = ($_GET['latitude']);
} else {
    $latutide = 1;
}

$conn = getFuenteBibliograficaConnection();
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
$nowFormat = date('Y-m-d H:i:s');

$sql = "INSERT INTO Autores(Nombre, FechaIngreso, Ip, Pais, Ciudad, Lat, Lon) VALUES ('" . $nombreAutor . "','" . $nowFormat . "','" . $ip . "','" . $country_code . "','" . $city . "'," . $latutide . "," . $longitude . ")";

if ($result = $conn->query($sql)) {
} else {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_close($conn);
