<?php
class Mensagens extends model{
    public function sendMessage($idchamado, $origem, $msg){
        if(!empty($idchamado) && !empty($msg)){
            $sql = "INSERT INTO mensagens SET id_chamado = '$idchamado', origem = '$origem', mensagem = '$msg', data_enviado = NOW()";
            $this->db->query($sql);         
        }
    }
    
    public function getMessage($idchamado){
        $array = array();
        
        $sql = "SELECT * FROM mensagens WHERE id_chamado = '$idchamado' AND data_enviado > '$lastmsg'";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        $c = new Chamados();
        $area = $_SESSION['area'];
        $c->updateLastMsg($idchamado, $area);
        
        return $array;
    }
}