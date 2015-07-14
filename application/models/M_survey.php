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
 		$query = $this->db->query(
            'SELECT ID_DAFTAR, DAFTAR.ID_KOMPETITOR, DAFTAR.ID_ERROR, DAFTAR.ID_ODP, NAMA_KLUSTER, NAMA_ODP, NAMA_ERROR,
            NAMA_KOMPETITOR, TGL_SURVEY, TGL_INPUT, VALID_TAG, LATITUDE, LONGITUDE, LABEL, AVAILABILITY,
            BANGUNAN, KURANG_DARI_500JT, ANTARA_500JT_SD_1M, LEBIH_DARI_1M, PERKAMPUNGAN, RUKO, KANTOR_KECIL,
            KANTOR_BESAR, PERGURUAN_TINGGI, KETERANGAN
            FROM KLUSTER, ODP, DAFTAR, KOMPETITOR, ERROR
            WHERE ODP.ID_KLUSTER = KLUSTER.ID_KLUSTER
            AND DAFTAR.ID_ODP = ODP.ID_ODP
            AND DAFTAR.ID_KOMPETITOR = KOMPETITOR.ID_KOMPETITOR
            AND DAFTAR.ID_ERROR = ERROR.ID_ERROR
            ORDER BY NAMA_KLUSTER, NAMA_ODP'
            );

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

    public function getData()
    {   
        $query = $this->db->query(
            'SELECT ID_DAFTAR, DAFTAR.ID_KOMPETITOR, DAFTAR.ID_ERROR, DAFTAR.ID_ODP, NAMA_KLUSTER, NAMA_ODP, NAMA_ERROR,
            NAMA_KOMPETITOR, TGL_SURVEY, TGL_INPUT, VALID_TAG, LATITUDE, LONGITUDE, LABEL, AVAILABILITY,
            BANGUNAN, KURANG_DARI_500JT, ANTARA_500JT_SD_1M, LEBIH_DARI_1M, PERKAMPUNGAN, RUKO, KANTOR_KECIL,
            KANTOR_BESAR, PERGURUAN_TINGGI, KETERANGAN
            FROM KLUSTER, ODP, DAFTAR, KOMPETITOR, ERROR
            WHERE ODP.ID_KLUSTER = KLUSTER.ID_KLUSTER
            AND DAFTAR.ID_ODP = ODP.ID_ODP
            AND DAFTAR.ID_KOMPETITOR = KOMPETITOR.ID_KOMPETITOR
            AND DAFTAR.ID_ERROR = ERROR.ID_ERROR'
            );

        if ($query->num_rows() > 0) {
            return $query->row();
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

    public function getDaftarData($id_daftar)
    {
        return $this->db->get_where('daftar', array('id_daftar'=>$id_daftar))->row();
    }

    public function updateDaftar($id_daftar, $dataSurvey)
    {
        
        $this->db->where('id_daftar', $id_daftar);
        return $this->db->update('daftar', $dataSurvey); 

    }

}

// /* End of file media_model.php */