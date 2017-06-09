<?php
class Mensagens extends model{
    public function sendMessage($idchamado, $origem, $msg){
        if(!empty($idchamado) && !empty($msg)){
            $sql = "INSERT INTO mensagens SET id_chamado = '$idchamado', origem = '$origem', mensagem = '$msg', data_enviado = NOW()";
            $this->db->query($sql);         
        }
    }
}