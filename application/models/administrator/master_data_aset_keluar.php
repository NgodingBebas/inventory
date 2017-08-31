<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_data_aset_keluar extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function getId()
	{	
		$query = $this->db->query("SELECT max(KODE_ASET_KELUAR) as IDASET FROM aset_keluar");
		if (is_null($query)){
			$query = "1";
		}
		return $query->result(); 
	}

    function getAset(){
    $query = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, jenis.TIPE from aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.STATUS = 'Tersedia'");
    return $query->result();
    }

    function getriwayatAset(){
    $query = $this->db->query("select aset_keluar.KODE_ASET_KELUAR, aset_keluar.TANGGAL, aset_keluar.KETERANGAN, detail_aset_keluar.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, jenis.TIPE from aset_keluar inner join detail_aset_keluar on aset_keluar.KODE_ASET_KELUAR = detail_aset_keluar.KODE_ASET_KELUAR inner join aset on detail_aset_keluar.KODE_ASET = aset.KODE_ASET inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.STATUS = 'Keluar'");
    return $query->result();
    }

	function Get_Data_Aset($idAset)
	{	
		$query2 = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.KODE_JENIS, jenis.NAMA_JENIS, aset.STATUS FROM aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.KODE_ASET = ".$idAset);
		return $query2->result(); 
	}

	function get_report_Aset(){
    $query = $this->db->query("select aset_keluar.KODE_ASET_KELUAR, aset_keluar.TANGGAL, detail_aset_keluar.KODE_ASET, aset.NO_SERI, jenis.NAMA_JENIS, jenis.TIPE from aset_keluar inner join detail_aset_keluar on aset_keluar.KODE_ASET_KELUAR = detail_aset_keluar.KODE_ASET_KELUAR inner join aset on detail_aset_keluar.KODE_ASET = aset.KODE_ASET inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.STATUS = 'Keluar'");
    return $query->result();
    }

    function getHistoryAsetKeluar(){
    $query = $this->db->query("select ak.* , dak.* , a.*, j.* from aset_keluar ak, detail_aset_keluar dak , aset a, jenis j where ak.KODE_ASET_KELUAR = dak.KODE_ASET_KELUAR  and a.KODE_ASET= dak.KODE_ASET and j.KODE_JENIS=a.KODE_JENIS");
    return $query->result();
  	}
      
    public function simpan_head($kode,$ket,$idUser){
		$data = array(  
		  'KODE_ASET_KELUAR'=>$kode, 
		  'KETERANGAN'=>$ket,
		  'TANGGAL'=>date('Y-m-d'),
		  'USER_ID'=>$idUser
		 
		);  
		$this->db->insert('aset_keluar',$data);
    }

    public function simpan_detail($kode,$ids){
        $ids = $ids;
        $kode = $kode;
       	$count = 0;
        foreach ($ids as $id){
        $data = array(  
		  'KODE_ASET_KELUAR'=>$kode, 
		  'KODE_ASET'=>$did = intval($id)
		); 
            
            $this->db->insert('detail_aset_keluar',$data);
            $count = $count+1;
       }
        
        $count = 0;
}

	public function update_status($ids){
		$ids = $ids;
		$count = 0;
		$data = array(
		 'STATUS'=>'Keluar'
		);

        foreach ($ids as $id){ 
		$this->db->where('KODE_ASET',$did = intval($id));
		$result = $this->db->update('aset', $data);
		}
		$count = 0;
    }


    
}
?>