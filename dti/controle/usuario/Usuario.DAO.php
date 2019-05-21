<?php

    require_once '../../model/usuario/Usuario.class.php';

    class usuario_DAO extends usuario_class{
        protected $tabela = 'tb_usuario';
        
        public function findUnic($id){
            try{
                $sql = "SELECT * FROM $this->tabela WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindValue(':id', $id, PDO::PARAM_INT);
                $exec->execute();
                return $exec->fetch();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function findAll($id){
            try{
                $sql = "SELECT * FROM $this->tabela ";
                $exec = DB::prepare($sql);
                $exec->execute();
                return $exec->fetchAll();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function insert(){
            try{
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
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function update($id){
            try{
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
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }

        }
        public function delete($id){
            try{
                $sql = "DELETE FROM $this->tabela WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindParam(':id', $id. PDO::PARAM_INT);
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
    }
?>