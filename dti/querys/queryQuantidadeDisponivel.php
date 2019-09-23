<?php
    require_once '../config/DB.php';
    $turno = $_REQUEST['select_turno'];
    $campus = $_REQUEST['select_campus'];
    $data = $_REQUEST['data'];
    $idEquipamento = $_REQUEST['select_equipamento'];
    $horario = $_REQUEST['select_horario'];

    $result_equipamentos = "SELECT equipamento.id, equipamento.nome, equipamento.quantidade , (equipamento.quantidade - (SELECT count(reserva.idEquipamento) FROM reserva WHERE reserva.turno = '$turno'
                            AND reserva.data = '$data'
                            AND reserva.idCampus = '$campus'
                            AND reserva.horario = '$horario'
                            AND reserva.idEquipamento = equipamento.id)) AS 'QuantidadeDisponível' 
FROM reserva INNER JOIN equipamento ON equipamento.id = reserva.idEquipamento INNER JOIN campus ON reserva.idCampus = campus.id WHERE reserva.idEquipamento = $idEquipamento ";
    $exec = DB::prepare($result_equipamentos);
    $exec->execute();
    while($dados = $exec->fetch(PDO::FETCH_ASSOC)){
        $result[] = array(
            'qtd' => $dados['QuantidadeDisponível']
        );
    }

    echo (json_encode($result));
    
?>
           