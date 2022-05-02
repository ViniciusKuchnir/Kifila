<?php
    // Definições de host, database, usuário e senha
    $host = "localhost:3307";
    $db   = "kifila";
    $user = "root";
    $pass = "root";

     // Cria a conexão com o banco de dados
     $conn = mysqli_connect($host, $user, $pass, $db);
     // Verifica a conexão
     if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }

?>