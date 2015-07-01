<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_odp extends CI_Controller {
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
            $this->load->model('m_manajemenodp');
            $data['pengguna'] = $this->m_login->dataPengguna($user);

            //kluster
            $data['nama_kluster'] = $this->m_manajemenodp->getKluster();


            $this->load->view('design/header', $data);
            $this->load->view('media/tambah', $data);
            $this->load->view('design/footer');
        } 
        
        
    }

    public function inputOdp()
    {
        $nama_kluster = $this->input->post('ID_KLUSTER');
        $nama_odp = $this->input->post('NAMA_ODP');
        $latitude = $this->input->post('LATITUDE');
        $longtitude = $this->input->post('LONGTITUDE');

        $data = array(
                'ID_KLUSTER' => $nama_kluster,
                'NAMA_ODP' => $nama_odp,
                'LT' => $latitude,
                'LG' => $longtitude
        );
        $this->db->insert('odp',$data);
        redirect('manajemen_odp');

       // echo "COBA".$nama_kluster ;
    }

}
