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
        mysqli_close($conn);
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
        mysqli_close($conn);
        return $result;
    }
    mysqli_close($conn);
}
function getLibrosAutores()
{
    $conn=getFuenteBibliograficaConnection();
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
    $sql="SELECT Libros.Codigo as CodigoLibro, Anio, Libros.Nombre as NombreLibro, Autores.Nombre as NombreAutor  FROM `Libros` inner join Autores on Libros.Autor = Autores.Codigo";
    if ($result = $conn->query($sql)) {
        mysqli_close($conn);
        return $result;
    }
    mysqli_close($conn);
}
function getDefiniciones()
{
    $conn=getFuenteBibliograficaConnection();
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    $sql="SELECT * FROM `Definiciones`";


    if ($result = $conn->query($sql)) {
        mysqli_close($conn);
        return $result;
    }
    mysqli_close($conn);
}

function getDefinicionesGeneral($search)
{
    $conn=getFuenteBibliograficaConnection();
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
    if ($search=="") {
        $sql="SELECT d.Codigo, d.Termino,d.Definicion,d.Pagina, l.Nombre as NombreLibro, l.Anio, a.Nombre as NombreAutor from Definiciones d INNER join Libros l on d.Libro=l.Codigo INNER JOIN Autores a on l.Autor=a.Codigo";
    } else {
        $sql="SELECT d.Codigo, d.Termino,d.Definicion,d.Pagina, l.Nombre as NombreLibro, l.Anio, a.Nombre as NombreAutor from Definiciones d INNER join Libros l on d.Libro=l.Codigo INNER JOIN Autores a on l.Autor=a.Codigo Where d.Termino like '%".$search."%'"." ";
    }
    if ($result = $conn->query($sql)) {
        mysqli_close($conn);
        return $result;
    }
    mysqli_close($conn);
}
