<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Data_Aset_Pinjam extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		
		$this->load->model('Administrator/master_data_aset'); 
		$this->load->model('Administrator/System/Core'); 
		$this->load->model('Administrator/master_data_aset_pinjam'); 

    }
	
	public function index()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{	
			$module = $this->uri->segment(2);
			$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
			$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
			$data['parameter'] = $this->Core->Get_Parameter($module);
			$data['aset_pinjam'] = $this->master_data_aset_pinjam->getAset();
			$data['id_aset_pinjam'] = $this->master_data_aset_pinjam->getId();
			$data['content'] = 'administrator/aset_pinjam/aset_pinjam';
		    $this->load->view('template_admin/v_template', $data);	
			
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}

	public function Submit()
	{
		 $status = "";
            $msg = "";
		  
		if (empty($_POST['peminjam']) || empty($_POST['keterangan']) || empty($_POST['ids'])){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
		if ($status != "error")
		{
			try{
				          
            	$this->master_data_aset_pinjam->simpan_head($_POST['kodeAsetPinjam'],$_POST['peminjam'],$_POST['keterangan']);
            	$this->master_data_aset_pinjam->simpan_detail($_POST['kodeAsetPinjam'],$_POST['ids']);
            	$this->master_data_aset_pinjam->update_status($_POST['ids']);
				$status = "success";
                $msg = "Data Berhasil Di Simpan";
                
			}catch (Exception $e){
				$status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
			}
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));

	}

	
}