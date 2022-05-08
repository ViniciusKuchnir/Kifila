<?php
    require('conectionBD.php');

    $email = $_POST['email-user'];
    $password = createHashPassword($_POST['password-user']);
    
    $query = mysqli_query($conn, "SELECT * FROM usuario 
        WHERE usuario.email = '$email' AND usuario.senha = '$password'
    ");
    
    if(mysqli_num_rows($query)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorreto(s)');
        window.location.href='../pages/signin/signin.php';</script>";
        die();
    }else{
        setcookie("email",$email, time() + (86400 * 30), "/");
        echo "<script>window.location.href='../pages/dashboard_pf';</script>";
        die();
    }
    

    


    function createHashPassword($password){
        $hash_password = md5($password);
        return $hash_password;
    }


    mysqli_close($conn);
?>