<?php

class M_manajemenodp extends CI_Model
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

// function setDataTambah($data)
//     {
//         $this->db->insert('odp',$data);
//     }



}