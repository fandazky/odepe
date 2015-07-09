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
        if($this->session->userdata('isLogin') != TRUE)
        {
            redirect('login');
        }
    }    
    
    public function index()
    {  
              
        
    }
}
