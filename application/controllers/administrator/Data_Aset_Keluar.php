<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Data_Aset_Keluar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('administrator/System/Core'); 
		$this->load->model('administrator/master_data_jenis');
		$this->load->model('administrator/master_data_aset_keluar');

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
			$data['query1']= $this->master_data_aset_keluar->getAset();
			$data['query3']= $this->master_data_aset_keluar->getriwayatAset();
			$data['query2']= $this->master_data_aset_keluar->getId();
			$data['content'] = 'administrator/asetkeluar/aset';
		    $this->load->view('template_admin/v_template', $data);	
			
		} else {
			$this->load->view('administrator/login/Login');
		}
	}

	public function Simpan(){
                      
            $status = "";
            $msg = "";
		  
		if (empty($_POST['kodeKeluar']) || empty($_POST['ids'])){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
		if ($status != "error")
		{
			try{
				          
            	$this->master_data_aset_keluar->simpan_head($_POST['kodeKeluar'],$_POST['keterangan'],$_POST['idUser']);
            	$this->master_data_aset_keluar->simpan_detail($_POST['kodeKeluar'],$_POST['ids']);
            	$this->master_data_aset_keluar->update_status($_POST['ids']);
				$status = "success";
                $msg = "Data Berhasil Di Simpan";
                
			}catch (Exception $e){
				$status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
			}
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
		$data['aset']=$this->master_data_aset_keluar->get_report_aset();
		$this->load->view('administrator/asetkeluar/pdf',$data);
	}

 
	
}