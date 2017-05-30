<?php
require 'environment.php';

define("BASE_URL", "http://localhost:8080/siteinstitucional");

global $config;
$config = array();
if(ENVIRONMENT == 'development'){
    $config['dbname'] = 'test';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    $config['dbname'] = 'test';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';    
}
