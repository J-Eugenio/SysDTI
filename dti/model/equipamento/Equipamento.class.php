<?php

    require_once '../../config/DB.php';
    class equipamento_class{
        protected $tabela;
        private $id;
        private $identificador;
        private $nome;
        private $quantidade;
        private $tipo;
        private $descricao;
        private $campus;
        private $vidaUtil;

        //set's
        public function setId($id){$this->id = $id;}
        public function setIdentificador($i){$this->identificador = $i;}
        public function setNome($nome){$this->nome = $nome;}
        public function setQtd($q){$this->quantidade = $q;}
        public function setTipo($t){$this->tipo = $t;}
        public function setDescricao($descricao){$this->descricao = $descricao;}
        public function setCampus($campus){$this->campus = $campus;}
        public function setVidaUtil($v){$this->vidaUtil = $v;}
        //get's
        public function getId(){return $this->id;}
        public function getIdentificador(){return $this->identificador;}
        public function getNome(){return $this->nome;}
        public function getQtd(){return $this->quantidade;}
        public function getTipo(){return $this->tipo;}
        public function getDescricao(){return $this->descricao;}
        public function getCampus(){return $this->campus;}
        public function getVidaUtil(){return $this->vidaUtil;}
    }
?>