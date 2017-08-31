<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Data_Aset extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('administrator/System/Core'); 
		$this->load->model('administrator/master_data_jenis');
		$this->load->model('administrator/master_data_aset');
		$this->load->model('administrator/master_data_aset_masuk');
		$this->load->model('administrator/master_data_detail_aset_masuk');


    }
	
	public function index()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{	
			$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['query'] = $this->master_data_jenis->Get_Data();
			$data['query1']= $this->master_data_aset->getAset();
			$data['content'] = 'administrator/aset/aset';
		    $this->load->view('template_admin/v_template', $data);	
			
		} else {
			$this->load->view('administrator/login/Login');
		}
	}


	public function Add_Jenis()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{
			$module = $this->uri->segment(2);
			$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
			$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
			$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['IDJenis'] = $this->master_data_jenis->getId();
			$data['content'] = 'administrator/aset/add_jenis';
		    $this->load->view('template_admin/v_template', $data);	

		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}

	public function Add_Aset()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{
			$module = $this->uri->segment(2);
			$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
			$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
			$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['IDAset'] = $this->master_data_aset->getId();
			$data['Jenis'] = $this->master_data_jenis->Get_Jenis_Aset();
			$data['content'] = 'administrator/aset/add_aset';
		    $this->load->view('template_admin/v_template', $data);	

		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}
	
	public function Submit_Jenis()
	{
		$status = "";
        $msg = "";
		  
		if (empty($_POST['namaJenis'])){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
		if ($status != "error")
		{
			try{
				
				$this->master_data_jenis->Save($_POST['namaJenis'],$_POST['tipe']);
				$status = "success";
                $msg = "Data Berhasil Di Simpan";
                
			}catch (Exception $e){
				$status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
			}
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}

	public function Submit_Aset()
	{
		
		$status = "";
        $msg = "";
		  
		if (empty($_POST['idAset'])){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
		if ($status != "error")
		{
			try{
				$userId= $this->session->userdata('id_user');
				$this->master_data_aset->Save($_POST['idAset'],$_POST['nomorSeri'],$_POST['jenisAset'],$_POST['statusAset']);
				$this->master_data_aset_masuk->Save($userId);
				$this->master_data_detail_aset_masuk->Save($_POST['idAset']);
				$status = "success";
                $msg = 'berhasil'.$_POST['nomorSeri'] .' '. $_POST['jumlah'];
                
			}catch (Exception $e){
				$status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
			}
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}

public function Edit_Jenis() 
	{				
		if ($this->session->userdata('validated') == TRUE)
		{ 
				$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

				$idJenis = $this->uri->segment(4);
				$data['Jenis'] = $this->master_data_jenis->Get_Jenis($idJenis); //Detail Update
				$data['content'] = 'administrator/aset/edit_jenis';
				 $this->load->view('template_admin/v_template', $data);	
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}


public function Edit_Aset() 
	{				
		if ($this->session->userdata('validated') == TRUE)
		{ 
				$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

				$idAset = $this->uri->segment(4);
				$data['Jenis'] = $this->master_data_jenis->Get_Jenis_2($idAset);
				$data['Aset'] = $this->master_data_aset->Get_Data_Aset($idAset); //Detail Update
				$data['content'] = 'administrator/aset/edit_aset';
				 $this->load->view('template_admin/v_template', $data);	
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}
	

public function Update_Jenis(){
		if ($this->session->userdata('validated') == TRUE)
		{ 
			
				$status = "";
				$msg = "";
				
				if (empty($_POST['namaJenis'])){
					$status = "error";
					$msg = "Lengkapi Data";
				}
				
				if ($status != "error")
				{
					try{
						$this->master_data_jenis->Update();
						$status = "success";
						$msg = "Data Berhasil Di Simpan";
					}catch (Exception $e){
						$status = "error";
						$msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi";
					}
				
				}
				echo json_encode(array('status' => $status, 'msg' => $msg));
		} else {
			$this->load->view('administrator/Login/Login');
		}
	}


	public function Update_Aset(){
		if ($this->session->userdata('validated') == TRUE)
		{ 
			
				$status = "";
				$msg = "";
				
				if (empty($_POST['nomorSeri'])){
					$status = "error";
					$msg = "Lengkapi Data";
				}
				
				if ($status != "error")
				{
					try{
						$this->master_data_aset->Update();
						$status = "success";
						$msg = "Data Berhasil Di Simpan";
					}catch (Exception $e){
						$status = "error";
						$msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi";
					}
				
				}
				echo json_encode(array('status' => $status, 'msg' => $msg));
		} else {
			$this->load->view('administrator/Login/Login');
		}
	}


	
	public function Delete_Jenis(){
		$status = "";
        $msg = "";
		$idJenis="";
		
		try{
				$idJenis = $_POST['id'];
				$this->master_data_jenis->Delete($idJenis);
				$status = "success";
                $msg = "Data Berhasil Di Hapus";
		}catch (Exception $e){
                $status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi";
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));	
	}
	

	public function Delete_Aset(){
		$status = "";
        $msg = "";
		$idAset="";
		
		try{
				$idAset = $_POST['id'];
				$this->master_data_aset->Delete($idAset);
				$status = "success";
                $msg = "Data Berhasil Di Hapus";
		}catch (Exception $e){
                $status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi";
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));	
	}

	public function pdf()
	{
		$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

		$this->load->library('mpdf');
		$data['aset']=$this->master_data_aset->get_report_aset();
		$this->load->view('administrator/aset/pdf',$data);
	}
}