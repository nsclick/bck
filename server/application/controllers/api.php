<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class Api extends CI_Controller {


	function __construct() {
		// Call the Model constructor
		parent :: __construct();
		
		$this->load->model('logs');
	}
	
	public function register() {
				
		//Get the web params
		$data = array(
			'proyecto_clave' 	=> $this->input->post('key'),
			'tamano_archivos'	=> $this->input->post('files_size'),
			'tamano_db'		=> $this->input->post('db_size'),
			'tiempo_ejec'		=> $this->input->post('elapsed')
		);
		
		$result = $this->logs->insert($data); 
		
		die(1);				
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */