<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
  
    public function ambilPengguna($username, $password, $status, $level)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status', $status);
        $this->db->where('level', $level);
        $query = $this->db->get();
        //echo $query;
        return $query->num_rows();
    }
  
    public function dataPengguna($username)
    {
        $this->db->select('username');
        $this->db->select('first_name');
        $this->db->select('last_name');
        $this->db->select('level');
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function getAllRegistrationRequest()
    {
        return $this->db->get('registration_request');
    }
  
    public function getOneRegistrationRequest($username)
    {
        return $this->db->get_where('registration_request', array('username'=>$username))->row();
    }
}  

?>