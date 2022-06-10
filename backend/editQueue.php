<?php
    require ('conectionBD.php');

    $nameFila = $_POST['name-queue'];
    $toleranceTime = $_POST['tolerance-time'];
    $description = $_POST['description-queue'];
    $idfila = $_GET['idfila'];

    mysqli_query($conn, 
    "UPDATE fila
    SET nome = '$nameFila', 
    descricao = '$description', 
    toleranciamedia = '$toleranceTime'
    WHERE fila.idfila = '$idfila'");
    
    echo '<script>window.location.href="../pages/editarFila/index.php?idfila='.$idfila.'"</script>';
    mysqli_close($conn);

    
?>