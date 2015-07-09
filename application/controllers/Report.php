<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Report extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));         
        $this->load->helper('url');         
        $this->load->model('m_login');
        $this->load->model('m_report');        
        $this->load->database();
    }    
    
    public function report_cluster() {        
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
        }else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['nama_kluster'] = $this->m_report->getKluster();
            $data['nama_odp'] = $this->m_report->getODP();
            
            $this->load->view('design/header',$data);
            $this->load->view('report/report_cluster',$data);
            $this->load->view('design/footer');
        }
    }

    public function show_cluster()
    {
        $idkluster = $this->input->post('id_kluster');
         $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
        }
        else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            //$data['errorid'] = $this->m_report->getReport();
            $data['noerror1'] = $this->m_report->ambilErrorCluster($idkluster,1);
            $data['nolocation2']= $this->m_report->ambilErrorCluster($idkluster,2);
            $data['nostarclick3'] = $this->m_report->ambilErrorCluster($idkluster,3);
            $data['wronglabel4'] = $this->m_report->ambilErrorCluster($idkluster,4);
            $data['irisan5'] = $this->m_report->ambilErrorCluster($idkluster,5);
            $data['wrongpos6'] = $this->m_report->ambilErrorCluster($idkluster,6);

                    
            $this->load->view('design/header',$data);
            $this->load->view('report/hasil_cluster',$data);
            $this->load->view('design/footer');
        }

    }

    public function report_wilayah() {        
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
        }else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            
            $this->load->view('design/header',$data);
            $this->load->view('report/report_wilayah');
            $this->load->view('design/footer');
        }
    }

    public function report_witel() {
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
        }
        else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            //$data['errorid'] = $this->m_report->getReport();
            $data['noerror1'] = $this->m_report->ambilError(1);
            $data['nolocation2']= $this->m_report->ambilError(2);
            $data['nostarclick3'] = $this->m_report->ambilError(3);
            $data['wronglabel4'] = $this->m_report->ambilError(4);
            $data['irisan5'] = $this->m_report->ambilError(5);
            $data['wrongpos6'] = $this->m_report->ambilError(6);

                    
            $this->load->view('design/header',$data);
            $this->load->view('report/report_witel',$data);
            $this->load->view('design/footer');
        }
    }
}
