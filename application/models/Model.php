<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Alphonce
 */
class Model extends CI_Model {

    //put your code here


    function authenticateUser($username, $password) {
        $u_avail = $this->db->query("SELECT * FROM user WHERE username='$username' LIMIT 1")->result();

        if (crypt($password, $u_avail[0]->password) === $u_avail[0]->password) :

            $session_db = array(
                'username' => $u_avail[0]->name,
                'user_id' => $u_avail[0]->id,
            );
            $this->session->set_userdata($session_db);
            echo 'success';
        else :
            echo 'fail';

        endif;
    }
    
    function get_all(){
        return $this->db->get('user')->result();
    }
    
    function gender(){
        return $this->db->get('gender')->result();
    }
    
     function service(){
        return $this->db->get('service')->result();
    }
    
     function patients(){
        return $this->db->get('patients')->result();
    }
    
   
    function save($array){
      $query =  $this->db->insert('patients',$array);
       
      
      return $query;
    }
    
    function delete($id){
      $query =  $this->db->where('id',$id)->delete('patient');     
      return $query;
    }
    
    function getPatients(){
        $query = $this->db->query("SELECT p.*,s.name service,g.name gender FROM patients p INNER JOIN service s ON s.id = p.service INNER JOIN gender g ON g.id = p.gender ")->result();
        return $query;
    }

}
