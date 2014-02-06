<?php
class Logs extends CI_Model {
	function __construct() {
		// Call the Model constructor
		parent :: __construct();
	}
	
	function insert($data){
		
		$data['fecha'] = date('Y-m-d H:i:s');
		
		$this->db->insert('log', $data); 
		
	}
	
}
?>