<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_aset1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/tabung_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('administrator/m_data_aset');


    }

	public function index()
	{				
			$data['aset'] = $this->m_data_aset->getId()->result()();
			$this->load->view('administrator/aset_jumlah/asetjumlah',$data);
	}


	public function add_asetjumlah()
	{		
		$this->load->view('Administrator/aset_jumlah/asetjumlah');	
	}

function Submit_Aset(){
		$nama = $this->input->post('idAset');
		$alamat = $this->input->post('nomorSeri');
		$pekerjaan = $this->input->post('jenisAset');
		$pekerjaan = $this->input->post('statusAset');
		$pekerjaan = $this->input->post('jumlah');
 
		$data = array(
			'KODE_ASET' => $idAset,
			'NO_SERI' => $nomorSeri,
			'KODE_JENIS' => $jenisAset,
			'KODE_ASET' => $statusAset,
			'JUMLAH' => $jumlah
			);
		$this->m_data_aset->save($data,'user');
		redirect('data_aset1/index');
	}

	//public function Submit_Aset()
	//{
	//	
	//	$status = "";
    //    $msg = "";
	//	  
	//	if (empty($_POST['idAset'])){
	//		$status = "error";
	//		$msg = "Lengkapi Data";
	//	}
		
	//	if ($status != "error")
	//	{
	//		try{
	//			$userId= $this->session->userdata('id_user');
	//			$this->master_data_aset->Save($_POST['idAset'],$_POST['nomorSeri'],$_POST['jenisAset'],$_POST['statusAset'],$_POST['jumlah']);
	//			$this->master_data_aset_masuk->Save($userId);
	//			$this->master_data_detail_aset_masuk->Save($_POST['idAset']);
	//			$status = "success";
    //            $msg = 'berhasil';
    //            
	//		}catch (Exception $e){
	//			$status = "error";
    //            $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
	//		}
	//	}
	//	echo json_encode(array('status' => $status, 'msg' => $msg));
	//}

}
