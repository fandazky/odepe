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
            
            $this->load->view('design/header',$data);
            $this->load->view('report/report_cluster');
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
            $data['nostarclck3'] = $this->m_report->ambilError(3);
            $data['wronglabel4'] = $this->m_report->ambilError(4);
            $data['irisan5'] = $this->m_report->ambilError(5);
            $data['wrongpos6'] = $this->m_report->ambilError(6);

            /*foreach ($data['errorid'] <7)
            {
                if($data['errorid'] == 1)
                {
                    $data['noerror1'] =+ 1;
                }
                elseif ($data['errorid'] == 2) 
                {
                    $data['nolocation2'] =+ 1; 
                }
                elseif ($data['errorid'] == 3) 
                {
                    $data['nostarclck3'] =+ 1;
                }
                elseif ($data['errorid'] == 4) 
                {
                    $data['wronglabel4'] =+ 1;
                }
                elseif ($data['errorid'] == 5) 
                {
                    $data['irisan5'] =+ 1;
                }
                elseif($data['errorid'] == 6)
                {
                    $data['wrongpos6'] =+ 1;
                }
                else
                {
                    return false;
                }

            }*/
            
            $this->load->view('design/header',$data);
            $this->load->view('report/report_witel',$data);
            $this->load->view('design/footer');
        }
    }
}
