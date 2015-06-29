<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_manajemenuser extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRegistrationRequest()
    {
        return $this->db->get('registration_request');
    }
  
    public function getOneRegistrationRequest($username)
    {
        return $this->db->get_where('registration_request', array('username'=>$username))->row();
    }

    public function getAllActiveUser()
    {
        return $this->db->get('user');
    }

    public function deleteRegistrationRequest($id)
    {
        $this->db->where('username',$id); 
        $this->db->delete('registration_request');
    }
}
  
?>