<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_user extends CI_Controller {
    public function __construct()
    {

        parent::__construct();        
        $this->load->library(array('session'));         
        $this->load->helper('url');         
        $this->load->model('m_login');        
        $this->load->database();    
    }  
    
    public function index()
    {
        if($this->session->userdata('isLogin') == FALSE)
        {
            //redirect('login/login_form');
            redirect('login');
        }else
        {
            // $this->load->model('m_login');
            $this->load->model('m_manajemenuser');
          
            $user = $this->session->userdata('username');
            
            $data['level'] = $this->session->userdata('level');        
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['active_user'] = $this->m_manajemenuser->getAllActiveUser();
            if ($data['level'] == 1)
            {
                //echo 'masuk admin';
                //$this->load->view('dashboard/admin', $data);
                $this->load->view('design/header', $data);
                $this->load->view('manajemen_user/lihat_user', $data);
                $this->load->view('design/footer');
                
            }
            else
            {
                echo 'Anda tidak memiliki akses pada ini' ;
            }
        }
    }

    public function lihat_request()
    {
        if($this->session->userdata('isLogin') == FALSE)
        {
            //redirect('login/login_form');
            redirect('login');
        }else
        {   
            // $this->load->model('m_login');
            $this->load->model('m_manajemenuser');

            $user = $this->session->userdata('username');
            
            $data['level'] = $this->session->userdata('level');        
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['registration_request'] = $this->m_manajemenuser->getAllRegistrationRequest();
            if ($data['level'] == 1)
            {
                $this->load->view('design/header', $data);
                $this->load->view('manajemen_user/lihat_request', $data);
                $this->load->view('design/footer');                
            }
            else
            {
                echo 'Anda tidak memiliki akses pada ini' ;
            }
        }       
    }
}
