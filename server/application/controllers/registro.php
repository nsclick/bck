<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class Registro extends CI_Controller {

	var $title = 'Registro';
	var $registro_params = array();

	
	public function index() {
		$this->render();
	}
	
	private function render(){
		$this->template->write('title', $this->title);

		$this->template->add_js('assets/js/moment-2.4.0.js');
		$this->template->add_js('assets/third_party/bootstrap/js/bootstrap-datetimepicker.min.js');
		$this->template->add_js('assets/js/jqBootstrapValidation.js');
		
		$this->template->add_css('assets/third_party/bootstrap/css/bootstrap-datetimepicker.min.css');
		
		$this->template->write_view('header', 'templates/header', $this->registro_params, TRUE);
		
		$this->template->write_view('content', 'pages/registro', $this->registro_params, TRUE);

		$this->template->render();	

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */