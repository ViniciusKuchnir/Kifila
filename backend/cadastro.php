<?php
     // Definições de host, database, usuário e senha
     $host = "localhost:3307";
     $db   = "kifila";
     $user = "root";
     $pass = "root";

      // Cria a conexão com o banco de dados
      $conn = mysqli_connect($host, $user, $pass, $db);
      // Verifica a conexão
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }

    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $type_user = $_POST['type-user'];
    $password = $_POST['user-password'];

     if ($type_user == 'company') {
         $service = $_POST['service'];
         $cnpj = $_POST['user-cnpj'];
         mysqli_query($conn, "INSERT INTO tb_user (email, senha, nome) values('$email','$password', '$name')"); //Adiciona ao banco de dados os dados do usuario  
         mysqli_query($conn, "INSERT INTO tb_user_pj (setor_atuacao, cnpj) values('$service', '$cnpj')"); //Adiciona ao banco de dados os dados do usuario
     }else{
         $lastName = handleName($name);
         $cpf = $_POST['user-cpf'];
         $gender = $_POST['gender'];
         mysqli_query($conn, "INSERT INTO tb_user (email, senha, nome) values('$email','$password', '$name')");
         mysqli_query($conn, "INSERT INTO tb_user_pf (sobrenome, cpf, sexo) values('$lastName','$cpf', '$gender')"); //Adiciona ao banco de dados os dados do usuario
        }

function handleName($nameUser){
    $name = explode(" ", $nameUser);
    $lastName = "";
    array_shift($name);
    for ($i=0; $i < count($name); $i++) { 
        $lastName .= $name[$i];
    }
    
    return $lastName;
}

                         

    mysqli_close($conn);
?>