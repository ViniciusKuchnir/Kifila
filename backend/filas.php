<?php

    function getFilas(){
        require ('conectionBD.php');
        $email = $_COOKIE['email'];       
        
        $query = mysqli_query($conn, "SELECT * FROM empresa WHERE email = '$email'");
        $fetch = mysqli_fetch_row($query);
        $id_criador = $fetch[0];

        $query_filas = mysqli_query($conn, "SELECT * FROM fila WHERE criador = '$id_criador'");

        $filas = array();
        while ($fila = mysqli_fetch_assoc($query_filas)) {
            $filas[] = $fila;
        }

        return $filas;

        mysqli_close($conn);
    }

    function getEstadoFila($idfila){
        require ('conectionBD.php');

        $stateQueue = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT f.ativada FROM fila AS f
        WHERE idfila = '$idfila'"))['ativada'];

        return $stateQueue;


        mysqli_close($conn);
    }

?>