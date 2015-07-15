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
        
        $this->load->helper(array('url','form'));
    
    }
  
  
    public function index()
    {
        $session = $this->session->userdata('isLogin');
    
        if($session == FALSE)
        {
            $data['areakerja'] = $this->m_login->getAllArea();
            $data['success'] = '<div></div>';
            // $this->load->view('access/register-form', $data);
            $this->load->view('access/register-form', $data);
        }else
        {
            redirect('access');
        }
    }
  
  
    public function register_form()
    {
        $this->load->helper('security');

        $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric|is_unique[users.username]');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('passwd', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('namadepan', 'Nama Depan', 'required');
        $this->form_validation->set_rules('level', 'Hak Akses', 'required');
        //$this->form_validation->set_rules('level', 'Level', 'required');
        //$this->form_validation->set_rules('area', 'Area', 'required');

        $this->form_validation->set_message('required', '%s wajib diisi');
        $this->form_validation->set_message('alpha_numeric', '%s hanya boleh menggunakan karakter alpha numeric');
        $this->form_validation->set_message('is_unique', '%s sudah terdaftar');
        $this->form_validation->set_message('min_length', '%s minimal 8 digit');
        $this->form_validation->set_message('numeric', '%s harus terdiri dari angka');

        $username = $this->input->post('username');
        $nik = $this->input->post('nik');
        $password = md5($this->input->post('passwd'));
        $firstname = $this->input->post('namadepan');
        $lastname = $this->input->post('namabelakang');
        $address = $this->input->post('address');
        $level = $this->input->post('level');
        $area = $this->input->post('area');
        
        if($this->form_validation->run()==FALSE)
        {
            $data['areakerja'] = $this->m_login->getAllArea();
            $data['success'] = '<div></div>';
            $this->load->view('access/register-form', $data);
        }
        else
        {

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
            // redirect('login');
            $pesan['success']= '<div class="alert alert-success" role="alert">Data berhasil diregistrasi, tunggu konfirmasi admin</div>';
            $this->load->view('access/register-form', $pesan);
        }    
        
    }

    public function accept_request($username)
    {
        $user_request = $this->m_manajemenuser->getOneRegistrationRequest($username);
        
        $data = array(
                'username' => $user_request->username,
                'nik' => $user_request->nik,
                'password' => $user_request->password,
                'first_name' => $user_request->first_name,
                'last_name' => $user_request->last_name,
                'address' => $user_request->address,
                'level' => '2',
                'status' => '1',
                'id_area' => $user_request->id_area
            ); 

        $this->db->insert('users', $data);
        $this->m_manajemenuser->deleteRegistrationRequest($username);
        redirect('manajemen_user/lihat_request');
        // echo $user_request->nik;

    }

    public function decline_request($username)
    {
        $this->m_manajemenuser->deleteRegistrationRequest($username);
        redirect('manajemen_user/lihat_request');
    }  

}

?>