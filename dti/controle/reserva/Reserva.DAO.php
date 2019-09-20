<?php

    require_once '../../model/reserva/Reserva.class.php';

    class reserva_DAO extends reserva_class{
        protected $tabela = 'reserva';
        
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
        public function insert($idEquipamento, $idSala, $idCampus, $data, $turno, $horario, $observacao){
            try{
                $sql = "INSERT INTO $this->tabela(idEquipamento, idSala, idCampus, data, turno, horario, observacao)
             VALUES (:idEquipamento, :idSala, :idCampus, :data, :turno, :horario, :observacao)";
                $exec = DB::prepare($sql);
                $exec->bindParam(':idEquipamento',$idEquipamento);
                $exec->bindParam(':idSala',$idSala, PDO::PARAM_INT);
                $exec->bindParam(':idCampus',$idCampus);
                $exec->bindParam(':data',$data);
                $exec->bindParam(':turno',$turno);
                $exec->bindParam(':horario',$horario);
                $exec->bindParam(':observacao',$observacao);

                echo "<script>alert('Reserva Cadastrada com sucesso');window.location ='../../view/telas/TelaRealizarReserva.php';</script>";
                return $exec->execute();
              
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function update($id){
            try{
                $sql = "UPDATE $this->tabela SET idEquipamento = :idEquipamento, idSala = :idSala, idCampus = :idCampus, data = :data, turno = :turno, horario = :horario WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindValue(':id', $id, PDO::PARAM_INT);
                $exec->bindValue(':idEquipamento', $this->getIdEquipamento());
                $exec->bindValue(':idSala', $this->getIdSala());
                $exec->bindValue(':idCampus', $this->getIdCampus());
                $exec->bindValue(':data', $this->getData());
                $exec->bindValue(':turno', $this->getTurno());
                $exec->bindValue(':horario', $this->getTurno());
                // echo "<script>alert('Reserva Editada com Sucesso');window.location ='../../view/telas/';</script>";
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }

        }
        public function delete($id){
            try{
                $sql = "DELETE FROM $this->tabela WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindValue(':id', $id, PDO::PARAM_INT);
                echo "<script>alert('Reserva deletada com sucesso');window.location ='../../view/telas/TelaListarReserva.php';</script>";
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
    }
?>