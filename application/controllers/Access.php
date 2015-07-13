<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
    public function __construct()
    {

        parent::__construct();        
        $this->load->library(array('session'));         
        $this->load->helper('url');         
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
            $this->load->model('M_login');
            $this->load->model('M_dashboard');
            $this->load->model('M_manajemenuser');
            $data['pengguna'] = $this->M_login->dataPengguna($user);
            $data['odp'] = $this->M_dashboard->getStatsODP();
            $data['kluster'] = $this->M_dashboard->getStatsKluster();
            $data['site_operation'] = $this->M_dashboard->getStatsSO();
            $data['daftar'] = $this->M_dashboard->getStatsSurvey();
            $data['level'] = $this->session->userdata('level');
            

            $this->load->view('design/header', $data);
            $this->load->view('dashboard/home', $data);
            $this->load->view('design/footer');
        } 
    }

    
}
