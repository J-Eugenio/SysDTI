<?php

    require_once '../../config/DB.php';
    class campus_class{
        protected $tabela;
        private $nome;
        private $CNPJ;
        private $rua;
        private $numero;

        //sets
        public function setNome($nome){$this->nome = $nome;}
        public function setCNPJ($cnpj){$this->CNPJ = $cnpj;}
        public function setRua($rua){$this->rua = $rua;}
        public function setNumero($numero){$this->numero = $numero;}

        //gets
        public function getNome(){return $this->nome;}
        public function getCNPJ(){return $this->CNPJ;}
        public function getRua(){return $this->rua;}
        public function getNumero(){return $this->numero;}
    }