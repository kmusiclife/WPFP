<?php

class WPFPRouter extends WPFPServices
{
    var $uri;
    var $controller;

    function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }
    function init(){

        if( preg_match('/^\/page\//', $this->uri) ){
            $this->controller = new WPFPPage();
        }
        if($this->controller){
            $this->controller->init();
        }
    }
    function execute(){
        if($this->controller){
            $this->controller->execute();
        }
    }
}