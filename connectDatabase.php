<?php
function Connect()
{
    $server_name = "sql6.freesqldatabase.com";
    $username = "sql6465229";
    $password = "KEUf6ye7S9";
    $db_name = "sql6465229";
    try {
        $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
       
        return $conn;
    } catch (PDOException $e) {
        return -1;
    }
}
