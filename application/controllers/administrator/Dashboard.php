<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		 $this->load->helper(array('form', 'url'));
		 $this->load->model('Administrator/System/Core');
		 $this->load->model('administrator/master_data_aset');
		// $this->load->model('Administrator/Master_Data_Jabatan');
		// $this->load->model('Administrator/Master_Data_Departemen'); 
		// $this->load->model('Administrator/Master_Data_Golongan');  
		// $this->load->model('Administrator/Master_Data_Pendidikan');    
		// $this->load->model('Administrator/Master_Data_Institusi'); 
		// $this->load->model('Administrator/Master_Data_User');  
    }
	
	public function index()
	{				
				
		if ($this->session->userdata('validated') == TRUE)
		{
			$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['elektronik'] = $this->master_data_aset->Get_Data_Elektronik();
			$data['elektronikpinjam'] = $this->master_data_aset->Get_Data_Elektronik_Pinjam();
			$data['perkakas'] = $this->master_data_aset->Get_Data_Perkakas();
			$data['perkakaspinjam'] = $this->master_data_aset->Get_Data_Perkakas_Pinjam();
			$data['keluar'] = $this->master_data_aset->Get_Data_Keluar();
			$data['content'] = 'administrator/dashboard/dashboard';
		    $this->load->view('template_admin/v_template', $data);
		
			
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}
	
}