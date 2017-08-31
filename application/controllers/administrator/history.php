<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class History extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		 $this->load->helper(array('form', 'url'));
		 $this->load->model('Administrator/System/Core');
		 $this->load->model('administrator/master_data_aset');
		 $this->load->model('administrator/master_data_jenis');
		 $this->load->model('administrator/master_data_aset_keluar');
		 $this->load->model('Administrator/master_data_aset_pinjam'); 
		 $this->load->model('Administrator/master_data_aset_kembali');
		 $this->load->model('administrator/master_data_aset_masuk');

    }
	
	public function index()
	{				
				
		if ($this->session->userdata('validated') == TRUE)
		{
			$module = $this->uri->segment(2);
			$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
			$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
			$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['asetmasuk'] = $this->master_data_aset_masuk->getHistoryAsetMasuk();
			$data['asetpinjam'] = $this->master_data_aset_pinjam->getHistoryAsetPinjam();
			$data['asetkembali'] = $this->master_data_aset_kembali->getHistoryAsetKembali();
			$data['asetkeluar'] = $this->master_data_aset_keluar->getHistoryAsetKeluar();
			$data['content'] = 'administrator/History/History';
		    $this->load->view('template_admin/v_template', $data);
		
			
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}
	

}