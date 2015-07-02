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
            //$this->load->view('access/login-form');
            redirect('login');
        }
        else
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
        $dataSurvey = array(
            'ID_ODP'             => $this->input->post('id_odp'),
            'TGL_SURVEY'         => $this->input->post('tgl_survey'),
            'VALID_TAG'          => $this->input->post('valid_tag'),
            'LATITUDE'           => $this->input->post('latitude'),
            'LONGITUDE'          => $this->input->post('longitude'),
            'LABEL'              => $this->input->post('label'),
            'ID_ERROR'           => $this->input->post('id_error'),
            'AVAILABILITY'       => $this->input->post('availability'),
            'BANGUNAN'           => $this->input->post('bangunan'),
            'KURANG_DARI_500JT'  => $this->input->post('kurang_dari_500jt'),
            'ANTARA_500JT_SD_1M'        => $this->input->post('500jt_sd_1m'),
            'LEBIH_DARI_1M'      => $this->input->post('lebih_dari_1m'),
            'PERKAMPUNGAN'       => $this->input->post('perkampungan'),
            'RUKO'               => $this->input->post('ruko'),
            'KANTOR_KECIL'       => $this->input->post('kantor_kecil'),
            'KANTOR_BESAR'       => $this->input->post('kantor_besar'),
            'PERGURUAN_TINGGI'   => $this->input->post('perguruan_tinggi'),
            'KETERANGAN'         => $this->input->post('keterangan'),
            );

        $this->load->model('m_survey');
        
        if($this->m_survey->insertDaftar($dataSurvey))
        {
              echo '<script language="javascript">';
              echo 'alert("Data berhasil dimasukkan");';
              echo 'window.location.href = "' . site_url('survey') . '";';
              //echo 'window.history.back();';
              echo '</script>';
        }
        else
        {
              echo '<script language="javascript">';
              echo 'alert("Gagal memasukkan data");';
              //echo 'window.history.back();';
              echo '</script>';
        }
    }

    public function showSurvey()
    {       
        if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('login');
        }else
        {   
            $this->load->model('m_login');
            $this->load->model('m_survey');

            $user = $this->session->userdata('username');
            
            $data['level'] = $this->session->userdata('level');        
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['list'] = $this->m_survey->getSurvey();

            $this->load->view('design/header', $data);
            $this->load->view('survey/lihat_survey', $data);
            $this->load->view('design/footer');
        }
    }


}
