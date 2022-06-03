<?php
    function nameUser($email){
        require('conectionBD.php');
        $query = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT nome, sobrenome 
        FROM usuario
        WHERE usuario.email = '$email'"
        ));

        print_r($query['nome']." ".$query['sobrenome']);
        mysqli_close($conn);
    }

    //Função que retorna as listas em que o usuário está inserido 
    //Para mostrar no dashboard em forma de card
    function listQueuesUser($email){
        require('conectionBD.php');
        $query = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT  *
        FROM ingresso i
        JOIN usuario u
        JOIN fila f
        ON u.codUser = i.iduser
        WHERE u.email = $email AND i.atendido = 0 
        
        "
        ));

        print_r($query['nome']." ".$query['sobrenome']);
        mysqli_close($conn);
    }
?>