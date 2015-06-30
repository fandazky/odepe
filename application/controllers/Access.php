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
            $this->load->model('m_login'); 
            $data['pengguna'] = $this->m_login->dataPengguna($user);

            $this->load->view('design/header', $data);
            $this->load->view('dashboard/home', $data);
            $this->load->view('design/footer');
        } 
    }

    
}
