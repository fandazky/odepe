<?php

class M_survey extends CI_Model
{
	public function getKluster()
 	{
 	
        $this->db->select('id_kluster, nama_kluster');  
        $this->db->from('kluster');  
        $query = $this->db->get();  
        foreach ($query->result() as $row) {

                $data[] = $row;
            }
        return $data;
 	}

	public function getODP($id_kluster = 'string')
 	{
 	
        $this->db->select('nama_odp, id_odp');  
        $this->db->from('odp');  
        $this->db->where('id_kluster',$id_kluster);  
        $query = $this->db->get();  
        return $query->result(); 
 	}

   
	public function getError()
 	{
 		$this->db->select('nama_error, id_error');
		$this->db->from('error');  
        $query = $this->db->get();  
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        else{
            return false;   
        }

 	}

    public function getKompetitor()
    {
        $this->db->select('nama_kompetitor, id_kompetitor');
        $this->db->from('kompetitor');  
        $query = $this->db->get();  
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        else{
            return false;   
        }

    }

    public function getSurvey()
 	{	
 		$query = $this->db->get('daftar');

		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
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