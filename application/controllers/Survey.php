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
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
        }else
        {
            $this->load->model('m_login'); 
            $this->load->model('m_survey');
            $data['pengguna'] = $this->m_login->dataPengguna($user);

            //kluster
            $data['nama_kluster'] = $this->m_survey->getKluster();

            //odp
            $data['nama_odp'] = $this->m_survey->getODP();

            //error
            $data['nama_error'] = $this->m_survey->getError();

            $this->load->view('design/header', $data);
            $this->load->view('survey/input_survey', $data);
            $this->load->view('design/footer');
        } 
        
        
    }

    public function inputSurvey()
    {
        
    }



}
