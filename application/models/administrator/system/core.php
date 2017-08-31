<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Agung Resman
* Create Date : 04/11/2014
* Description: Managing Core System ( CSS, Javascript, And Many More)
* Update By :
* Update Date:
*/
class Core extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	function Get_CSS_Plugin($module) // Get CSS
	{	
		$query = $this->db->query("SELECT * FROM core_sys_css_plugin WHERE MODULE_ID ='".$module."'");
		return $query->result(); 
	}
	
	function Get_JS_Plugin($module) // Get JS
	{	
		$query = $this->db->query("SELECT * FROM core_sys_js_plugin WHERE MODULE_ID ='".$module."'");
		return $query->result(); 
	}
	
	function Get_Parameter($module) // Get JS
	{	
		$query = $this->db->query("SELECT * FROM core_sys_parameter WHERE MODULE_ID ='".$module."'");
		return $query->result(); 
	}
 
}

?>