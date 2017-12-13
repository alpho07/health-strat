<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Alphonce 
 */
class MY_Controller extends CI_Controller  {

    //global Model object
    public $model;
  

    public function __construct() {
        parent::__construct();
        //Instantiate the global object
        $this->model = new Model;
      
        
    }

    //simplify post
    function _p($input) {
        return $this->input->post($input);
        
    }

    //encrypt password
    function cryptPass($input, $rounds = 9) {
        $salt = "";
        $saltChars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
        for ($i = 0; $i < 22; $i++):
            $salt .= $saltChars[array_rand($saltChars)];
        endfor;
        echo crypt($input, sprintf("$2y$%02d$", $rounds) . $salt);
    }

    //Login User
    function authenticate() {
        $this->model->authenticateUser($this->_p('username'), $this->_p('password'));
    }

    //Load Login Page
    function loggin() {
        $data['title']='Login';
        $this->load->view('login',$data);
    }

    //Main General template loader
    function makeView($data) {
        if ($this->session->userdata('user_id') == TRUE) {
            $this->load->view('_layout', $data);
        } else {
            $this->loggin();
        }
    }

}
