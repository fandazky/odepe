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

    
    //controller untuk mengambil data error tiap kluster
    public function show_cluster()
    {
        $idkluster = $this->input->post('id_kluster');
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        if($session == FALSE)
        {
            redirect('login');
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
            $data['nama_kluster'] = $this->m_report->getNamaCluster($idkluster);
            $data['jumlah_error'] = $data['nolocation2'] + $data['nostarclick3'] + $data['wronglabel4'] + $data['irisan5'] + $data['wrongpos6'];
            $data['jumlah_odp'] = $this->m_report->totalODPKluster($idkluster);
            $data['jumlah_tersurvey'] = $this->m_report->sudahSurveyKluster($idkluster);
            $data['belum_survey'] = $data['jumlah_odp'] - $data['jumlah_tersurvey'];

            $data['persen_survey'] = $this->persen($data['jumlah_tersurvey'],$data['jumlah_odp']);
            $data['persen_error'] = $this->persen($data['jumlah_error'],$data['jumlah_odp']);
            $data['persen_belum'] = $this->persen($data['belum_survey'],$data['jumlah_odp']);

            $data['persen_1'] = $this->persen($data['noerror1'],$data['jumlah_odp']);
            $data['persen_2'] = $this->persen($data['nolocation2'],$data['jumlah_odp']);
            $data['persen_3'] = $this->persen($data['nostarclick3'],$data['jumlah_odp']);
            $data['persen_4'] = $this->persen($data['wronglabel4'],$data['jumlah_odp']);
            $data['persen_5'] = $this->persen($data['irisan5'],$data['jumlah_odp']);
            $data['persen_6'] = $this->persen($data['wrongpos6'],$data['jumlah_odp']);

            $data['persen1'] = $this->persen($data['noerror1'],$data['jumlah_tersurvey']);
            $data['persen2'] = $this->persen($data['nolocation2'],$data['jumlah_tersurvey']);
            $data['persen3'] = $this->persen($data['nostarclick3'],$data['jumlah_tersurvey']);
            $data['persen4'] = $this->persen($data['wronglabel4'],$data['jumlah_tersurvey']);
            $data['persen5'] = $this->persen($data['irisan5'],$data['jumlah_tersurvey']);
            $data['persen6'] = $this->persen($data['wrongpos6'],$data['jumlah_tersurvey']);

            $this->load->view('design/header',$data);
            $this->load->view('report/hasil_cluster',$data);
            $this->load->view('design/footer');
        }

    }

    public function show_setoperation()
    {
        $idsiteoperation = $this->input->post('id_so');
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        
        if($session == FALSE)
        {
            redirect('login');
        }
        else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            //$data['errorid'] = $this->m_report->getReport();
            $data['noerror1'] = $this->m_report->ambilErrorSetOperation($idsiteoperation,1);
            $data['nolocation2']= $this->m_report->ambilErrorSetOperation($idsiteoperation,2);
            $data['nostarclick3'] = $this->m_report->ambilErrorSetOperation($idsiteoperation,3);
            $data['wronglabel4'] = $this->m_report->ambilErrorSetOperation($idsiteoperation,4);
            $data['irisan5'] = $this->m_report->ambilErrorSetOperation($idsiteoperation,5);
            $data['wrongpos6'] = $this->m_report->ambilErrorSetOperation($idsiteoperation,6);
            $data['namaso'] = $this->m_report->getNamaSiteOperation($idsiteoperation);
            $data['jumlah_error'] = $data['nolocation2'] + $data['nostarclick3'] + $data['wronglabel4'] + $data['irisan5'] + $data['wrongpos6'];
            $data['jumlah_odp'] = $this->m_report->totalODPSO($idsiteoperation);
            $data['jumlah_tersurvey'] = $this->m_report->sudahSurveySO($idsiteoperation);
            $data['belum_survey'] = $data['jumlah_odp'] - $data['jumlah_tersurvey'];

            $data['persen_survey'] = $this->persen($data['jumlah_tersurvey'],$data['jumlah_odp']);
            $data['persen_error'] = $this->persen($data['jumlah_error'],$data['jumlah_odp']);
            $data['persen_belum'] = $this->persen($data['belum_survey'],$data['jumlah_odp']);

            $data['persen_1'] = $this->persen($data['noerror1'],$data['jumlah_odp']);
            $data['persen_2'] = $this->persen($data['nolocation2'],$data['jumlah_odp']);
            $data['persen_3'] = $this->persen($data['nostarclick3'],$data['jumlah_odp']);
            $data['persen_4'] = $this->persen($data['wronglabel4'],$data['jumlah_odp']);
            $data['persen_5'] = $this->persen($data['irisan5'],$data['jumlah_odp']);
            $data['persen_6'] = $this->persen($data['wrongpos6'],$data['jumlah_odp']);

            $data['persen1'] = $this->persen($data['noerror1'],$data['jumlah_tersurvey']);
            $data['persen2'] = $this->persen($data['nolocation2'],$data['jumlah_tersurvey']);
            $data['persen3'] = $this->persen($data['nostarclick3'],$data['jumlah_tersurvey']);
            $data['persen4'] = $this->persen($data['wronglabel4'],$data['jumlah_tersurvey']);
            $data['persen5'] = $this->persen($data['irisan5'],$data['jumlah_tersurvey']);
            $data['persen6'] = $this->persen($data['wrongpos6'],$data['jumlah_tersurvey']);
                    
            $this->load->view('design/header',$data);
            $this->load->view('report/hasil_wilayah',$data);
            $this->load->view('design/footer');
        }

    }


    public function show_area()
    {
        $areaidnya = $this->input->post('idnyaarea');
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        
        if($session == FALSE)
        {
            redirect('login');
        }
        else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            //$data['errorid'] = $this->m_report->getReport();
            $data['noerror1'] = $this->m_report->ambilErrorArea($areaidnya,1);
            $data['nolocation2']= $this->m_report->ambilErrorArea($areaidnya,2);
            $data['nostarclick3'] = $this->m_report->ambilErrorArea($areaidnya,3);
            $data['wronglabel4'] = $this->m_report->ambilErrorArea($areaidnya,4);
            $data['irisan5'] = $this->m_report->ambilErrorArea($areaidnya,5);
            $data['wrongpos6'] = $this->m_report->ambilErrorArea($areaidnya,6);
            
            $data['namaarea'] = $this->m_report->getNamaArea($areaidnya);
            
            $data['jumlah_error'] = $data['nolocation2'] + $data['nostarclick3'] + $data['wronglabel4'] + $data['irisan5'] + $data['wrongpos6'];
            $data['jumlah_odp'] = $this->m_report->totalODPArea($areaidnya);
            $data['jumlah_tersurvey'] = $this->m_report->sudahSurveyArea($areaidnya);
            $data['belum_survey'] = $data['jumlah_odp'] - $data['jumlah_tersurvey'];
            
            $data['persen_survey'] = $this->persen($data['jumlah_tersurvey'],$data['jumlah_odp']);
            $data['persen_error'] = $this->persen($data['jumlah_error'],$data['jumlah_odp']);
            $data['persen_belum'] = $this->persen($data['belum_survey'],$data['jumlah_odp']);
            
            $data['persen_1'] = $this->persen($data['noerror1'],$data['jumlah_odp']);
            $data['persen_2'] = $this->persen($data['nolocation2'],$data['jumlah_odp']);
            $data['persen_3'] = $this->persen($data['nostarclick3'],$data['jumlah_odp']);
            $data['persen_4'] = $this->persen($data['wronglabel4'],$data['jumlah_odp']);
            $data['persen_5'] = $this->persen($data['irisan5'],$data['jumlah_odp']);
            $data['persen_6'] = $this->persen($data['wrongpos6'],$data['jumlah_odp']);

            $data['persen1'] = $this->persen($data['noerror1'],$data['jumlah_tersurvey']);
            $data['persen2'] = $this->persen($data['nolocation2'],$data['jumlah_tersurvey']);
            $data['persen3'] = $this->persen($data['nostarclick3'],$data['jumlah_tersurvey']);
            $data['persen4'] = $this->persen($data['wronglabel4'],$data['jumlah_tersurvey']);
            $data['persen5'] = $this->persen($data['irisan5'],$data['jumlah_tersurvey']);
            $data['persen6'] = $this->persen($data['wrongpos6'],$data['jumlah_tersurvey']);

            $this->load->view('design/header',$data);
            $this->load->view('report/hasil_area',$data);
            $this->load->view('design/footer');
        }

    }

    public function persen($a,$b)
    {
        if($b>0)
        {
            $c = $a/$b*100;
            $d = number_format($c,2);    
        }
        else
        {
            $d=0;
        }
        return $d;
    }

    //ini kaya show_cluster, controller untuk mengambil data error seluruh witel
    public function report_witel() {
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        
        if($session == FALSE)
        {
            redirect('login');
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
            $data['jumlah_error'] = $data['nolocation2'] + $data['nostarclick3'] + $data['wronglabel4'] + $data['irisan5'] + $data['wrongpos6'];
            $data['jumlah_odp'] = $this->m_report->totalODPWitel();
            $data['jumlah_tersurvey'] = $this->m_report->sudahSurveyWitel();
            $data['belum_survey'] = $data['jumlah_odp'] - $data['jumlah_tersurvey'];

            $data['persen_survey'] = $this->persen($data['jumlah_tersurvey'],$data['jumlah_odp']);
            $data['persen_error'] = $this->persen($data['jumlah_error'],$data['jumlah_odp']);
            $data['persen_belum'] = $this->persen($data['belum_survey'],$data['jumlah_odp']);

            $data['persen_1'] = $this->persen($data['noerror1'],$data['jumlah_odp']);
            $data['persen_2'] = $this->persen($data['nolocation2'],$data['jumlah_odp']);
            $data['persen_3'] = $this->persen($data['nostarclick3'],$data['jumlah_odp']);
            $data['persen_4'] = $this->persen($data['wronglabel4'],$data['jumlah_odp']);
            $data['persen_5'] = $this->persen($data['irisan5'],$data['jumlah_odp']);
            $data['persen_6'] = $this->persen($data['wrongpos6'],$data['jumlah_odp']);

            $data['persen1'] = $this->persen($data['noerror1'],$data['jumlah_tersurvey']);
            $data['persen2'] = $this->persen($data['nolocation2'],$data['jumlah_tersurvey']);
            $data['persen3'] = $this->persen($data['nostarclick3'],$data['jumlah_tersurvey']);
            $data['persen4'] = $this->persen($data['wronglabel4'],$data['jumlah_tersurvey']);
            $data['persen5'] = $this->persen($data['irisan5'],$data['jumlah_tersurvey']);
            $data['persen6'] = $this->persen($data['wrongpos6'],$data['jumlah_tersurvey']);
                    
            $this->load->view('design/header',$data);
            $this->load->view('report/report_witel',$data);
            $this->load->view('design/footer');
        }
    }

    //ini buat data yang ada pada dropdown
    public function report_cluster() {        
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        
        if($session == FALSE)
        {
            redirect('login');
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

    //ini buat data yang ada pada dropdown set operation
    public function report_wilayah() {        
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        
        if($session == FALSE)
        {
            redirect('login');
        }else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['nama_setoperation'] = $this->m_report->getSetOperation();
            
            $this->load->view('design/header',$data);
            $this->load->view('report/report_wilayah',$data);
            $this->load->view('design/footer');
        }
    }

    //ini buat data yang ada pada dropdown area
    public function report_area() {        
        $session = $this->session->userdata('isLogin');
        $user = $this->session->userdata('username');
        $data['level']=$this->session->userdata('level');
        
        if($session == FALSE)
        {
            redirect('login');
        }else
        {   
            $data['pengguna'] = $this->m_login->dataPengguna($user);
            $data['areaname'] = $this->m_report->getArea();
            
            $this->load->view('design/header',$data);
            $this->load->view('report/report_area',$data);
            $this->load->view('design/footer');
        }
    }

    
}
