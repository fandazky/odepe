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
        $this->load->model('m_survey');        
        $this->load->database();    
    }  
    
    public function index()
    {
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        if($session == FALSE)
        {
            redirect('login');
        }
        else
        {
            $this->load->model('m_manajemenuser');
            $data['level'] = $this->session->userdata('level');
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['nama_kluster'] = $this->m_survey->getKluster();

            $this->load->view('design/header', $data);
            $this->load->view('survey/input_survey', $data);
            $this->load->view('design/footer');
        }
    }

    

    public function insertSurvey()
    {

        $count = count($this->input->post('id_odp[]'));

        for ($i=0; $i < $count; $i++) { 
            $dataSurvey = array(
            'TGL_SURVEY'         => $this->input->post('tgl_survey'),
            'ID_ODP'             => $this->input->post('id_odp[]')[$i],
            'VALID_TAG'          => $this->input->post('valid_tag[]')[$i],
            'LATITUDE'           => $this->input->post('latitude[]')[$i],
            'LONGITUDE'          => $this->input->post('longitude[]')[$i],
            'LABEL'              => $this->input->post('label[]')[$i],
            'ID_ERROR'           => $this->input->post('id_error[]')[$i],
            'AVAILABILITY'       => $this->input->post('availability[]')[$i],
            'BANGUNAN'           => $this->input->post('bangunan[]')[$i],
            'KURANG_DARI_500JT'  => $this->input->post('kurang_dari_500jt[]')[$i],
            'ANTARA_500JT_SD_1M' => $this->input->post('antara_500jt_sd_1m[]')[$i],
            'LEBIH_DARI_1M'      => $this->input->post('lebih_dari_1m[]')[$i],
            'PERKAMPUNGAN'       => $this->input->post('perkampungan[]')[$i],
            'RUKO'               => $this->input->post('ruko[]')[$i],
            'KANTOR_KECIL'       => $this->input->post('kantor_kecil[]')[$i],
            'KANTOR_BESAR'       => $this->input->post('kantor_besar[]')[$i],
            'PERGURUAN_TINGGI'   => $this->input->post('perguruan_tinggi[]')[$i],
            'ID_KOMPETITOR'      => $this->input->post('id_kompetitor[]')[$i],
            'KETERANGAN'         => $this->input->post('keterangan[]')[$i],
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
        
    }

    public function showData()
    {
           
          $id_kluster = $this->input->post('id',TRUE);
           
          $data['odp']=$this->m_survey->getODP($id_kluster);  
          
          $data['error']=$this->m_survey->getError();

          $data['kompetitor']=$this->m_survey->getKompetitor();  
            
          echo json_encode($data);
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

    public function formEdit()
    {
        if($this->session->userdata('isLogin') == FALSE)
        {
            redirect('login');
        }
        else
        {   
            $this->load->model('m_login');
            $this->load->model('m_survey');

            $user = $this->session->userdata('username');
            
            $row = $this->m_survey->getData();
            
            $data['level'] = $this->session->userdata('level');        
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['error'] = $this->m_survey->getError();
            $data['kompetitor']=$this->m_survey->getKompetitor(); 
        

            if ($row)
            {
                $data['tanggal']        = $row->TGL_SURVEY;
                $data['kluster']        = $row->NAMA_KLUSTER;
                $data['odp']            = $row->NAMA_ODP;
                $data['valid']          = $row->VALID_TAG;
                $data['latitude']       = $row->LATITUDE;
                $data['longitude']      = $row->LONGITUDE;
                $data['label']          = $row->LABEL;
                $data['availability']   = $row->AVAILABILITY;
                $data['bangunan']       = $row->BANGUNAN;
                $data['kurang']         = $row->KURANG_DARI_500JT;
                $data['antara']         = $row->ANTARA_500JT_SD_1M;
                $data['lebih']          = $row->LEBIH_DARI_1M;
                $data['kampung']        = $row->PERKAMPUNGAN;
                $data['ruko']           = $row->RUKO;
                $data['kecil']          = $row->KANTOR_KECIL;
                $data['besar']          = $row->KANTOR_BESAR;
                $data['pt']             = $row->PERGURUAN_TINGGI;
                $data['keterangan']     = $row->KETERANGAN;

                $this->load->view('design/header', $data);
                $this->load->view('survey/edit_survey', $data);
                $this->load->view('design/footer');

            }

        }
    }

    public function editSurvey()
    {
        $id_daftar = $this->input->post('id_daftar');
        $dataSurvey = array(
            'TGL_SURVEY'         => $this->input->post('tgl_survey'),
            'ID_ODP'             => $this->input->post('id_odp'),
            'VALID_TAG'          => $this->input->post('valid_tag'),
            'LATITUDE'           => $this->input->post('latitude'),
            'LONGITUDE'          => $this->input->post('longitude'),
            'LABEL'              => $this->input->post('label'),
            'ID_ERROR'           => $this->input->post('id_error'),
            'AVAILABILITY'       => $this->input->post('availability'),
            'BANGUNAN'           => $this->input->post('bangunan'),
            'KURANG_DARI_500JT'  => $this->input->post('kurang_dari_500jt'),
            'ANTARA_500JT_SD_1M' => $this->input->post('antara_500jt_sd_1m'),
            'LEBIH_DARI_1M'      => $this->input->post('lebih_dari_1m'),
            'PERKAMPUNGAN'       => $this->input->post('perkampungan'),
            'RUKO'               => $this->input->post('ruko'),
            'KANTOR_KECIL'       => $this->input->post('kantor_kecil'),
            'KANTOR_BESAR'       => $this->input->post('kantor_besar'),
            'PERGURUAN_TINGGI'   => $this->input->post('perguruan_tinggi'),
            'ID_KOMPETITOR'      => $this->input->post('id_kompetitor'),
            'KETERANGAN'         => $this->input->post('keterangan'),
        );

        if($this->m_survey->updateDaftar($id_daftar, $dataSurvey))
            {
                  echo '<script language="javascript">';
                  echo 'alert("Data berhasil dimasukkan");';
                  echo 'window.location.href = "' . site_url('survey/showSurvey') . '";';
                  //echo 'window.history.back();';
                  echo '</script>';
            }
            else
            {
                  echo '<script language="javascript">';
                  echo 'alert("Gagal memasukkan data");';
                  echo 'window.history.back();';
                  echo '</script>';
            }
    }


}
