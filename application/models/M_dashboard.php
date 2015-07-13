<?php

class M_dashboard extends CI_Model
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

    public function getStatsSO()
    {
        $this->db->select('COUNT(NAMA_SO) as JML_SO');
        $this->db->from('site_operation');

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

    public function getStatsArea()
    {
        $this->db->select('COUNT(ID_AREA) as JML_AREA');
        $this->db->from('area');

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
        $this->db->from('daftar');
        
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

    public function getLevel()
    {
        $this->db->select('level');
        $this->db->from('user');

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