<?php
    class chatController extends Control{
        
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $dados = array();
            $this->loadTemplate('chat',$dados);
        }
    }
