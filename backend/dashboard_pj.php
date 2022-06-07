<?php
    function companyName($email){
        require ('conectionBD.php');

        $query = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT nome 
        FROM empresa
        WHERE empresa.email = '$email'"
        ));

        print_r($query['nome']);
        
        mysqli_close($conn);
    }

?>