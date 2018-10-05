<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

		public function verificarSessao(){
            if($this->session->userdata('logado')== false){
                 redirect('Login');
                
            }
            
        }
	public function Tela()
	{
                $this->verificarSessao();
                $this->load->view('include/head_tela');
                $this->load->view('include/menu');
		$this->load->view('dashboard');
                $this->load->view('include/footer');
               
	}
}
