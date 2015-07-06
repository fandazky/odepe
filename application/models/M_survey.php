<?php

class M_survey extends CI_Model
{
	public function getKluster()
 	{
 		$this->db->select('nama_kluster, id_kluster');
        $this->db->order_by('nama_kluster', 'asc'); 
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

    // public function loadODP()
    // {
        
    // }

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