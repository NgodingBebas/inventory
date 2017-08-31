<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Agung Resman
* Description: Login model class
*/
class M_user extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate_login(){

        $username = $this->security->xss_clean($this->input->post('user'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
  //       $this->db->where('USERNAME', $username);
        // $this->db->where('PASSWORD', MD5($password));
        // $this->db->where('AKTIF', 'Y');

        // $pass = MD5($password);

  //       $query = $this->db->get('user');

        $query = $this->db->query("SELECT user.ID_USER, user.USERNAME, user.NAMA
        FROM user WHERE user.USERNAME = "."'".$username."'"." and user.PASSWORD = md5('".$password."') and user.AKTIF = 'Y'");
    
    // return $query->result();


        if($query->num_rows() == 1)
        {
            $row = $query->row();
            $data = array(
                    'id_user' => $row->ID_USER,
                    'username' => $row->USERNAME,
                    'nama'=> $row->NAMA,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
    
}
?>