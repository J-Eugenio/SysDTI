<?php

    require_once '../../config/DB.php';
    class reserva_class{
        protected $tabela;
        private $id;
        private $idCampus;
        private $idSala;
        private $idEquipamento;
        private $data;
        private $turno;
        private $horario;
        private $observacao;

        //set's
        public function setId($id){$this->id = $id;}
        public function seIdCampus($idCampus){$this->idCampus = $idCampus;}
        public function setIdSala($idSala){$this->idSala = $idSala;}
        public function setIdEquipamento($idEquip){$this->idEquipamento = $idEquip;}
        public function setData($data){$this->data = $data;}
        public function setTurno($turno){$this->turno = $turno;}
        public function setHorario($horario){$this->horario = $horario;}
        public function setObservacao($observacao){$this->observacao = $observacao;}

        //get's
        public function getId(){return $this->id;}
        public function getIdCampus(){return $this->idCampus;}
        public function getIdSala(){return $this->idSala;}
        public function getIdEquipamento(){return $this->idEquipamento;}
        public function getData(){return $this->data;}
        public function getTurno(){return $this->turno;}
        public function getHorario(){return $this->horario;}
        public function getObservacao(){return $this->observacao;}
    }
?>