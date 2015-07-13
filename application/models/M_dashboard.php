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

    public function getNoError()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR = 'No Error'";
        $query = $this->db->query($q);
        

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getErrorLokasi()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR = 'Tidak Ada di Lokasi'";
        $query = $this->db->query($q);
        

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getErrorStarclick()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR = 'Tidak Ada di Starclick'";
        $query = $this->db->query($q);
        

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getWrongLabel()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR = 'Wrong Label'";
        $query = $this->db->query($q);
        

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getSalahPosisi()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR = 'Salah Posisi'";
        $query = $this->db->query($q);
        

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getBeririsan()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR = 'ID & Kluster beda, tetapi koordinat sama (IRISAN)'";
        $query = $this->db->query($q);
        

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }

    public function getKeseluruhan()
    {
        $q = "SELECT COUNT(DAFTAR.ID_ERROR) as JML_ERROR
              FROM DAFTAR, ERROR
              WHERE ERROR.ID_ERROR = DAFTAR.ID_ERROR
              AND NAMA_ERROR != 'No Error'";
        $query = $this->db->query($q);
        

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