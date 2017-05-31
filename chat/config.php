<?php
require 'environment.php';

define("BASE_URL", "http://localhost:8080/chat");

global $config;
$config = array();
if(ENVIRONMENT == 'development'){
    $config['dbname'] = 'chat';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    $config['dbname'] = 'chat';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';    
}
