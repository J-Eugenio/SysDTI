<?php
    require_once '../config/DB.php';
    $campus = $_REQUEST['select_campus'];
    $result_salas = "SELECT salas.id, salas.nome FROM salas INNER JOIN campus ON salas.idCampus = campus.id WHERE campus.nome = '$campus'";
    $exec = DB::prepare($result_salas);
    $exec->execute();
    while($dados = $exec->fetch(PDO::FETCH_ASSOC)){
        $result[] = array(
            'id' => $dados['id'],
            'nome' => $dados['nome']
        );
    }

    echo (json_encode($result));
    
?>
           