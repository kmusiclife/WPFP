<?php

class WPFPServices extends WPFP
{    
    var $user;
    var $session_id;
    
    //
    // Service Instances
    //
    public function servicesInit()
    {
        $this->sessionStart();
        $this->session_id = session_id();
    }
    public function sessionStart()
    {
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_name(WPFP_SESSION_SECRET_KEY);
            session_start(array(
                'name' => WPFP_SESSION_SECRET_KEY,
                'cookie_lifetime' => WPFP_SESSION_LIFETIME,
            ));
        }
    }

}