<?php

    require_once 'Equipamento.DAO.php';
    require_once '../../model/equipamento/Equipamento.class.php';
    $equipClass = new equipamento_DAO();
    
    $acao = $_POST['acao'];
    $equipClass->setIdentificador($_POST['identificador']);
    $equipClass->setNome($_POST['nome']);
    $equipClass->setQtd($_POST['quantidade']);
    $equipClass->setTipo($_POST['tipo']);
    $equipClass->setDescricao($_POST['descricao']);

switch($acao){
    case 'inserir':
        try{
            $equipClass->insert($equipClass->getNome(),$equipClass->getQtd(),$equipClass->getTipo(),$equipClass->getDescricao(),$equipClass->getVidaUtil());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'delete':
        try{
            $equipClass->delete($id);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'update':
        try{
            $equipClass->update($id);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
}