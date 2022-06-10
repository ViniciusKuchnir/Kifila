<?php

    function getQueue($idfila){
        require ('conectionBD.php');
        $nameQueue = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT f.nome, f.descricao, f.toleranciamedia FROM fila AS f
        WHERE f.idfila = '$idfila'"));

        return $nameQueue;
        mysqli_close($conn);
    }


?>