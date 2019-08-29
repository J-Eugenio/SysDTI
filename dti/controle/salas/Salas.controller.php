<?php

    require_once 'Salas.DAO.php';
    require_once '../../model/salas/Salas.class.php';
    $SalasClass = new salas_DAO();
    switch($_SERVER['REQUEST_METHOD'])
    {
        case 'GET':  $acao = $_GET['acao']; break;
        case 'POST': $acao = $_POST['acao']; break;
    }
    if($acao == "delete"){
        $SalasClass->setId($_GET['id']);
    }
    if($acao != "delete"){
        if(!empty($SalasClass->getnome()) || !empty($SalasClass->getIdCampus())){
            echo "Algum dado vazio";
        }else{
            if($acao == "update"){
                $SalasClass->setId($_POST['id']);
            }
            $SalasClass->setNome($_POST['nome']);
            $SalasClass->seIdCampus($_POST['select_campus']);
        }
    }

switch($acao){
    case 'inserir':
        try{
            $SalasClass->insert($SalasClass->getNome(),$SalasClass->getIdCampus());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'delete':
        try{
            $SalasClass->delete($SalasClass->getId());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'update':
        try{
            $SalasClass->update($SalasClass->getId());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
}