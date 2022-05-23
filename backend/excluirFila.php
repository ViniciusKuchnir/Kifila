<?php
    require ('conectionBD.php');

    $idfila = $_GET['idfila'];

    mysqli_query($conn, "DELETE FROM fila WHERE idfila='$idfila'");

    echo "<script>window.location.href='../pages/filas/index.php';</script>";

    mysqli_close($conn);
?>