<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class Dashboard extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }    
    
    public function index() {  
        $session = $this->session->userdata('isLogin');
    
        if($session == FALSE)
        {
            $this->load->view('access/login-form');
            //redirect('login/login_form');
        }else
        {
            $this->load->view('design/header');
            $this->load->view('dashboard/home');
            $this->load->view('design/footer');
        }      
        
    }
}
