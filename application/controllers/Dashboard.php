<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
                $this->load->view('include/html_header');
                $this->load->view('include/menu');
		$this->load->view('dashboard');
                $this->load->view('include/html_footer');
	}
}
