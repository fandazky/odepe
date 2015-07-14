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

    public function addOdp($nama_kluster, $nama_odp, $latitude, $longtitude)
    {

        $query = "INSERT INTO odp (NAMA_ODP,ID_KLUSTER,  LT, LG) VALUES ( '$nama_odp','$nama_kluster', '$latitude','$longtitude')";
        return $this->db->query($query);

    }

    public function getSo()
    {

        $this->db->select('nama_so');
        $this->db->select('id_so');
        $query = $this->db->get('site_operation');

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

    public function addKluster($nama_kluster, $nama_so)
    {

        $query = "INSERT INTO kluster (NAMA_KLUSTER,ID_SO) VALUES ('$nama_kluster', '$nama_so')";
        return $this->db->query($query);

    }

    public function getDataOdp()
    {   
        $q = "SELECT site_operation.NAMA_SO, kluster.NAMA_KLUSTER, odp.NAMA_ODP, odp.ID_ODP FROM site_operation, kluster, odp WHERE odp.id_kluster = kluster.id_kluster and kluster.id_so = site_operation.id_so";
        $query = $this->db->query($q);
       // $query = $this->db->get('odp');
        //$query = $this->db->get('site_operation');


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
        //$this->db->get_where('odp', array('ID_ODP' => $id));

        $dataODP = array(
            'NAMA_ODP' => $data['NAMA_ODP'],
            'ID_KLUSTER' => $data['ID_KLUSTER']
            );


        $this->db->where('ID_ODP', $id);
        return $this->db->update('odp', $dataODP); 

        $dataKluster = array(
            'ID_SO' => $data['ID_SO']
            );

       // $sql = $this->db->query("SELECT ID_KLUSTER FROM kluster,odp WHERE kluster.id_kluster = odp.id_kluster")->row();
        $this->db->where('ID_KLUSTER', $data['ID_KLUSTER']);
        return $this->db->update('kluster', $dataKluster);


        // $s = $this->db->query("SELECT ID_SO FROM kluster,site_operation WHERE kluster.id_so = site_operation.idso")->row();
        // $this->db->where('ID_SO', $s->ID_SO);




        // $this->db->where($nama_odp)
        // $this->db->update('odp',$data):

        // $this->db->where($nama_kluster):
        // $this->db->update('kluster',$data);
                

        // $this->db->get_where('kluster', array('NAMA_KLUSTER' => $id));

        // $this->db->where('NAMA_KLUSTER', $id);
        // return $this->db->update('kluster', $data);
            
    }


    public function getArea()
    {
        $this->db->select('nama_area');
        $this->db->select('id_area');
        $query = $this->db->get('area');

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

    public function addSo($nama_so, $nama_area)
    {

        $query = "INSERT INTO site_operation (NAMA_SO,id_area) VALUES ('$nama_so', '$nama_area')";
        return $this->db->query($query);

    }


}