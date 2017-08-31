<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Data_Aset_Kembali extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		
		$this->load->model('Administrator/master_data_aset'); 
		$this->load->model('Administrator/System/Core'); 
		$this->load->model('Administrator/master_data_aset_kembali'); 

    }
	
	public function index()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{	
			$module = $this->uri->segment(2);
			$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
			$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
			$data['parameter'] = $this->Core->Get_Parameter($module);
			$data['aset_pinjam'] = $this->master_data_aset_kembali->getPinjam();
			$data['content'] = 'administrator/aset_kembali/aset_kembali';
		    $this->load->view('template_admin/v_template', $data);	
			
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}

	public function Submit()
	{
		 $status = "";
            $msg = "";
		  
		if (empty($_POST['kodeAsetKembali']) || empty($_POST['kodepinjam']) || empty($_POST['ids'])){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
		else if ($status != "error")
		{
			try{
				          
            	$this->master_data_aset_kembali->simpan_head($_POST['kodeAsetKembali'],$_POST['kodepinjam']);
            	$this->master_data_aset_kembali->simpan_detail($_POST['kodeAsetKembali'],$_POST['ids']);
            	$this->master_data_aset_kembali->update_status($_POST['ids']);
            	$this->master_data_aset_kembali->update_status_pinjam($_POST['kodepinjam']);
				$status = "success";
                $msg = "Data Berhasil Di Simpan";
                
			}catch (Exception $e){
				$status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
			}
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));

	}

public function Edit_Aset_Kembali() 
	{				
		if ($this->session->userdata('validated') == TRUE)
		{ 
				$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

				$idPinjam = $this->uri->segment(4);
				$data['id_aset_kembali'] = $this->master_data_aset_kembali->getId();
				$data['querygetAset'] = $this->master_data_aset_kembali->getAset($idPinjam);
				$data['getHead'] = $this->master_data_aset_kembali->getHead($idPinjam); //Detail Update
				$data['content'] = 'administrator/aset_kembali/edit_aset_kembali';
				 $this->load->view('template_admin/v_template', $data);	
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}

	
}