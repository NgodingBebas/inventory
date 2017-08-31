<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Data_User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('administrator/system/Core'); 
		$this->load->model('administrator/master_data_user');

    }
	
	public function index()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{	
			$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['query_getUser']= $this->master_data_user->getUser();
			$data['content'] = 'administrator/user/user';
		    $this->load->view('template_admin/v_template', $data);	
			
		} else {
			$this->load->view('administrator/login/Login');
		}
	}

 

	public function Add_User()
	{				
		if ($this->session->userdata('validated') == TRUE)
		{
			$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

			$data['query_idUser'] = $this->master_data_user->getId();
			$data['content'] = 'administrator/User/Add_User';
		    $this->load->view('template_admin/v_template', $data);	

		} else {
			$this->load->view('administrator/login/login');
		}
	}
	
	public function Submit()
	{
		$status = "";
        $msg = "";
     
		  
		if (empty($_POST['idUser']) || empty($_POST['nama']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['status']) ){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
		
		if ($status != "error")
		{
			try{
				
				$this->master_data_user->Save($_POST['idUser'],$_POST['nama'],$_POST['username'],$_POST['password'],$_POST['status']);
				$status = "success";
                $msg = "Data Berhasil Di Simpan";
                
			}catch (Exception $e){
				$status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi".$e."dsad";
			}
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}

public function Edit_User() 
	{				
		if ($this->session->userdata('validated') == TRUE)
		{ 
				$module = $this->uri->segment(2);
				$data['css_plugin'] = $this->Core->Get_CSS_Plugin($module);
				$data['js_plugin'] = $this->Core->Get_JS_Plugin($module);
				$data['parameter'] = $this->Core->Get_Parameter($module);

				$idUser = $this->uri->segment(4);
				$data['queryUser'] = $this->master_data_user->Get_Data_User($idUser); //Detail Update
				$data['content'] = 'administrator/User/Edit_User';
				 $this->load->view('template_admin/v_template', $data);	
		} else {
			$this->load->view('Administrator/Login/Login');
		}
	}


public function Update_User(){
		if ($this->session->userdata('validated') == TRUE)
		{ 
			
				$status = "";
				$msg = "";
				
	   if (empty($_POST['nama']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['status']) ){
			$status = "error";
			$msg = "Lengkapi Data";
		}
		
				
				if ($status != "error")
				{
					try{
						$this->master_data_user->Update();
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

	public function Delete_User(){
		$status = "";
        $msg = "";
		$idUser="";
		
		try{
				$idUser = $_POST['id'];
				if ($idUser <> $this->session->userdata('id_user')){
						$this->master_data_user->Delete($idUser);
						$status = "success";
		                $msg = "Data Berhasil Di Hapus";
				}
				else{
					$status = "error";
		            $msg = "Data user sedang digunakan";
				}
			
		}catch (Exception $e){
                $status = "error";
                $msg = "System Sedang Dalam Masalah, Silahkan Coba Lagi";
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));	
	}
	
}