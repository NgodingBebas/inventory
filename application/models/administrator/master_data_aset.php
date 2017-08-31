<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_data_aset extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function getId()
	{	
		$query = $this->db->query("SELECT max(KODE_ASET) as IDASET FROM aset");
		return $query->result(); 
	}

    function getAset(){
    $query = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, aset.JUMLAH, jenis.TIPE from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS");
    return $query->result();
    }

	function Get_Data_Aset($idAset)
	{	
		$query2 = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.KODE_JENIS, jenis.NAMA_JENIS, aset.STATUS, aset.JUMLAH FROM aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.KODE_ASET = ".$idAset);
		return $query2->result(); 
	}

	function getAsetBelum(){
    $query = $this->db->query("select a.KODE_ASET,a.NO_SERI, j.NAMA_JENIS, j.TIPE from aset a, jenis j where a.KODE_JENIS = j.KODE_JENIS and a.STATUS='belum'");
    return $query->result();
  	}
      
    public function Save($idAset,$nomorSeri,$jenisAset,$statusAset){
		$data = array(  
		  'KODE_ASET'=>$idAset, 
		  'NO_SERI'=>$nomorSeri,
		  'KODE_JENIS'=>$jenisAset,
		  'STATUS'=>$statusAset
		);  
		$this->db->insert('aset',$data);
    }


    function Get_Data_Elektronik_Pinjam()
	{	
		$query2 = $this->db->query("select count(aset.KODE_ASET) as JUMLAH from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where jenis.TIPE = 'Elektronik' and aset.STATUS='Dipinjam'");
		return $query2->result(); 
	}

	function Get_Data_Perkakas_Pinjam()
	{	
		$query2 = $this->db->query("select count(aset.KODE_ASET) as JUMLAH from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where jenis.TIPE = 'Perkakas' and aset.STATUS='Dipinjam'");
		return $query2->result();  
	}

	 function Get_Data_Elektronik()
	{	
		$query2 = $this->db->query("select count(aset.KODE_ASET) as JUMLAH from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where jenis.TIPE = 'Elektronik' and aset.STATUS='Tersedia'");
		return $query2->result(); 
	}

	function Get_Data_Perkakas()
	{	
		$query2 = $this->db->query("select count(aset.KODE_ASET) as JUMLAH from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where jenis.TIPE = 'Perkakas' and aset.STATUS='Tersedia'");
		return $query2->result();  
	}

	function Get_Data_Keluar()
	{	
		$query2 = $this->db->query("select count(aset.KODE_ASET) as JUMLAH from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.STATUS='Keluar'");
		return $query2->result();  
	}


		function get_report_Aset(){
    $query = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, jenis.TIPE, aset.STATUS from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.STATUS = 'Tersedia' or aset.STATUS = 'Dipinjam'");
    return $query->result();
    }

    public function Update(){
		$idAset = $this->input->post('idAset');   
		$nomorSeri = $this->input->post('nomorSeri');
		$jenisAset = $this->input->post('jenisAset');   
		$statusAset = $this->input->post('statusAset');
		$data = array(
		 'NO_SERI'=>$nomorSeri,
		 'KODE_JENIS'=>$jenisAset,
		 'STATUS'=>$statusAset
		); 
		$this->db->where('KODE_ASET', $idAset);
		$result = $this->db->update('aset', $data);
    }


    function Delete($idAset)
	{	
		$this->db->where('KODE_ASET', $idAset);
		$this->db->delete('aset');
	}

}
?>