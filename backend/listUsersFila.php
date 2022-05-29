<?php

    function listUsers($idfila){
        require('conectionBD.php');     
        
        $query = mysqli_query($conn, 
        "SELECT codIngresso, nome, sobrenome, dataingresso, horaingresso, atendido  
        FROM ingresso 
        JOIN usuario
        ON ingresso.iduser = usuario.codUser
        WHERE ingresso.idfila = '$idfila'
        ");

        $ingressos = array();

        while ($ingresso = mysqli_fetch_assoc($query)) {
            $ingressos[] = $ingresso;
        }

        return $ingressos;

        mysqli_close($conn);
    }

    function countAtendidos($idFila){
        require('conectionBD.php');     
        
        $query = "SELECT * FROM ingresso WHERE idfila ='$idFila' AND atendido = 1";

        if ($result = mysqli_query($conn, $query)) {
            $count = mysqli_num_rows($result);
        }

        return $count;

        mysqli_close($conn);
    }

    function countNaoAtendidos($idFila){
        require('conectionBD.php');     
        
        $query = "SELECT * FROM ingresso WHERE idfila ='$idFila' AND atendido = 0";

        if ($result = mysqli_query($conn, $query)) {
            $count = mysqli_num_rows($result);
        }

        return $count;

        mysqli_close($conn);
    }
    
?>