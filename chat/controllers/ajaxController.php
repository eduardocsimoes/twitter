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
    
    public function sendMessage(){
        var_dump($_POST['msg']);
        if(isset($_POST['msg']) && !empty($_POST['msg'])){
            echo 'teste1';
            $msg = addslashes($_POST['msg']);
            $idchamado = $_SESSION['chatwindow'];
            if($_SESSION['area'] == 'suporte'){
                $origem = 0;
            }else{
                $origem = 1;
            }
            
            $m = new Mensagens();
            $m->sendMessage($idchamado, $origem, $msg);
        }
    }
    
    public function getMessage(){
        $dados = array();
        
        $m = new Mensagens();
        $c = new Chamados();
        
        $idchamado = $_SESSION['chatwindow'];
        $area = $_SESSION['area'];
        $lastmsg = $c->getLastMsg($idchamado, $idchamado);
        
        $dados['mensagens'] = $m->getMessage($idchamado, $lastmsg);
        
        echo json_encode($dados);
    }
}

