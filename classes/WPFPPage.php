<?php

class WPFPPage extends WPFPRouter
{
    public function init(){
        $this->servicesInit();
    }
    public function execute()
    {
        if( preg_match('/^\/page\/sample-page\//', $this->uri) ){
            $this->pageSample();
        }
    }
    private function pageSample(){
        die( include(WPFP_DIR.'/page/sample-page.php') );
    }

}