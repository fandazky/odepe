<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_report extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDetailedErrorKluster($errorid,$idklu)
    {
        $query = $this->db->query(
            "SELECT ID_DAFTAR, DAFTAR.ID_ERROR, DAFTAR.ID_ODP, NAMA_ODP,
            LATITUDE, LONGITUDE, AVAILABILITY, BANGUNAN
            FROM ODP, DAFTAR
            WHERE ODP.ID_KLUSTER = '$idklu'
            AND DAFTAR.ID_ODP = ODP.ID_ODP
            AND DAFTAR.ID_ERROR = '$errorid'
            ORDER BY NAMA_ODP"
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

    public function getDetailedErrorSiteOperation($erroraid,$soid)
    {
        
        $query = $this->db->query("select
                                        ID_DAFTAR, DAFTAR.ID_ERROR, DAFTAR.ID_ODP, NAMA_ODP,
                                        LATITUDE, LONGITUDE, AVAILABILITY, BANGUNAN
                                    from 
                                        daftar, kluster, odp, site_operation 
                                    where 
                                            daftar.id_odp = odp.id_odp 
                                        and 
                                            odp.id_kluster = kluster.id_kluster 
                                        and 
                                            kluster.id_so = site_operation.id_so
                                        and
                                            kluster.id_so = '$soid' 
                                        and
                                            daftar.id_error = '$erroraid'
                                        order by NAMA_ODP");

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

    public function getDetailedErrorArea($errorid,$areaid)
    {
        
        $query = $this->db->query("select
                                        ID_DAFTAR, DAFTAR.ID_ERROR, DAFTAR.ID_ODP, NAMA_ODP,
                                        LATITUDE, LONGITUDE, AVAILABILITY, BANGUNAN
                                        from 
                                            area, daftar, kluster, odp, site_operation
                                        where 
                                                daftar.id_odp = odp.id_odp
                                        and
                                                odp.id_kluster = kluster.id_kluster
                                        and
                                                kluster.id_so = site_operation.id_so
                                        and
                                                site_operation.id_area = area.id_area
                                        and
                                                site_operation.id_area = '$areaid'
                                        and
                                                daftar.id_error = '$errorid'");
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

    public function getDetailedErrorWitel($errorid)
    {
        $query = $this->db->query(
            "SELECT ID_DAFTAR, DAFTAR.ID_ERROR, DAFTAR.ID_ODP, NAMA_ODP,
            LATITUDE, LONGITUDE, AVAILABILITY, BANGUNAN
            FROM ODP, DAFTAR
            WHERE DAFTAR.ID_ODP = ODP.ID_ODP
            AND '$errorid' = DAFTAR.ID_ERROR
            ORDER BY NAMA_ODP"
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

    public function getReport()
    {
    	$this->db->select('id_error,id_odp,id_kluster');
    	$query= $this->db->get('daftar');

    	if($query->num_rows() > 0)
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


     public function ambilError($errorid)
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->where('id_error', $errorid);
        
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function ambilErrorCluster($klusterid,$erroreid)
    {
        
        $query = $this->db->query("select 
        									daftar.id_error,odp.nama_odp,kluster.nama_kluster
        								from
        									daftar,odp,kluster
        								where
        										daftar.id_odp = odp.id_odp 
        									and
        										odp.id_kluster = kluster.id_kluster 
        									and
        										kluster.id_kluster = '$klusterid'
        									and
        										daftar.id_error = '$erroreid'");
        // print_r($query->result());

        return $query->num_rows();
    }

    public function ambilErrorSetOperation($soid,$erroraid)
    {
        
        $query = $this->db->query("select
										daftar.id_daftar,daftar.id_error
								    from 
								    	daftar, kluster, odp, site_operation 
								    where 
								    		daftar.id_odp = odp.id_odp 
								    	and 
								        	odp.id_kluster = kluster.id_kluster 
								    	and 
								        	kluster.id_so = site_operation.id_so
								        and
								        	kluster.id_so = '$soid' 
								        and
								        	daftar.id_error = '$erroraid'");

        return $query->num_rows();
    }

    public function ambilErrorArea($areaid,$errorid)
    {
        
        $query = $this->db->query("select
										daftar.id_error, odp.nama_odp, kluster.nama_kluster, site_operation.nama_so, area.nama_area
										from 
											area, daftar, kluster, odp, site_operation
										where 
										 		daftar.id_odp = odp.id_odp
										and
										       	odp.id_kluster = kluster.id_kluster
										and
										      	kluster.id_so = site_operation.id_so
										and
									    		site_operation.id_area = area.id_area
									    and
										       	site_operation.id_area = '$areaid'
										and
										       	daftar.id_error = '$errorid'");
        //echo $query;
        //print_r($query->result());
        return $query->num_rows();
    }

    public function getArea()
    {
    	$this->db->select('nama_area, id_area');
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

    public function getSetOperation()
    {
    	$this->db->select('nama_so, id_so');
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
        $this->db->order_by('nama_odp', 'asc');



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

 	public function getNamaCluster($id_kluster)
 	{
 		$this->db->select('nama_kluster');
 		$this->db->from('kluster');
 		$this->db->where('id_kluster',$id_kluster);

 		$query=$this->db->get();
 		return $query->row();
 	}

 	public function getNamaSiteOperation($idso)
 	{
 		$this->db->select('nama_so');
 		$this->db->from('site_operation');
 		$this->db->where('id_so',$idso);

 		$query=$this->db->get();
 		return $query->row();
 	}

 	public function getNamaArea($idarea)
 	{
 		$this->db->select('nama_area');
 		$this->db->from('area');
 		$this->db->where('id_area',$idarea);

 		$query=$this->db->get();
 		return $query->row();
 	}

 	public function totalODPWitel()
 	{
 		$this->db->select('*');
 		$this->db->from('odp');

 		$query = $this->db->get();
 		return $query->num_rows();
 	}

 	public function totalODPArea($idarea)
 	{
 		$query = $this->db->query("select * 
 									from 
 										odp,kluster,area,site_operation 
 									where 
 										area.id_area = '$idarea' 
 									and 
 										area.id_area = site_operation.id_area 
 									and 
 										site_operation.id_so = kluster.id_so 
 									and 
 										kluster.id_kluster=odp.id_kluster");
 		return $query->num_rows();
 	}

 	public function totalODPSO($idso)
 	{
 		$query = $this->db->query("select * 
 									from 
 										odp,kluster,site_operation 
 									where 
 										site_operation.id_so = '$idso' 
 									and 
 										site_operation.id_so = kluster.id_so 
 									and 
 										kluster.id_kluster=odp.id_kluster");
 		return $query->num_rows();
 	}

 	public function totalODPKluster($idkluster)
 	{
 		$query = $this->db->query("select * 
 									from 
 										odp,kluster 
 									where 
 										kluster.id_kluster = '$idkluster' 
 									and 
 										kluster.id_kluster=odp.id_kluster");
 		return $query->num_rows();
 	}

 	public function sudahSurveyWitel()
 	{
 		$query = $this->db->query("select * from odp, daftar where odp.id_odp = daftar.id_odp");
 		return $query->num_rows();
 	}

 	public function sudahSurveyArea($idarea)
 	{
 		$query = $this->db->query("select * 
 									from 
 										odp,kluster,area,site_operation,daftar
 									where 
 										area.id_area = '$idarea' 
 									and 
 										area.id_area = site_operation.id_area 
 									and 
 										site_operation.id_so = kluster.id_so 
 									and 
 										kluster.id_kluster=odp.id_kluster
 									and
 										odp.id_odp = daftar.id_odp");
 		return $query->num_rows();
 	}

 	public function sudahSurveySO($idso)
 	{
 		$query = $this->db->query("select * 
 									from 
 										odp,kluster,site_operation,daftar 
 									where 
 										site_operation.id_so = '$idso' 
 									and 
 										site_operation.id_so = kluster.id_so 
 									and 
 										kluster.id_kluster=odp.id_kluster
 									and
 										odp.id_odp = daftar.id_odp");
 		return $query->num_rows();
 	}

 	public function sudahSurveyKluster($idkluster)
 	{
 		$query = $this->db->query("select * 
 									from 
 										odp,kluster,daftar 
 									where 
 										kluster.id_kluster = '$idkluster' 
 									and 
 										kluster.id_kluster=odp.id_kluster
 									and
 										odp.id_odp = daftar.id_odp");
 		return $query->num_rows();
 	}

}