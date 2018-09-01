<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screening extends CI_Controller {

	
	public function index()
	{
                $this->load->view('include/html_header');
                $this->load->view('include/menu');
		$this->load->view('screen_rotina');
                $this->load->view('include/html_footer');
	}
}
