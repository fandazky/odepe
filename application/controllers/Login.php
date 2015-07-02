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
            //redirect('login');
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
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $level = $this->input->post('level');
       
            $cek = $this->m_login->ambilPengguna($username, $password, 1, $level);
        
            if($cek <> 0)
            {
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('level',$level);
         
                redirect('access');
            }else
            {
                echo " <script>
		            alert('Gagal Login: Cek username , password dan level anda!');
		            history.go(-1);
		          </script>";        
            }
            
        //} 
        
    }
  
  
    public function logout()
    {
        $this->session->sess_destroy();
   
        redirect('login');
    }

}

?>