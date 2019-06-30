<?php

    require_once '../../model/equipamento/Equipamento.class.php';

    class equipamento_DAO extends equipamento_class{
        protected $tabela = 'equipamento';
        
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
        public function insert($nome,$quantidade,$tipo,$descricao,$vidaUtil){
            try{
                $sql = "INSERT INTO $this->tabela(nome, quantidade, tipo, descricao, vidaUtil)
             VALUES (:nome, :quantidade, :tipo, :descricao, :vidaUtil)";
                $exec = DB::prepare($sql);
                $exec->bindParam(':nome',$nome);
                $exec->bindParam(':quantidade',$quantidade);
                $exec->bindParam(':tipo',$tipo);
                $exec->bindParam(':descricao',$descricao);
                $exec->bindParam(':vidaUtil',$vidaUtil);
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function update($id){
            try{
                $sql = "UPDATE $this->tabela SET nome = :nome, quantidade = :quantidade, tipo = :tipo,
                descricao = :descricao, vidaUtil = :vidaUtil WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindParam(':id', $id, PDO::PARAM_INT);
                $exec->bindParam(':nome', $this->nome);
                $exec->bindParam(':quantidade', $this->quantidade);
                $exec->bindParam(':tipo',$this->tipo);
                $exec->bindParam(':descricao', $this->descricao);
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