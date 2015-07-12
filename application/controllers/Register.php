<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_login');
        $this->load->model('m_manajemenuser');
        
        $this->load->library(array('form_validation','session'));
        
        $this->load->database();
        
        $this->load->helper('url');
    
    }
  
  
    public function index()
    {
        $session = $this->session->userdata('isLogin');
    
        if($session == FALSE)
        {
            $data['areakerja'] = $this->m_login->getArea();
            $this->load->view('access/register-form', $data);
        }else
        {
            redirect('access');
        }
    }
  
  
    public function register_form()
    {
        //$this->form_validation->set_rules('username', 'Username', 'callback_username_exists');


        $username = $this->input->post('username');
        $nik = $this->input->post('nik');
        $password = md5($this->input->post('passwd'));
        $firstname = $this->input->post('namadepan');
        $lastname = $this->input->post('namabelakang');
        $address = $this->input->post('alamat');
        $level = $this->input->post('level');
        $area = $this->input->post('area');
        //$this->load->model('m_manajemenuser');
        //echo $this->m_manajemenuser->username_exists($username);
        
        /*
        if($this->form_validation->run()==FALSE)
        {
            echo 'belum ada';
        }
        else
        {
            echo 'sudah ada';
        }
        */
        
        
        $data = array(
                'username' => $username,
                'NIK' => $nik,
                'password' => $password,
                'first_name' => $firstname,
                'last_name' => $lastname,
                'address' => $address,
                'level' => $level,
                'status' => '1',
                'id_area' => $area
        );

        $this->db->insert('registration_request',$data);
        redirect('login');
    }

    public function accept_request($username)
    {
        //$this->load->model('m_login');
        //$this->load->model('m_manajemenuser');
        $user_request = $this->m_manajemenuser->getOneRegistrationRequest($username);
        
        $data = array(
                'username' => $user_request->username,
                'NIK' => $user_request->NIK,
                'password' => $user_request->password,
                'first_name' => $user_request->first_name,
                'last_name' => $user_request->last_name,
                'address' => $user_request->address,
                'level' => '2',
                'status' => '1',
                'id_area' => $user_request->id_area
            ); 

        $this->db->insert('user', $data);
        $this->m_manajemenuser->deleteRegistrationRequest($username);
        redirect('manajemen_user/lihat_request');

        
    }

    public function decline_request($username)
    {
        //$this->load->model('m_manajemenuser');
        $this->m_manajemenuser->deleteRegistrationRequest($username);
        redirect('manajemen_user/lihat_request');
    }  


    //validation username
    function username_exists($id)
    {
        //$this->load->model('m_manajemenuser');
        $this->m_manajemenuser->username_exists($id);
    }   

}

?>