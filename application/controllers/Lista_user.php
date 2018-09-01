<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_user extends CI_Controller {

	
	public function index()
	{
                $this->load->view('include/html_header');
                $this->load->view('include/menu');
		$this->load->view('listar_usuarios');
                $this->load->view('include/html_footer');
	}
}
