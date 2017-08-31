<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class master_data_aset_pinjam extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function getId()
	{	
		$query = $this->db->query("SELECT max(KODE_PINJAM) as IDASET FROM pinjam_aset");
		return $query->result(); 
	}

    function getAset(){
    $query = $this->db->query("select a.KODE_ASET, a.NO_SERI, j.NAMA_JENIS, j.TIPE from aset a, jenis j where a.KODE_JENIS=j.KODE_JENIS and a.STATUS ='Tersedia'");
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

  	function getHistoryAsetPinjam(){
    $query = $this->db->query("select ap.* , dap.* , a.*, j.* from pinjam_aset ap, detail_pinjam_aset dap , aset a, jenis j where ap.KODE_PINJAM = dap.KODE_PINJAM  and a.KODE_ASET= dap.KODE_ASET and j.KODE_JENIS=a.KODE_JENIS");
    return $query->result();
  	}
      
    public function simpan_head($kodeAsetPinjam,$peminjam,$keterangan){
		$data = array(  
		  'KODE_PINJAM'=>$kodeAsetPinjam, 
		  'TANGGAL'=>date('Y-m-d'),
		  'USER_ID'=>$this->session->userdata('id_user'),
		  'PEMINJAM'=>$peminjam,
		  'STATUS'=>'Dipinjam',
		  'KETERANGAN'=>$keterangan
		);  
		$this->db->insert('pinjam_aset',$data);
    }

    public function simpan_detail($kode,$ids){
        $ids = $ids;
        $kode = $kode;
       	$count = 0;
        foreach ($ids as $id){
        $data = array(  
		  'KODE_PINJAM'=>$kode, 
		  'KODE_ASET'=>$did = intval($id)
		); 
            
            $this->db->insert('detail_pinjam_aset',$data);
            $count = $count+1;
       }
        
        $count = 0;
}

	public function update_status($ids){
		$ids = $ids;
		$count = 0;
		$data = array(
		 'STATUS'=>'Dipinjam'
		);

        foreach ($ids as $id){ 
		$this->db->where('KODE_ASET',$did = intval($id));
		$result = $this->db->update('aset', $data);
		}
		$count = 0;
    }



    function Delete($idAset)
	{	
		$this->db->where('KODE_ASET', $idAset);
		$this->db->delete('aset');
	}

}
?>