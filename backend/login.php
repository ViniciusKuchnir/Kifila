<?php
    require('conectionBD.php');

    setcookie("email", "", time()-3600);

    $email = $_POST['email-user'];
    $password = createHashPassword($_POST['password-user']);
    
    $query_user = mysqli_query($conn, "SELECT * FROM usuario 
        WHERE usuario.email = '$email' AND usuario.senha = '$password'
    ");

    $query_company = mysqli_query($conn, "SELECT * FROM empresa 
        WHERE empresa.email = '$email' AND empresa.senha = '$password'
    ");

    if (mysqli_num_rows($query_user) === 1) {
        setcookie("email",$email, time() + (86400 * 30), "/");
        echo "<script>window.location.href='../pages/dashboard_pf';</script>";
        die();
    }else if (mysqli_num_rows($query_company) === 1){
        setcookie("email",$email, time() + (86400 * 30), "/");
        echo "<script>window.location.href='../pages/dashboard_pj';</script>";
        die();
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorreto(s)');
        window.location.href='../pages/signin/signin.php';</script>";
        die();
    }

    function createHashPassword($password){
        $hash_password = md5($password);
        return $hash_password;
    }


    mysqli_close($conn);
?>