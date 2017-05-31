<?php
    class suporteController extends Control{
        
        public function __construct() {
            parent::__construct();
            
            $_SESSION['area'] = 'suporte';
        }
        
        public function index(){
            $dados = array();
            $this->loadTemplate('suporte',$dados);
        }
    }

