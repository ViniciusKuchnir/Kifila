<?php
    function nameUser($email){
        require('conectionBD.php');
        $query = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT nome, sobrenome 
        FROM usuario
        WHERE usuario.email = '$email'"
        ));

        print_r($query['nome']." ".$query['sobrenome']);
        mysqli_close($conn);
    }

    //Função que retorna as filas em que o usuário está inserido 
    //Para mostrar no dashboard em forma de card
    function listQueuesUser($email){
        require('conectionBD.php');
        $query = mysqli_query($conn,
        "SELECT  f.idfila, f.nome, f.idfila, u.codUser
        FROM ingresso i
        JOIN fila f
        ON i.idfila = f.idfila
        JOIN usuario u
        ON i.iduser = u.codUser
        WHERE u.email = '$email' AND i.atendido = 0"
        );

        $results = array();

        while ($result = mysqli_fetch_assoc($query)) {
            $results[] = $result;
        }

        if(count($results) > 0){
            for($i=0; $i < count($results); $i++){
                print_r('<div class="col-md-3">');
                print_r('<div class="card">');
                print_r('<div class="card-body">');
                print_r('<h5 class="card-title">'.$results[$i]['nome'].'</h5>');
                print_r('<h6 class="card-subtitle mb-2 text-muted">Você está na posição:</h6>');
                print_r('<div class="position">');
                print_r('<i class="fa-solid fa-person-arrow-down-to-line"></i>');
                print_r('<p class="position-number">'.positionQueue($results[$i]['idfila'])['count(*)'].'</p>');
                print_r('</div>');
                print_r('<div class="buttons">');
                print_r('<button id="btn-exit" data-bs-toggle="modal" data-bs-target="#exitQueue-'.$results[$i]['idfila'].'">Sair da Fila</button>');
                print_r('</div>');
                print_r('</div>');
                print_r('</div>');
                print_r('</div>');

                /*Gera os alerts para a exclusão da fila*/
                print_r('<div class="modal fade" id="exitQueue-'.$results[$i]['idfila'].'" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">');
                print_r('<div class="modal-dialog" role="document">');
                print_r('<div class="modal-content">');
                print_r('<div class="modal-header">');
                print_r('<h5 class="modal-title">Sair da fila <strong>'.$results[$i]['idfila'].' - '. $results[$i]['nome'].'</strong>?</h5>');
                print_r('<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>');
                print_r('</div>');
                print_r('<div class="modal-body">');
                print_r('<div class="container-fluid">');
                print_r('<p><strong>Atenção:</strong> Ao sair da fila você perderá a sua vez!</p>');
                print_r('<p>Você tem certeza que deseja sair da fila?</p>');
                print_r('</div>');
                print_r('</div>');
                print_r('<div class="modal-footer">');
                print_r('<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>');
                print_r('<a href="../../backend/exitUserQueue.php?idfila='.$results[$i]['idfila'].'&iduser='.$results[$i]['codUser'].'">');
                print_r('<button type="button" class="btn" id="btn-yes-exit">Sim</button>');
                print_r('</a>');
                print_r('</div>');
                print_r('</div>');
                print_r('</div>');
                print_r('</div>');
                
            }
        }else{
            print_r('<div>');
            print_r('<h5>O que você está fazendo fora de uma fila?!</h5>');
            print_r('</div>');
        }

        mysqli_close($conn);
    }

    function positionQueue($idfila){
        require ('conectionBD.php');

        $email = $_COOKIE['email'];

        $ingressoUser = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT i.codIngresso 
        FROM ingresso AS i 
        JOIN usuario AS u
        ON i.iduser= u.codUser
        WHERE i.idfila='$idfila' AND u.email = '$email'"))['codIngresso'];

        
        $position = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT count(*) FROM ingresso AS i
        WHERE i.idfila='$idfila' AND i.atendido=0 AND i.codIngresso< '$ingressoUser'"));
        
        return $position;
        
        mysqli_close($conn);
    }
?>