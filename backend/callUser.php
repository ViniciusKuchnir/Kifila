<?php
    
    require ('conectionBD.php');
    $idfila = $_GET['idfila'];
    
    $query = mysqli_query($conn, 
    "UPDATE ingresso i
    SET i.atendido = 1
    WHERE i.idfila = 21
    AND i.atendido = 0
    LIMIT 1;"
    );

    header('Location: ../pages/acompanharFila/index.php?idfila='.$idfila);

    mysqli_close($conn);
?>