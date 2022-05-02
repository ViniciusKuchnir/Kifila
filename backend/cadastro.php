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
    $password = createHashPassword($_POST['user-password']);

     if ($type_user == 'company') {
         $service = $_POST['service'];
         $cnpj = $_POST['user-cnpj'];
         $id_user = intval(createIdPj($cnpj));
         mysqli_query($conn, "INSERT INTO tb_user (id_user, email, senha, nome) values('$id_user','$email','$password', '$name')"); //Adiciona ao banco de dados os dados do usuario  
         mysqli_query($conn, "INSERT INTO tb_user_pj (id_user, setor_atuacao, cnpj) values('$id_user','$service', '$cnpj')"); //Adiciona ao banco de dados os dados do usuario
     }else{
         $lastName = handleName($name);
         $cpf = $_POST['user-cpf'];
         $gender = $_POST['gender'];
         $id_user = intval(createIdPf($cpf));
         mysqli_query($conn, "INSERT INTO tb_user (id_user, email, senha, nome) values('$id_user','$email','$password', '$name')");
         mysqli_query($conn, "INSERT INTO tb_user_pf (id_user, sobrenome, cpf, sexo) values('$id_user','$lastName','$cpf', '$gender')"); //Adiciona ao banco de dados os dados do usuario
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

//Cria um id para o usuário do tipo: Pessoa Física
/*
    Id = '11' + 6 dígitos ao centro do cpf
    Exemplo Para o cpf 012.542.324-39:
        11542324
*/
function createIdPf($cpf){ 
    $cpf = RemoveSpecialChar($cpf);
    $code_cpf = substr($cpf, 3, 6);
    $id = '11'. $code_cpf;
    return $id;
}

//Cria um id para o usuário do tipo: Pessoa Jurídica
/*
    Id = '22' + 6 dígitos ao centro do cpf
    Exemplo Para o CNPJ 12.345.678/0000-1:
        22345678
*/
function createIdPj($cnpj){ 
    $cnpj = RemoveSpecialChar($cnpj);
    $code_cnpj = substr($cnpj, 2, 6);
    $id = '22'. $code_cnpj;
    return $id;
}

//Remove caracteres especiais
function RemoveSpecialChar($str){
    $result = str_replace(array(".", "-", "/"), '', $str);
    return $result;
}

function createHashPassword($password){
    $hash_password = md5($password);
    return $hash_password;
}
                         

    mysqli_close($conn);
?>