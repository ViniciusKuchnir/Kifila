<?php
    require ('conectionBD.php');

    $idfila = $_GET['idfila'];
    
    mysqli_query($conn,
    "UPDATE fila 
    SET ativada = 1
    WHERE idfila = '$idfila'");
    
    mysqli_close($conn);

    echo "<script>window.location.href='../pages/filas/index.php'</script>"

?>