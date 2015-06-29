<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
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
        $this->load->view('design/header');
        $this->load->view('dashboard/home');
        $this->load->view('design/footer');
    }

    /*
    public function index()
    {
        if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('login/login_form');
        }else
        {   
            //echo 'masuk isLogin';
            $this->load->model('m_login');
          
            $user = $this->session->userdata('username');
            
            $data['level'] = $this->session->userdata('level');        
            $data['namapengguna'] = $this->m_login->dataPengguna($user);
            $data['registration_request'] = $this->m_login->getAllRegistrationRequest();
            if ($data['level'] == 1)
            {
                //echo 'masuk admin';
                //$this->load->view('dashboard/admin', $data);
                $this->load->view('design/header');
                $this->load->view('manajemen_user/lihat_request', $data);
                $this->load->view('design/footer');
                
            }
            else
            {
                $this->load->view('user', $data);
                //echo 'masuk user';
            }
        }       
    } 
    */
    
    /*
    public function validate() {
        $this->form_validation->set_rules('usermail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('userpass', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('access/login');
        }else{
            redirect('dashboard');
        }
    }
    */
}
