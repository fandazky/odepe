<?php

class M_survey extends CI_Model
{
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

	public function getError()
 	{
 		$this->db->select('nama_error, id_error');
		$query = $this->db->get('error');

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

    // public function funcname($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('kluster a');
    //     $this->db->join('odp b', 'b.id_kluster=a.id_kluster', 'left');
    //     $this->db->join('daftar c', 'c.id_odp=b.id_odp', 'left');
    //     $this->db->where('c.id_odp',$id);
    //     // $this->db->order_by('c.track_title','asc');
    //     $query = $this->db->get();
    //     if($query->num_rows() != 0)
    //     {
    //         return $query->result_array();
    //     }
    //     else
    //     {
    //         return false;
    //     }
    // }

	public function getSurvey()
 	{	
 		$query = $this->db->get('daftar');

		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                // $id = $row->id_odp;

                $data[] = $row;
            }
            return $data;
        }
        else{
        	return false;	
        }
 	}

   

 	public function insertDaftar($dataSurvey)
 	{
 		$this->db->set($dataSurvey); 
		$this->db->insert('daftar');
		return TRUE;
 	}
}

// /* End of file media_model.php */