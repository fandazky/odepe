<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_login');
        
        $this->load->library(array('form_validation','session'));
        
        $this->load->database();
        
        $this->load->helper('url');
    
    }
  
  
    public function index()
    {
        $session = $this->session->userdata('isLogin');
    
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
        }else
        {
            redirect('access');
        }
    }
  
  
    public function login_form()
    {
        //echo 'masuk fungsi login_form';
        
        /*
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
        $this->form_validation->set_error_delimiters('<br><span class="error">', '</span>');


        
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('access/login-form');
        }else
        {
        */
            //echo 'masuk else';
            //$this->load->view('access/login-form');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('passwd', 'Password', 'required');

        $this->form_validation->set_message('required', '%s wajib diisi');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('access/login-form');
        }
        else
        {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $level = $this->input->post('level');
       
            $cek = $this->m_login->ambilPengguna($username, $password, 1, $level);
        
            if($cek <> 0)
            {
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('level',$level);
                if($level == 1)
                {
                    $this->session->set_userdata('area','0');
                }else
                {
                    $area_op = $this->m_login->getUserArea($username);
                    $this->session->set_userdata('area', $area_op->id_user);
                }

                redirect('access');
            }else
            {
                echo " <script>
                    alert('Gagal Login: Cek username , password dan level anda!');
                    history.go(-1);
                  </script>";        
            }
        }
        
    }

    public function update_profile()
    {
        $this->load->model('m_manajemenuser');
        $user = $this->session->userdata('username');
        $row = $this->m_login->getUSerData($user);

        $data['pengguna'] = $this->m_login->dataPengguna($user);
        if ($row) {
            $data['username'] = $row->username;
            $data['namadepan'] = $row->first_name;
            $data['namabelakang'] = $row->last_name;
            $data['alamat'] = $row->address;

            $this->load->view('design/header', $data);
            $this->load->view('access/update-profile', $data);
            $this->load->view('design/footer', $data);

        }
    } 

    public function simpan_update()
    {
        $username = $this->input->post('username');
        $data = array(
            'first_name' => $this->input->post('namadepan'),
            'last_name' => $this->input->post('namabelakang'),
            'address' => $this->input->post('alamat')
        );

        $this->m_login->updateProfile($username, $data);
        redirect('access');
    }
  
    public function logout()
    {
        $this->session->sess_destroy();
   
        redirect('login');
    }

}

?>