<?php
//This is the connection to DB.
include "connect.php";
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
