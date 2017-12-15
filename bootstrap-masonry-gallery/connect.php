<?php

function getFuenteBibliograficaConnection()
{
    $servername = "mysql.hostinger.com";
    $servername = "sql148.main-hosting.eu.";
    $database = "u997938679_fb1";
    $username = "u997938679_jaime";
    $password = "US3pRrug6H3y";
    $conn = new mysqli($servername, $username, $password, $database);
    return $conn;
}
