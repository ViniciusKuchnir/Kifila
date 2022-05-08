<?php
    require ('conectionBD.php');
    
    function getNameuser($email){
        require ('conectionBD.php');
        $email = $_COOKIE['email'];       
        
        $query_user = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email' LIMIT 1");
        $total_users = mysqli_num_rows($query_user);  

        $query_company = mysqli_query($conn, "SELECT * FROM empresa WHERE email = '$email' LIMIT 1");
        $total_company = mysqli_num_rows($query_company);

        $fetch_user = mysqli_fetch_row($query_user);
        $fetch_company = mysqli_fetch_row($query_company);

        
        if ($total_users == 1) {
            $nameUser = $fetch_user[1] . ' ' .$fetch_user[2];
            return $nameUser;
        }else if($total_company == 1){
            $nameCompany = $fetch_company[1];
            return $nameCompany;
        }

        mysqli_close($conn); 
    }
?>