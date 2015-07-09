<?php

class Dashboard_model extends CI_Model
{
	public function getStatsODP()
 	{
 		$this->db->select('COUNT(NAMA_ODP) as JML_ODP');
 		$this->db->from('odp');

 		$query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
 	}

    public function getStatsKluster()
    {
        $this->db->select('COUNT(NAMA_KLUSTER) as JML_KLUSTER');
        $this->db->from('kluster');

        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getStatsSurvey()
    {
        $this->db->select('COUNT(ID_DAFTAR) as JML_DAFTAR');
        $this->db->from('jenis_komplain');
        
        $query = $this->db->get();

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }
 
}

/* End of file jenis_komplain_model.php */