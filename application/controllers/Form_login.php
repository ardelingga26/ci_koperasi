<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

}

/* End of file Form_login.php */
/* Location: ./application/controllers/Form_login.php */