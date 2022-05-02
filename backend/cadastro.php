<?php
     require('conectionBD.php');

    $email = $_POST['user-email'];
    $type_user = $_POST['type-user'];
    $password = createHashPassword($_POST['user-password']);

     if ($type_user == 'company') {
        $name = $_POST['user-name'];
        $service = $_POST['service'];
        $cnpj = $_POST['user-cnpj'];
        $id_user = intval(createIdPj($cnpj));
        mysqli_query($conn, "INSERT INTO tb_user (id_user, email, senha, nome) values('$id_user','$email','$password', '$name')"); //Adiciona ao banco de dados os dados do usuario  
        mysqli_query($conn, "INSERT INTO tb_user_pj (id_user, setor_atuacao, cnpj) values('$id_user','$service', '$cnpj')"); //Adiciona ao banco de dados os dados do usuario
     }else{
        $name = $_POST['user-name']; 
        $firstName = handleName($name);
        $lastName = handleLastName($name);
        $cpf = $_POST['user-cpf'];
        $gender = $_POST['gender'];
        $id_user = intval(createIdPf($cpf));
        mysqli_query($conn, "INSERT INTO tb_user (id_user, email, senha, nome) values('$id_user','$email','$password', '$firstName')");
        mysqli_query($conn, "INSERT INTO tb_user_pf (id_user, sobrenome, cpf, sexo) values('$id_user','$lastName','$cpf', '$gender')"); //Adiciona ao banco de dados os dados do usuario
    }

function handleName($nameUser){
    $name = explode(" ", $nameUser)[0];
    return $name;
}

function handleLastName($nameUser){
    $name = explode(" ", $nameUser);
    $lastName = $name[1];
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