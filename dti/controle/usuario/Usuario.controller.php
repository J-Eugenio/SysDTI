<?php

    require_once '../../model/usuario/Usuario.class.php';

    class usuario_controller extends usuario_class{
        protected $tabela = 'tb_usuario';
        
        public function findUnic($id){
            $sql = "SELECT * FROM $this->tabela WHERE id = :id";
            $exec = DB::prepare($sql);
            $exec->bindValue(':id', $id, PDO::PARAM_INT);
            $exec->execute();
            return $exec->fetch();
        }
        public function findAll($id){
            $sql = "SELECT * FROM $this->tabela ";
            $exec = DB::prepare($sql);
            $exec->execute();
            return $exec->fetchAll();
        }
        public function insert(){
            $sql = "INSERT INTO $this->tabela(login, senha, nome, cpf, email, nivel, acesso)
             VALUES (:login, :senha:, nome:, :cpf, :email, :nivel, :acesso)";
            $exec = DB::prepare($sql);
            $exec->bindParam(':login',$this->login);
            $exec->bindParam(':senha',$this->nome);
            $exec->bindParam(':cpf',$this->cpf);
            $exec->bindParam(':email',$this->email);
            $exec->bindParam(':nivel',$this->nivel);
            $exec->bindParam(':acesso',$this->acesso);
            return $exec->execute();
        }
        public function update($id){
            $sql = "UPDATE $this->tabela SET login = :login, senha = :senha, nome = :nome,
            cpf = :cpf, email = :email, nivel = :nivel, acesso = :acesso WHERE id = :id";
            $exec = DB::prepare($sql);
            $exec->bindParam(':id', $id, PDO::PARAM_INT);
            $exec->bindParam(':login', $this->login);
            $exec->bindParam(':senha', $this->senha);
            $exec->bindParam(':cpf', $this->cpf);
            $exec->bindParam(':email', $this->email);
            $exec->bindParam(':nivel', $this->nivel);
            $exec->bindParam(':acesso', $this->acesso);
            return $exec->execute();

        }
        public function delete($id){
            $sql = "DELETE FROM $this->tabela WHERE id = :id";
            $exec = DB::prepare($sql);
            $exec->bindParam(':id', $id. PDO::PARAM_INT);
            return $exec->execute();
        }
    }
?>