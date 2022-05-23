<?php
    require ('conectionBD.php');

    $name = $_POST['name-queue'];
    $tolerance = $_POST['tolerance-time'];
    $description = $_POST['description-queue'];
    $email = $_COOKIE['email'];
    $date = date('y/m/d');

    $query = mysqli_query($conn, "SELECT codEmpresa FROM empresa WHERE email = '$email'"); 
    $id_user = mysqli_fetch_row($query)[0];
    
    mysqli_query($conn, "INSERT INTO fila (nome, descricao, numerointegrantes, toleranciamedia, datafila, criador)
        VALUES ('$name', '$description', 0 , '$tolerance', '$date', '$id_user' )
    ");

    mysqli_close($conn);
?>