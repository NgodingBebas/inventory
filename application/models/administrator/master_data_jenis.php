<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_data_jenis extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function Get_Data(){
    $query = $this->db->query("SELECT * FROM jenis ORDER BY KODE_JENIS ASC");
    return $query->result();
  }
      
    public function Save($namaJenis,$tipe){
		$data = array( 
		  'NAMA_JENIS'=>$namaJenis,
		  'TIPE'=>$tipe
		);  
		$this->db->insert('jenis',$data);
    }


    function Get_Jenis($idJenis)
	{	
		$query2 = $this->db->query("SELECT * FROM jenis where KODE_JENIS = ".$idJenis);
		return $query2->result(); 
	}

	function Get_Jenis_2($idAset)
	{	
		$query2 = $this->db->query("SELECT jenis.KODE_JENIS, jenis.NAMA_JENIS FROM aset INNER JOIN jenis on aset.KODE_JENIS <> jenis.KODE_JENIS where aset.KODE_ASET = ".$idAset);
		return $query2->result(); 
	}

	function Get_Jenis_Aset()
	{	
		$query2 = $this->db->query("select * from jenis  order by NAMA_JENIS ");
		return $query2->result(); 
	}


	


	public function Update(){
		$idJenis = $this->input->post('idJenis');   
		$namaJenis = $this->input->post('namaJenis');
		$tipe = $this->input->post('tipe');   
		$data = array(
		 'NAMA_JENIS'=>$namaJenis,
		 'TIPE'=>$tipe
		); 
		$this->db->where('KODE_JENIS', $idJenis);
		$result = $this->db->update('jenis', $data);
    }
	
	

	function getId()
	{	
		$query = $this->db->query("SELECT max(KODE_JENIS) as IDJENIS FROM jenis");
		if (is_null($query)){
			$query = "1";
		}
		return $query->result(); 
	}

	function Delete($idJenis)
	{	
		$this->db->where('KODE_JENIS', $idJenis);
		$this->db->delete('jenis');
	}

}
?>