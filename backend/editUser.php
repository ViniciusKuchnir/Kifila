<?php
    require ('conectionBD.php');
    $nameUser = $_POST['name-user'];
    $password = $_POST['user-password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password === $confirmPassword) {
        if ($password != '' && $confirmPassword != '') {

            $email = $_COOKIE['email']; 
            $query_user = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email'");
            $total_users = mysqli_num_rows($query_user);  

            $query_company = mysqli_query($conn, "SELECT * FROM empresa WHERE email = '$email'");
            $total_company = mysqli_num_rows($query_company);

            
            if ($total_users == 1) {
                $name = handleName($nameUser);
                $lastName = handleLastName($nameUser);
                $hash_password = createHashPassword($password);
                $email = $_COOKIE['email'];
    
                mysqli_query($conn, "UPDATE usuario 
                SET nome = '$name', 
                sobrenome = '$lastName',
                senha = '$hash_password'
                WHERE email = '$email' ");

                
                echo "<script>window.location.href='../pages/user/index.php'</script>";

            }
            if($total_company == 1){
                $hash_password = createHashPassword($password);
                $email = $_COOKIE['email'];

                mysqli_query($conn, "UPDATE empresa
                SET nome = '$nameUser', 
                senha = '$hash_password'
                WHERE email = '$email' ");

                echo "<script>window.location.href='../pages/user/index.php'</script>";
            }    
        }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('As senhas não podem conter valores vazios');
            window.location.href='../pages/user/index.php';</script>
            ";
        die();
        }

    }else {
        echo"<script language='javascript' type='text/javascript'>
        alert('As senhas se encontram diferentes');
        window.location.href='../pages/user/index.php';</script>
        ";
        die();
    }

    function createHashPassword($password){
        $hash_password = md5($password);
        return $hash_password;
    }

    function handleName($nameUser){
        $name = explode(" ", $nameUser)[0];
        return $name;
    }
    
    function handleLastName($nameUser){
        $name = explode(" ", $nameUser);
        $aux = 0;
        for ($i=0; $i < count($name) ; $i++) { //Faz a contagem de quantos sobrenomes existem
            $aux += 1;
        }
        $lastName = $name[$aux - 1]; // Recupera o ultimo sobrenome
        return $lastName;
    }
    mysqli_close($conn);
?>