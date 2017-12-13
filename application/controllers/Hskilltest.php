<?php

require(APPPATH.'/libraries/REST_Controller.php');

class Hskilltest extends MY_Controller {

    function index() {
        $data['title'] = 'Home';
        $data['section'] = 'Dashboard';
        $data['page']='pages/home';
        $data['subtitle']='Dashboard';
        $this->makeView($data);
    }
    
       function addPatient() {
        $data['title'] = 'Add Patient';
        $data['section'] = 'Add Patient';
        $data['page']='pages/add_patient';
        $data['subtitle']='New Patient';
        $data['patients']= $this->model->getPatients();
        $this->makeView($data);
    }
    
     function addPatientRecommendation() {
        $data['title'] = 'Add Recomendation';
        $data['section'] = 'Observed';
        $data['page']='pages/add_patient_1';
        $data['subtitle']='Reccomendation';
        $data['patients']= $this->model->getPatients();
        $this->makeView($data);
    }
    
  

}
