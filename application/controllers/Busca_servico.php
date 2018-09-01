<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busca_servico extends CI_Controller {

	
	public function index()
	{
                $this->load->view('include/html_header');
                $this->load->view('include/menu');
		$this->load->view('busca_servico');
                $this->load->view('include/html_footer');
	}
}
