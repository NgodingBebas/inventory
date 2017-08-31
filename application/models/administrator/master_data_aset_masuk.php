<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_data_aset_masuk extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function getId()
	{	
		$query = $this->db->query("select KODE_ASET_MASUK from aset_masuk where date(tanggal)=date(now()) and USER_ID =" .$this->session->userdata('id_user'));
		return $query->result(); 
	}

    function getAset(){
    $query = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, jenis.TIPE from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS");
    return $query->result();
    }

	function Get_data_aset_masuk($idAsetMasuk)
	{	
		$query2 = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.KODE_JENIS, jenis.NAMA_JENIS, aset.STATUS FROM aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.KODE_ASET = ".$idAsetMasuk);
		return $query2->result(); 
	}

	function getAsetBelum(){
    $query = $this->db->query("select a.KODE_ASET,a.NO_SERI, j.NAMA_JENIS, j.TIPE from aset a, jenis j where a.KODE_JENIS = j.KODE_JENIS and a.STATUS='belum'");
    return $query->result();
  	}
      
  	function getHistoryAsetMasuk(){
    $query = $this->db->query("select am.* , dam.* , a.*, j.* from aset_masuk am, detail_aset_masuk dam , aset a, jenis j where am.KODE_ASET_MASUK = dam.KODE_ASET_MASUK  and a.KODE_ASET= dam.KODE_ASET and j.KODE_JENIS=a.KODE_JENIS");
    return $query->result();
  	}
   

    public function Save($userId){
    	$query = $this->db->query("select KODE_ASET_MASUK from aset_masuk where date(tanggal)=date(now()) and USER_ID =" .$this->session->userdata('id_user'));
		$date= date("Y-m-d");
		if($query->num_rows() < 1){
		$data = array(  
		  'TANGGAL'=>$date,
		  'USER_ID'=>$userId
		);  
		$this->db->insert('aset_masuk',$data);
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