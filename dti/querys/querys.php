<?php
    require_once '../../config/DB.php';
    $campus = $_REQUEST['select_campus'];
    $result_salas = "SELECT * FROM salas INNER JOIN campus ON salas.idCampus = campus.id WHERE campus.nome = '$campus'";
    $exec = DB::prepare($result_salas);
    $exec->execute();
    while($dados = $exec->fetch(PDO::FETCH_ASSOC)){
        $resultado[] = array(
            'nome' => $dados['salas.nome']
        );
    }

    echo(json_encode($resultado));
?>
           