<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
    public function __construct()
    {
        /*
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        */
        parent::__construct();        
        $this->load->library(array('session'));         
        $this->load->helper('url');         
        $this->load->model('m_login');        
        $this->load->database();    
    }  
    
    public function index()
    {
        //kluster
        $this->load->model('m_survey');
        $data['nama_kluster'] = $this->m_survey->getKluster();

        //odp
        $this->load->model('m_survey');
        $data['nama_odp'] = $this->m_survey->getODP();

        //error
        $this->load->model('m_survey');
        $data['nama_error'] = $this->m_survey->getError();

        $this->load->view('design/header');
        $this->load->view('survey/input_survey', $data);
        $this->load->view('design/footer');
    }

    public function inputSurvey()
    {
        
    }



}
