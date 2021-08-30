<?php

class WPFP
{
    public function echoJson($variables){
        header("Content-Type: application/json; charset=utf-8");
        die( json_encode($variables) );
    }
}