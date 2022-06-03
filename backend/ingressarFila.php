<?php
    require ('conectionBD.php');

    $idfila = $_GET['idfila'];
    $email = $_COOKIE['email'];
    $dataIngresso = date('Y-m-d');
    $horaingresso = date('H:i:s');
    
    //Recupera o código do Usuário
    $iduser = mysqli_fetch_assoc(mysqli_query($conn, 
    "SELECT codUser FROM usuario
    WHERE usuario.email = '$email'
    LIMIT 1"))['codUser'];

    //Verifica se o usuário já existe na tabela da fila
    $existeUsuarioFila = mysqli_num_rows(mysqli_query($conn,
    "SELECT * FROM ingresso
    WHERE ingresso.iduser = '$iduser'
    AND ingresso.atendido = 0"
    ));

    if ($existeUsuarioFila > 0) {
        echo '<script>alert("Você já está nesta fila!")</script>';
        echo "<script>window.location.href='../pages/ingressarFila/index.php';</script>";
    }else{

        $query = mysqli_query($conn,
        "INSERT INTO ingresso (idfila, iduser, dataingresso, horaingresso, atendido) 
        VALUES ('$idfila', '$iduser', '$dataIngresso', '$horaingresso', 0)");

        echo "<script>window.location.href='../pages/dashboard_pf/index.php';</script>";

    }

    mysqli_close($conn);
?>