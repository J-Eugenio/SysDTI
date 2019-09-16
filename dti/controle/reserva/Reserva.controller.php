<?php

    require_once 'Reserva.DAO.php';
    require_once '../../model/reserva/Reserva.class.php';
    $ReservaClass = new reserva_DAO();
    switch($_SERVER['REQUEST_METHOD'])
    {
        case 'GET':  $acao = $_GET['acao']; break;
        case 'POST': $acao = $_POST['acao']; break;
    }
    if($acao == "delete"){
        $ReservaClass->setId($_GET['id']);
    }
    if($acao != "delete"){
        if(!empty($ReservaClass->getIdEquipamento()) || !empty($ReservaClass->getIdCampus())
        || !empty($ReservaClass->getIdSala()) || !empty($ReservaClass->getData()) || !empty($ReservaClass->getTurno()) 
        || !empty($ReservaClass->getHorario())|| !empty($ReservaClass->getObservacao())){
            echo "Algum dado vazio";
        }else{
            if($acao == "update"){
                $ReservaClass->setId($_POST['id']);
            }
            $ReservaClass->setIdEquipamento($_POST['select_equipamento']);
            $ReservaClass->seIdCampus($_POST['select_campus']);
           // $ReservaClass->setIdSala($_POST['select_salas']);
            $ReservaClass->setData($_POST['data']);
            $ReservaClass->setHorario($_POST['select_horario']);
            $ReservaClass->setTurno($_POST['select_turno']);
            $ReservaClass->setObservacao($_POST['observacao']);

        }
    }

switch($acao){
    case 'inserir':
        try{
            $ReservaClass->insert($ReservaClass->getIdEquipamento(),$ReservaClass->getIdSala(),$ReservaClass->getIdCampus(), $ReservaClass->getData(),$ReservaClass->getTurno(),$ReservaClass->getHorario(), $ReservaClass->getObservacao() );
            
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'delete':
        try{
            $ReservaClass->delete($ReservaClass->getId());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'update':
        try{
            $ReservaClass->update($ReservaClass->getId());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
}