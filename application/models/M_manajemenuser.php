<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_manajemenuser extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRegistrationRequest()
    {
        $query = $this->db->query('SELECT username, nik, first_name, last_name, address, level, CASE WHEN id_area = NULL THEN \'\' ELSE (SELECT nama_area from area where area.id_area = registration_request.id_area) END as nama_area FROM registration_request ');
        return $query;
        //return $this->db->get('registration_request');
    }
  
    public function getOneRegistrationRequest($username)
    {
        return $this->db->get_where('registration_request', array('username'=>$username))->row();
    }

    public function getAllActiveUser()
    {
        $query = $this->db->query('SELECT username, nik, first_name, last_name, address, level, CASE WHEN id_area = NULL THEN \'\' ELSE (SELECT nama_area from area where area.id_area = user.id_area) END as nama_area FROM user ');
        return $query;
        //return $this->db->get('user');
    }

    public function deleteRegistrationRequest($id)
    {
        $this->db->where('username',$id); 
        $this->db->delete('registration_request');
    }

    public function deleteActiveUser($id)
    {
        $this->db->where('username',$id); 
        $this->db->delete('user');
    }

    public function username_exists($id)
    {
        // $this->db->where('username',$id);
        // $query = $this->db->get('user');
        $query = $this->db->get_where('user', array('username'=>$id));

        //return $query->num_rows();
        
        
        if ($query->num_rows() > 0){
            return true;
            //return "lebih";
        }
        else{
            return false;
            //return "sama";
        }
        
    }
}
  
?>