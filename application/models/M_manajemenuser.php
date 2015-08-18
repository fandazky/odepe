<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_manajemenuser extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRegistrationRequest()
    {
        // $query = $this->db->query('SELECT username, nik, first_name, last_name, address, level, CASE WHEN id_area = NULL THEN \'\' ELSE (SELECT nama_area from area where area.id_area = registration_request.id_area) END as nama_area FROM registration_request ');
        // return $query;
        //return $this->db->get('registration_request');
        $query = $this->db->query('SELECT username, nik, first_name, last_name, address, level, CASE WHEN id_area = NULL THEN \'\' ELSE (SELECT nama_area from area where area.id_area = users.id_area) END as nama_area FROM users where users.aktif = 0');
        return $query;
    }
  
    // public function getOneRegistrationRequest($username)
    // {
    //     // return $this->db->get_where('registration_request', array('username'=>$username))->row();
    //     return $this->db->get_where('users', array('username'=>$username, 'aktif'=>0))->row();
    // }

    public function getAllActiveUser()
    {
        $query = $this->db->query('SELECT username, nik, first_name, last_name, address, level, CASE WHEN id_area = NULL THEN \'\' ELSE (SELECT nama_area from area where area.id_area = users.id_area) END as nama_area FROM users where users.aktif = 1');
        return $query;
        //return $this->db->get('user');
    }

    public function deleteRegistrationRequest($id)
    {
        $this->db->where('username',$id); 
        $this->db->where('aktif', 0);
        $this->db->delete('users');
    }

    public function deleteActiveUser($id)
    {
        $this->db->where('username',$id); 
        $this->db->where('aktif', 1);
        $this->db->delete('users');
    }

}
  
?>