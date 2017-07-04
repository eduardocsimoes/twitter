<?php
    class homeController extends Control{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $dados = array();
            
            
            
            $this->loadTemplate('home',$dados);
        }
    }

