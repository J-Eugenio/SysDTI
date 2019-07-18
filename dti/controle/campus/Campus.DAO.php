<?php

    require_once '../../model/campus/Campus.class.php';

    class campus_DAO extends campus_class{
        protected $tabela = 'campus';
        
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
        public function insert($nome,$cnpj,$endereco,$rua,$numero){
            try{
                $sql = "INSERT INTO $this->tabela(nome, cnpj, endereco , rua, numero)
             VALUES (:nome, :endereco , :cnpj, :rua, :numero)";
                $exec = DB::prepare($sql);
                $exec->bindParam(':nome',$nome);
                $exec->bindParam(':cnpj',$cnpj);
                $exec->bindParam(':endereco',$endereco);
                $exec->bindParam(':rua',$rua);
                $exec->bindParam(':numero',$numero);
                echo "<script>alert('Campus Cadastrado com sucesso');window.location ='../../view/telas/TelaCadastroCampus.php';</script>";
                return $exec->execute();
              
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function update($id){
            try{
                $sql = "UPDATE $this->tabela SET nome = :nome, cnpj = :cnpj, endereco = :endereco, rua = :rua,
                numero = :numero WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindParam(':id', $id, PDO::PARAM_INT);
                $exec->bindParam(':nome', $this->nome);
                $exec->bindParam(':cnpj', $this->cnpj);
                $exec->bindParam(':endereco', $this->endereco);
                $exec->bindParam(':rua',$this->rua);
                $exec->bindParam(':numero', $this->numero);
                echo "<script>alert('Campus Editado com Sucesso');window.location ='../../view/telas/TelaListarCampus.php';</script>";
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