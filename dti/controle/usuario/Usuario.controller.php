<?php

    require_once 'Usuario.DAO.php';
    require_once '../../model/usuario/Usuario.class.php';
    $userClass = new usuario_DAO();
    
    $acao = $_POST['acao'];
    if($acao == "autenticar"){
            $userClass->setEmail($_POST['email']);
            $userClass->setSenha($_POST['senha']);
    }else{
        if(empty($userClass->getLogin()) || empty($userClass->getSenha()) ||
           empty($userClass->getCPF())   || empty($userClass->getEmail()) ||
           empty($userClass->getAcesso())|| empty($userClass->getNivel())){
            echo "Algum dado vazio";
        }else{
            $id = $_POST['id'];
            $userClass->setLogin($_POST['email']);
            $userClass->setSenha($_POST['senha']);
            $userClass->setCPF($_POST['cpf']);
            $userClass->setEmail($_POST['email']);
            $userClass->setNivel($_POST['nivel']);
            $userClass->setAcesso($_POST['acesso']);
        }
    }

switch($acao){
    case 'inserir':
        try{
            $userClass->insert();
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'delete':
        try{
            $userClass->delete($id);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'update':
        try{
            $userClass->update($id);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    break;
    case 'autenticar':
        $userClass->autenticar($userClass->getEmail(), $userClass->getSenha());
    break;
}