<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_data_detail_aset_masuk extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function getId()
	{	
		$query = $this->db->query("SELECT max(KODE_ASET)+1 as idAsetMasuk FROM aset");
		if (is_null($query)){
			$query = "1";
		}
		return $query->result(); 
	}

    function getAset(){
    $query = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, aset.JUMLAH jenis.TIPE from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS");
    return $query->result();
    }

	function Get_data_aset_masuk($idAsetMasuk)
	{	
		$query2 = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.KODE_JENIS, jenis.NAMA_JENIS, aset.STATUS, aset.JUMLAH FROM aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.KODE_ASET = ".$idAsetMasuk);
		return $query2->result(); 
	}

	function getAsetBelum(){
    $query = $this->db->query("select a.KODE_ASET,a.NO_SERI, j.NAMA_JENIS, j.TIPE from aset a, jenis j where a.KODE_JENIS = j.KODE_JENIS and a.STATUS='belum'");
    return $query->result();
  	}
      
    public function Save($kodeAset){
		$query = $this->db->query("select KODE_ASET_MASUK from aset_masuk where date(tanggal)=date(now())");
		$date= date("Y-m-d");

		if($query->num_rows() == 1){
	 	$row = $query->row();
		$data = array(  
		  'KODE_ASET_MASUK'=>$row->KODE_ASET_MASUK,
		  'KODE_ASET'=>$kodeAset
		);  
		$this->db->insert('detail_aset_masuk',$data);
		}
		return $query->result(); 
    }


    public function Update(){
		$idAsetMasuk = $this->input->post('idAsetMasuk');   
		$nomorSeri = $this->input->post('nomorSeri');
		$jenisAset = $this->input->post('jenisAset');   
		$statusAset = $this->input->post('statusAset');
		$data = array(
		 'NO_SERI'=>$nomorSeri,
		 'KODE_JENIS'=>$jenisAset,
		 'STATUS'=>$statusAset
		); 
		$this->db->where('KODE_ASET', $idAsetMasuk);
		$result = $this->db->update('aset', $data);
    }


    function Delete($idAsetMasuk)
	{	
		$this->db->where('KODE_ASET', $idAsetMasuk);
		$this->db->delete('aset');
	}

}
?>