<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_report extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getReport()
    {
    	$this->db->select('id_error,id_odp,id_kluster');
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

    public function ambilErrorCluster($idkluster,$errorid)
    {
        //$this->db->select('id_error');
        //$this->db->from('daftar,kluster,odp');
        //$this->db->where('daftar.id_error', $errorid);
        //$this->db->where('odp.id_kluster', $idkluster);
        //$this->db->where('odp.id_odp = daftar.id_odp');
        //$this->db->where();


        
        $query = $this->db->query("select id_daftar,daftar.id_error from daftar,odp,kluster where daftar.id_odp = odp.id_odp and odp.id_kluster = kluster.id_kluster and kluster.id_kluster = ".$idkluster." and daftar.id_error = ".$errorid."");
        //echo $query;
        //print_r($query->result());
        return $query->num_rows();
    }

    public function getSetOperation()
    {

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

 	public function getODP()
 	{
 		$this->db->select('nama_odp, id_odp');
        $this->db->order_by('nama_odp', 'asc');

        //$query = $this->db->get_where('odp', array('id_kluster' => $id_kluster));

		$query = $this->db->get('odp');

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