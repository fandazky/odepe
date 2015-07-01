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
        $nama_kluster = $this->input->post('NAMA_KLUSTER');
        $nama_odp = md5($this->input->post('NAMA_ODP'));
        $latitude = $this->input->post('LT');
        $longtitude = $this->input->post('LG');

        $data = array(
                'NAMA_KLUSTER' => $nama_kluster,
                'NAMA_ODP' => $nama_odp,
                'LT' => $latitude,
                'LG' => $longtitude
        );

        $this->db->insert('odp',$data);
        redirect('management_odp');
    }




    public function manajemenOdp()
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

            $this->load->view('design/header', $data);
            $this->load->view('manajemen_odp/manajemen_odp', $data);
            $this->load->view('design/footer');
        } 
        
        
    }

   public function showodp() {        
        $this->load->model('m_manajemenodp');
        $data['list'] = $this->m_manajemenodp->getListOdp();
        $this->header();
        $this->load->view('manajemen_user/manajemen_odp', $data);
        $this->load->view('design/footer');
    }

    public function delete($id) {
        $this->load->model('m_manajemenodp');
        $this->m_manajemenodp->delete($id);
        echo '<script language="javascript">';
        echo 'alert("ODP berhasil dihapus");';
        echo 'window.location.href = "' . site_url('manajemen_odp/showodp') . '";';
        echo '</script>';
    }

    public function edit($id) {
        $this->load->model('m_manajemenodp');
        $data['result'] = $this->m_manajemenodp->edit($id);
        $this->header();
        $this->load->view('manajemen_odp/edit_odp', $data);
        $this->load->view('design/footer');
    }

    public function update($id) {
        $NAMA_ODP = $this->input->post('NAMA_ODP');
        $LATITUDE = $this->input->post('LATITUDE');
        $LONGTITUDE = $this->input->post('LONGTITUDE');
        $data = array(
            'NAMA_ODP' => $this->input->post('NAMA_ODP'),
            'LT' => $this->input->post('LATITUDE'),
            'LG' => $this->input->post('LONGTITUDE'));

        $this->load->model('m_manajemenodp');
        if($this->m_manajemenodp->update($id, $NAMA_ODP, $data))
        {
              echo '<script language="javascript">';
              echo 'alert("ODP berhasil diupdate");';
              echo 'window.location.href = "' . site_url('manajemen_odp/showodp') . '";';
              echo '</script>';
        }
        else
        {
              echo '<script language="javascript">';
              echo 'alert("Gagal mengupdate ODP.");';
              echo 'window.history.back();';
              echo '</script>';
        }
    }

}
