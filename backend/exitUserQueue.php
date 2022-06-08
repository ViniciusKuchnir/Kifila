<?php
    require ('conectionBD.php');

    $user = $_COOKIE['email'];
    $idfila = $_GET['idfila'];
    $iduser = $_GET['iduser'];

    $query = mysqli_query($conn, 
    "DELETE FROM ingresso
    WHERE ingresso.iduser = '$iduser'
    AND ingresso.idfila = '$idfila'");

    echo "<script>window.location.href='../pages/dashboard_pf/index.php';</script>";


    mysqli_close($conn);
?>