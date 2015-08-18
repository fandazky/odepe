<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
  
  
    public function ambilPengguna($username, $password, $aktif, $level)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('aktif', $aktif);
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
        $query = $this->db->get('users');
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

    public function getUserData($username)
    {
        return $this->db->get_where('users', array('username'=>$username))->row();
    }

    public function updateProfile($username, $data)
    {
        //echo $username." ".$this->input->post('namadepan')." ".$this->input->post('namabelakang')." ".$this->input->post('alamat');
        $this->db->where('username', $username);
        $this->db->update('users', $data);
    }

    public function getAllArea()
    {
        return $this->db->get('area')->result();
    }

    public function getUserArea($user)
    {
        $this->db->select('id_area');
        $query =  $this->db->get_where('users', array('username'=>$user));
        return $query->row();
    }
}  

?>