<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Mulher extends CI_Controller {

	
	public function index()
	{
                $this->load->view('include/html_header');
                $this->load->view('include/menu');
		$this->load->view('cadastrar_mulher');
                $this->load->view('include/html_footer');
	}
}
