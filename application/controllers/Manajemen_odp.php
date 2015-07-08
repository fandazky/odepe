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
        $this->load->library('form_validation');   
        $this->load->helper('form');     
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
            //$this->load->view('access/login-form');
            redirect('login');
        }else
        {
            //$this->load->model('m_login'); 
            $this->load->model('m_manajemenodp');
            $data['pengguna'] = $this->m_login->dataPengguna($user);


            //kluster
            $data['nama_kluster'] = $this->m_manajemenodp->getKluster();

           

            $this->load->view('design/header', $data);
            $this->load->view('manajemen_odp/input_odp', $data);
            $this->load->view('design/footer');
        } 
        
        
    }

    public function inputOdp()
    {

        $this->form_validation->set_rules('NAMA_ODP','NAMA ODP','required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('LT','LATITUDE','required|min_length[5]|max_length[12]|');
        $this->form_validation->set_rules('LG','LONGTITUDE','required|min_length[5]|max_length[12]|');
        $this->form_validation->set_message('required', '%s must be filled');
       
        if($this->form_validation->run() == TRUE)
        {
        $nama_kluster = $this->input->post('ID_KLUSTER');
        $nama_odp = $this->input->post('NAMA_ODP');
        //$this->form_validation->set_rules('NAMA_ODP','NAMA ODP','required|valid_email');
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
        }
        else {

       // $this->load->view('manajemen_odp/input_odp');
        echo '<script>alert("Data tidak sesuai!");</script>';
        //$this->load->model('m_login'); 
            $this->load->model('m_manajemenodp');
             $user = $this->session->userdata('username');
            $data['pengguna'] = $this->m_login->dataPengguna($user);

            //kluster
            $data['nama_kluster'] = $this->m_manajemenodp->getKluster();

            $this->load->view('design/header', $data);
            $this->load->view('manajemen_odp/input_odp', $data);
            $this->load->view('design/footer');
        }
       //var_dump($data);
        //echo "coba".$nama_kluster; 
    }

     public function inputKluster()
    {
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        if($session == FALSE)
        {
            //$this->load->view('access/login-form');
            redirect('login');
        }else
        {
            $this->load->model('m_login'); 
            $this->load->model('m_manajemenodp');
            $data['pengguna'] = $this->m_login->dataPengguna($user);

            $this->load->view('design/header', $data);
            $this->load->view('manajemen_odp/input_kluster', $data);
            $this->load->view('design/footer');
        } 
        
        
    }

    public function inputDataKluster()
    {
        $nama_kluster = $this->input->post('NAMA_KLUSTER');
        $set_operation = $this->input->post('SET_OPERATION');

        $data = array(
                'NAMA_KLUSTER' => $nama_kluster,
                'SET_OPERATION' => $set_operation
        );

        $this->db->insert('kluster',$data);
        redirect('manajemen_odp/inputKluster');
    }


     public function manajemenOdp()
    {       
        if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('login');
        }else
        {   
            $this->load->model('m_login');
            $this->load->model('m_manajemenodp');

            $user = $this->session->userdata('username');
            
            $data['level'] = $this->session->userdata('level');        
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['list'] = $this->m_manajemenodp->getDataOdp();

            $this->load->view('design/header', $data);
            $this->load->view('manajemen_odp/manajemen', $data);
            $this->load->view('design/footer');
        }
    }

    public function delete($id) {
        $this->load->model('m_manajemenodp', 'odp');
        $this->odp->delete($id);
        echo '<script language="javascript">';
        echo 'alert("Akun berhasil dihapus");';
        echo 'window.location.href = "' . site_url('manajemen_odp/manajemenOdp') . '";';
        echo '</script>';
    }

    public function edit($id) 
    {
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        if($session == FALSE)
        {
            //$this->load->view('access/login-form');
            redirect('login');
        }else
        {
            $this->load->model('m_login');
            $this->load->model('m_manajemenodp');   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
             
            $data['result'] = $this->m_manajemenodp->edit($id);

            $this->load->view('design/header', $data);
            $this->load->view('manajemen_odp/edit_odp', $data);
            $this->load->view('design/footer'); 
    
        }
    }


    public function update($id) {
        $data = array(
            'NAMA_ODP' => $this->input->post('NAMA_ODP'),
            'LG' => $this->input->post('LG'),
            'LT' => $this->input->post('LT'));
        $this->load->model('M_manajemenodp');
        //var_dump($id);
        //var_dump($data);
        if($this->M_manajemenodp->update($id, $data))
        {
              echo '<script language="javascript">';
              echo 'alert("ODP berhasil diupdate");';
              echo 'window.location.href = "' . site_url('manajemen_odp/manajemenOdp') . '";';
              echo '</script>';
        }
        else
        {
              echo '<script language="javascript">';
              echo 'alert("Gagal mengupdate ODP. "");';
              echo 'window.history.back();';
              echo '</script>';
        }
    }

}
