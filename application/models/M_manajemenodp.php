<?php

class M_manajemenodp extends CI_Model
{
    public function getKluster()
    {
        $this->db->select('nama_kluster');
        $this->db->select('id_kluster');
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


    public function getDataOdp()
    {   
        
        $query = $this->db->get('odp');

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

    public function delete($id)
    {
        $this->db->delete('odp', array('ID_ODP' => $id));
        //$this->db->query("delete from galeri where id_foto='$id'");
    }

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

    public function update($id,$data){
        $this->db->get_where('odp', array('ID_ODP' => $id));

        $this->db->where('ID_ODP', $id);
        $this->db->update('odp', $data); 
        return TRUE;
            
    }


}