<?php
    require_once '../config/DB.php';
    $campus = $_REQUEST['select_campus'];
    $result_equipamentos = "SELECT equipamento.id, equipamento.nome FROM equipamento INNER JOIN campus ON equipamento.campus = campus.id WHERE campus.id = '$campus'";
    $exec = DB::prepare($result_equipamentos);
    $exec->execute();
    while($dados = $exec->fetch(PDO::FETCH_ASSOC)){
        $result[] = array(
            'id' => $dados['id'],
            'nome' => $dados['nome']
        );
    }

    echo (json_encode($result));
    
?>
           