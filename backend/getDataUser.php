<?php
    require ('conectionBD.php');
    
    function getNameuser($email){
        require ('conectionBD.php');
        $email = $_COOKIE['email'];       
        $query = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email' LIMIT 1");
        $fetch = mysqli_fetch_row($query);
        $nameUser = $fetch[1] . ' ' .$fetch[2];
        return $nameUser;
        mysqli_close($conn); 
    }
?>