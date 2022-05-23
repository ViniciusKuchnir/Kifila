<?php
    require ('conectionBD.php');

    $idfila = $_GET['idfila'];

    mysqli_query($conn, "DELETE FROM fila WHERE idfila='$idfila'");


    mysqli_close($conn);
?>