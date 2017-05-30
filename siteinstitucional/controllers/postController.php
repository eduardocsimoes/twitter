<?php
    class postController extends Controller{
        
        public function index(){
            echo 'Teste do testeController';
        }
        
        public function ver($nome,$sobrenome){
            echo 'A noticia informada foi: '.$nome.' '.$sobrenome;
        }
    }
