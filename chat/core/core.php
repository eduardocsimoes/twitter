<?php
    class Core{
      
        public function run(){
            
            echo $_SERVER['PHP_SELF'];
            
            $url = explode('index.php',$_SERVER['PHP_SELF']);
            $url = end($url);
            
            $params = array();
            if(!empty($url)){
                $url = explode('/', $url);
                array_shift($url);
                
                $currentController = $url[0].'Controller';
                array_shift($url);
                
                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);
                }else{
                    $currentAction = 'index';
                }
                
                if(count($url) > 0){
                    $params = $url;
                }
            }else{
                $currentController = 'homeController';
                $currentAction = 'index';                
            }         
            
            echo '<br/> CURRENT CONTROLLER: '.$currentController;
            echo '<br/> CURRENT ACTION: '.$currentAction.'<br/>';
            echo '<br/> PARAMS: ';
            print_r($params);
            echo '<br/>';
            
            require_once 'core/controller.php';
            
            $c = new $currentController();
            call_user_func_array(array($c, $currentAction), $params);
        }
    }

