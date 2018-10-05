<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Mulher extends CI_Controller {
    
    
	public function verificarSessao(){
            if($this->session->userdata('logado')== false){
                 redirect('Login');
                
            }
            
        }
	
	public function Cadastro()
	{
                $this->verificarSessao();
                $this->load->view('include/head_cadastro');
                $this->load->view('include/menu');
	        $this->load->view('cadastrar_mulher');
                $this->load->view('include/footer_cadastro');
               
		
                
	}
        public function cadastrar_mulher(){
            
        }
}
