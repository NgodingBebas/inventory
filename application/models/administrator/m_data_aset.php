<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_data_aset extends CI_Model {
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
      

     
    public function Save($idAset,$nomorSeri,$jenisAset,$statusAset,$jumlah){
		 
		$this->db->insert('aset',$data);
    }

	//public function get_Id()
	//{
	//	$query=$this->db->query("SELECT MAX(RIGHT(id_tabung,4)) AS id_max FROM tabung");
	//	$id = "";
	//	if($query->num_rows() > 0){
	//		foreach($query->result() as $kd){
      //          $tmp = ((int)$kd->id_max)+1;
        //        $id = sprintf("%04s", $tmp);
          //  }
	//	}else{
	//		$id = "0001";
	//	}
//
//		$karakter = "TBG";
//		return $karakter.$id;
//	}
//
//	public function get_tabung()
//	{
//		$query=$this->db->get('tabung');
//		if($query->num_rows() > 0){
//			return $query->result();
//		}else{
//			return false;
//		}
//	}

//	public function insert_tabung($tabung_data)
//	{
//		$this->db->insert('tabung',$tabung_data);
//	}
//
//	public function find_tabung($id)
//	{
//		$query = $this->db->where('id_tabung',$id)->limit(1)->get('tabung');
//		if($query->num_rows() > 0){
//			return $query->row();
//		}else{
//			return array();
//		}
//	}
//
//	public function update_tabung($id, $tabung_data)
//	{
//		$this->db->where('id_tabung',$id)->update('tabung',$tabung_data);
//	}
//
//	public function delete_tabung($id)
//	{
//		$this->db->where('id_tabung',$id)->delete('tabung');
//	}
}