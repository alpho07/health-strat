<?php
require(APPPATH.'/libraries/REST_Controller.php');
 
class Api extends REST_Controller
{
  
    
    function index_get(){
        $users = $this->Model->get_all();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }  
    
    
    function gender_get(){
        $users = $this->Model->gender();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }  
    }
    
    
    function service_get(){
        $users = $this->Model->service();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }  
    }
    
    function patients_get(){
        $users = $this->Model->patients();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }  
    }
    
    
     function user_gender()
    {
        $users = $this->Model->get_gender();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
 
    function index_post()
    {
        $result = $this->Model->save(array(
            'name' => $this->post('name'),
            'date_of_birth' => $this->post('dob'),
            'service' => $this->post('service_type'),
            'gender' => $this->post('gender'),
            'general_observation' => $this->post('go'),
        ));
         
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
         
    }
    
    
       function remarks_post()
    {
        $result = $this->Model->save(array(
            'patient_id' => $this->post('name'),
            'reccomendation 	' => $this->post('dob'),
          
        ));
         
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
         
    }
    
    
    function index_delete($id){
              $result = $this->Model->delete( $this->delete('id'));
         
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }  
    }
     
    function users_get()
    {
        $users = $this->Model->get_all();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
}
?>