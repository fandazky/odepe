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
            redirect('login');
        }else
        {
            $this->load->model('M_login');
            $data['pengguna'] = $this->M_login->dataPengguna($user);
            
            $this->load->model('M_manajemenuser');
            $data['level'] = $this->session->userdata('level');
            
            $this->load->model('M_dashboard');
            $data['odp'] = $this->M_dashboard->getStatsODP();
            $data['kluster'] = $this->M_dashboard->getStatsKluster();
            $data['site_operation'] = $this->M_dashboard->getStatsSO();
            $data['daftar'] = $this->M_dashboard->getStatsSurvey();
            $data['noerror'] = $this->M_dashboard->getNoError();
            $data['errorlokasi'] = $this->M_dashboard->getErrorLokasi();
            $data['errorstarclick'] = $this->M_dashboard->getErrorStarclick();
            $data['wronglabel'] = $this->M_dashboard->getWrongLabel();
            $data['salahposisi'] = $this->M_dashboard->getSalahPosisi();
            $data['beririsan'] = $this->M_dashboard->getBeririsan();
            $data['keseluruhan'] = $this->M_dashboard->getKeseluruhan();

            $this->load->view('design/header', $data);
            $this->load->view('dashboard/home', $data);
            $this->load->view('design/footer');
        } 
    }    
}
