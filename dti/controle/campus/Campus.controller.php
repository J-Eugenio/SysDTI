<?php

    require_once 'Campus.DAO.php';
    require_once '../../model/campus/Campus.class.php';
    $CampusClass = new campus_DAO();
    
    $acao = $_POST['acao'];
    $CampusClass->setNome($_POST['nome']);
    $CampusClass->setCNPJ($_POST['cnpj']);
    $CampusClass->setEndereco($_POST['endereco']);
    $CampusClass->setRua($_POST['rua']);
    $CampusClass->setNumero($_POST['numero']);

switch($acao){
    case 'inserir':
        try{
            $CampusClass->insert($CampusClass->getNome(),$CampusClass->getCNPJ(),$CampusClass->getEndereco(),$CampusClass->getRua(),$CampusClass->getNumero());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'delete':
        try{
            $CampusClass->delete($id);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'update':
        try{
            $CampusClass->update($CampusClass->getNome(),$CampusClass->getCNPJ(),$CampusClass->getEndereco(),$CampusClass->getRua(),$CampusClass->getNumero());
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
}