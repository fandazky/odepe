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

// 	public function addMedia($nama_media)
// 	{
// 		$result = $this->db->get_where('media',
// 			array
// 			(
// 				'NAMA_MEDIA' => $nama_media
// 			)
// 		);

// 		if ($result->num_rows() > 0)
// 		{
// 			return FALSE;
// 		}
// 		else
// 		{
// 			$this->db->insert('media',
// 				array
// 				(
// 					'NAMA_MEDIA' => $nama_media
// 				)
// 			); 
// 			return TRUE;
// 		}
// 	}

// 	public function editMedia($id)
// 	{
//     	$query = $this->db->get_where('media', array('ID_MEDIA' => $id));
//     	if ($query->num_rows() > 0) 
//         {
//             return $query->result_array();
//         }
//         else 
//         {
//             return FALSE;
//         }
//     }

//     public function updateMedia($id, $nama_media)
//     {
//     	$q = $this->db->get_where('media', array('ID_MEDIA' => $id));
//     	$media =  $q->row()->NAMA_MEDIA;
// 		$result = $this->db->get_where('media', array('NAMA_MEDIA' => $nama_media));

// 		if ($result->num_rows() > 0)
// 		{
// 			//echo "apakah disini?";
// 			if ($nama_media != $media)
// 			{
// 				return FALSE;
// 			}
// 		}
// 		$this->db->where('ID_MEDIA', $id);
// 		$this->db->update('media', array('NAMA_MEDIA' => $nama_media));
// 		return TRUE;
// 	}

// 	public function deleteMedia($id)
// 	{
// 		$this->db->delete('media', array('ID_MEDIA' => $id));
// 	}
}

// /* End of file media_model.php */