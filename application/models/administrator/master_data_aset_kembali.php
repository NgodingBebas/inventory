<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_data_aset_kembali extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function getId()
	{	
		$query = $this->db->query("SELECT max(KODE_KEMBALI) as IDASET FROM kembali_aset");
		return $query->result(); 
	}

    function getPinjam(){
    $query = $this->db->query("select * from pinjam_aset where STATUS =  'Dipinjam' ");
    return $query->result();
    }

    function getAset($idPinjam){
    $idPinjam = $this->uri->segment(4);
    $query = $this->db->query("select a.KODE_ASET, a.NO_SERI, j.NAMA_JENIS, a.STATUS from aset a, jenis j,pinjam_aset pa, detail_pinjam_aset dpa where a.KODE_JENIS=j.KODE_JENIS and a.KODE_ASET=dpa.KODE_ASET and pa.KODE_PINJAM = dpa.KODE_PINJAM and a.STATUS = 'Dipinjam'  and pa.KODE_PINJAM = ".$idPinjam) ;
    return $query->result();
    }


    function getHead($idPinjam){
    $query = $this->db->query("select * from pinjam_aset where KODE_PINJAM = ".$idPinjam);
    return $query->result();
    }

	function Get_Data_Aset($idAset)
	{	
		$query2 = $this->db->query("select aset.KODE_ASET, aset.NO_SERI, jenis.KODE_JENIS, jenis.NAMA_JENIS, aset.STATUS FROM aset inner join jenis on aset.KODE_JENIS = jenis.KODE_JENIS where aset.KODE_ASET = ".$idAset);
		return $query2->result(); 
	}

	function getAsetBelum(){
    $query = $this->db->query("select a.KODE_ASET,a.NO_SERI, j.NAMA_JENIS, j.TIPE from aset a, jenis j where a.KODE_JENIS = j.KODE_JENIS and a.STATUS='belum'");
    return $query->result();
  	}


  	function getHistoryAsetKembali(){
    $query = $this->db->query("select ak.* , dak.* , a.*, j.* from kembali_aset ak, detail_kembali_aset dak , aset a, jenis j where ak.KODE_KEMBALI = dak.KODE_KEMBALI  and a.KODE_ASET= dak.KODE_ASET and j.KODE_JENIS=a.KODE_JENIS");
    return $query->result();
  	}
      
    public function simpan_head($kodeAsetKembali,$kodepinjam){
		$data = array(  
		  'KODE_KEMBALI'=>$kodeAsetKembali, 
		  'TANGGAL'=>date('Y-m-d'),
		  'USER_ID'=>$this->session->userdata('id_user'),
		  'KODE_PINJAM'=>$kodepinjam
		);  
		$this->db->insert('kembali_aset',$data);
    }

    public function simpan_detail($kode,$ids){
        $ids = $ids;
        $kode = $kode;
       	$count = 0;
        foreach ($ids as $id){
        $data = array(  
		  'KODE_KEMBALI'=>$kode, 
		  'KODE_ASET'=>$did = intval($id)
		); 
            
            $this->db->insert('detail_kembali_aset',$data);
            $count = $count+1;
       }
        
        $count = 0;
}

	public function update_status($ids){
		$ids = $ids;
		$count = 0;
		$data = array(
		 'STATUS'=>'Tersedia'
		);

        foreach ($ids as $id){ 
		$this->db->where('KODE_ASET',$did = intval(	$id));
		$result = $this->db->update('aset', $data);
		}
		$count = 0;
    }


	public function update_status_pinjam($idPinjam){
		$idUser = $this->input->post('idUser');  
		$data = array(
		 'STATUS'=>'Dikembalikan'
		); 
		$this->db->where('KODE_PINJAM', $idPinjam);
		$result = $this->db->update('pinjam_aset', $data);
    }


    function Delete($idAset)
	{	
		$this->db->where('KODE_ASET', $idAset);
		$this->db->delete('aset');
	}

}
?>