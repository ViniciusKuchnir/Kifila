<?php
    require ('conectionBD.php');
    
    $fila = $_GET['idfila'];

    mysqli_query($conn,
    "UPDATE fila
    SET ativada = 0
    WHERE idfila = '$fila'");
    
    mysqli_close($conn);

    echo "<script>window.location.href='../pages/filas/index.php'</script>";
?>