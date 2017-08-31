<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();
class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
			
    }
	
	public function index()
	{
		if ($this->session->userdata('validated') == TRUE)
		{
			$data['content'] = 'Administrator/Dashboard/Dashboard';
		    $this->load->view('template_admin/v_template', $data);
		} 
		else {
			$this->load->view('Administrator/Login/Login');
		}
	}
	
	public function Login_Check()
	{	
        $this->load->model('user/m_user');
        $result = $this->m_user->validate_login();
		
        if(! $result){
			print "<script type=\"text/javascript\">alert('Username or password is incorrect!');</script>";
			$this->load->view('Administrator/Login/Login');
        }else{
            if ($this->session->userdata('validated') == TRUE)
			{
				$data['content'] = 'Administrator/Dashboard/Dashboard';
		 		$this->load->view('template_admin/v_template', $data);
		    	redirect('Administrator/Dashboard/', 'refresh');
			}

			else {
				$this->load->view('Administrator/Login/Login');
				redirect('Administrator/Login/Login', 'refresh');
				// $data['content'] = 'Administrator/Dashboard/Dashboard';
		 	// 	$this->load->view('template_admin/v_template', $data);
			}
            /* $data['content'] = 'Administrator/Dashboard/Dashboard';
		    $this->load->view('template_admin/v_template', $data); */
			
			// redirect('Administrator/Dashboard/Dashboard', 'refresh');
			
			
        }        
  
	}
	
	public function logout()
	{	
	   $this->session->unset_userdata('validated');
	   session_destroy();
	   redirect('', 'refresh');
	}
}