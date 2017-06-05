<?php
class ajaxController extends control{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $dados = array();

        $this->loadTemplate('chat',$dados);
    }
    
    public function getChamado(){
        $dados = array();
        
        $c = new Chamados();
        $dados['chamados'] = $c->getChamados();
        
        echo json_encode($dados);
    }
}

