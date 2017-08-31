<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_Data_User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
function getUser(){
    $query = $this->db->query("select * from User order by ID_USER DESC");
    return $query->result();
  }



 function Get_Data_User($idUser)
	{	
		$query = $this->db->query("select * from user where ID_USER = ".$idUser);
		return $query->result(); 
	}

      
    public function Save($idUser,$nama,$userName,$password,$aktif){
	
		$data = array(  
		  'ID_USER'=>$idUser, 
		  'NAMA'=>$nama,
		  'USERNAME'=>$userName,
		  'PASSWORD'=>md5($password),
		  'AKTIF'=>$aktif
		);  
		$this->db->insert('user',$data);
    }	

	public function Update(){
		$idUser = $this->input->post('idUser');  
		$nama = $this->input->post('nama');    
		$userName = $this->input->post('username');
		$password = $this->input->post('password');   
		$aktif = $this->input->post('status');
		$data = array(
		 'NAMA'=>$nama,
		 'USERNAME'=>$userName,
		 'PASSWORD'=>md5($password),
		 'AKTIF'=>$aktif
		); 
		$this->db->where('ID_USER', $idUser);
		$result = $this->db->update('user', $data);
    }

	
	function getId()
	{	
		$query = $this->db->query("SELECT max(ID_User)+1 as idUser FROM User");
		if (is_null($query)){
			$query = "1";
		}
		return $query->result(); 
	}

	function Delete($idUser)
	{	
		$this->db->where('ID_USER', $idUser);
		$this->db->delete('user');
	}

}
?>