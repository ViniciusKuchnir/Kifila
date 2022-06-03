<?php
    require ('conectionBD.php');

    $fila = $_GET['fila'];

    $query = mysqli_query($conn, 
    "SELECT * FROM fila
    WHERE fila.idfila IN ('$fila')
    OR fila.nome LIKE '%".$fila."%'");
        

    $results = array();

    while ($result = mysqli_fetch_assoc($query)) {
        $results[] = $result;
    }

    if (count($results) > 0) {
        for ($i=0; $i < count($results); $i++){ 
            print_r('<div class="col-md-12 mb-3">');
            print_r(' <div class="card">');
            print_r('<div class="card-body">');
            print_r('<h5 class="card-title mb-3">Código: '.$results[$i]['idfila'] .'</h5>');
            print_r('<h5 class="card-title">Nome Fila: '.$results[$i]['nome'].'</h5>');
            print_r('<h6 class="card-subtitle mb-3 text-muted">Data de Criação: </h6>');
            print_r('<p class="card-text">Descrição:</p>');
            print_r('<div class="row">');
            print_r('<div class="col-md-12 buttons-card">');
            print_r('<a href="../../backend/ingressarFila.php?idfila='.$results[$i]['idfila'].'">');
            print_r('<button type="button" class="button-card" id="enter-button">Entrar na Fila</button>    ');
            print_r('</a>');
            print_r('</div>');
            print_r('</div>');
            print_r('</div>');
            print_r('</div>');
            print_r('</div>');
        }
    }else{
        echo('<div><h2 id="msg">Nenhuma fila com o valor <strong>'.$fila.'</strong> encontrada.</h2></div>');
    }
     
    mysqli_close($conn);
?>