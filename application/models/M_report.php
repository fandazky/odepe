<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_report extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getReport()
    {
    	$this->db->select('id_error');
    	$query= $this->db->get('daftar');

    	if($query->num_rows() > 0)
    	{
    		foreach ($query->result() as $row) 
    		{
    			$data[] = $row;

    		}	
    		return $data;
    	}
    	else
    	{
    		return false;
    	}
    	//$query = $this->db->get_where('daftar',array())
    	
    }

     public function ambilError($errorid)
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->where('id_error', $errorid);
        
        $query = $this->db->get();
        //echo $query;
        return $query->num_rows();
    }

    public function getKluster()
 	{
 		$this->db->select('nama_kluster, id_kluster');
		$query = $this->db->get('kluster');

		if ($query->num_rows() > 0)
		{
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        else
        {
        	return false;	
        }
 	}





}