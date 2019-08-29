<?php

    require_once '../../config/DB.php';
    class salas_class{
        protected $tabela;
        private $id;
        private $nome;
        private $idCampus;

        //set's
        public function setId($id){$this->id = $id;}
        public function setNome($nome){$this->nome = $nome;}
        public function seIdCampus($idCampus){$this->idCampus = $idCampus;}
        //get's
        public function getId(){return $this->id;}
        public function getNome(){return $this->nome;}
        public function getIdCampus(){return $this->idCampus;}
    }
?>