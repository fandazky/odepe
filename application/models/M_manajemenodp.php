<?php

class M_manajemenodp extends CI_Model
{
    public function getKluster()
    {
        $this->db->select('nama_kluster');
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
<<<<<<< HEAD

    public function getListOdp()
    {   
        $query = $this->db->get('odp');

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

    /*public function record_count() {
        return $this->db->count_all('akun');
    }*/

    public function edit($id) {
        $query = $this->db->get_where('odp', array('ID_ODP' => $id));
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return FALSE;
        }
    }

    public function delete($id)
    {
        $this->db->delete('odp', array('ID_ODP' => $id));
        //$this->db->query("delete from galeri where id_foto='$id'");
    }

    public function update($id, $NAMA_ODP, $data){
        $q = $this->db->get_where('odp', array('ID_ODP' => $id));
        $odp =  $q->row()->NAMA_ODP;
        $result = $this->db->get_where('odp', array('NAMA_ODP' => $NAMA_ODP));

        if ($result->num_rows() > 0){
            if ($NAMA_ODP != $odp){
                return FALSE;
            }
        }
        $this->db->where('ID_ODP', $id);
        $this->db->update('odp', $data); 
        return TRUE;
            
    }

    /*public function getListAkses($username){
        $q = $this->db->get_where('akun', array('username' => $username));
        return $q->row()->akses;
    }*/
}

/* End of file akun.php */



// function setDataTambah($data)
//     {
//         $this->db->insert('odp',$data);
//     }

=======
}
>>>>>>> origin/master
