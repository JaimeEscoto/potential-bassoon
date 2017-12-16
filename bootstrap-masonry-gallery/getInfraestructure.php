<?php
//This is the connection to DB.
include "connect.php";
function getLibros()
{
    $conn=getFuenteBibliograficaConnection();
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
    $sql="SELECT Libros.*, Autores. Nombre as NombreAutor FROM `Libros` INNER join Autores on Libros.Autor=Autores.Codigo";
    if ($result = $conn->query($sql)) {
        return $result;
    }
    mysqli_close($conn);
}
function getAutores()
{
    $conn=getFuenteBibliograficaConnection();
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
    $sql="SELECT * FROM Autores LIMIT 200";
    if ($result = $conn->query($sql)) {
        return $result;
    }
    mysqli_close($conn);
}
