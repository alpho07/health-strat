<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author Alphonce
 */
class Auth extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
       function logout() {
        $CI = &get_instance();
        $session_items = array(
            'username' => '',
            'user_id' => ''           
          
        );
        $CI->session->unset_userdata($session_items);
        $this->session->sess_destroy();
        unset($session_items);
        redirect('/');
    }
}
