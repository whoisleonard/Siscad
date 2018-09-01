<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	
        
        public function cadastro()
	{
                $this->load->view('include/html_header');
                $this->load->view('include/menu');
		$this->load->view('cadastro_usuario');
                $this->load->view('include/html_footer');
	}
        
        public function cadastrar()
        {
            $data['nome'] = $this->input->post('nome');
             $data['cpf'] = $this->input->post('cpf');
              $data['endereco'] = $this->input->post('endereco');
              $data['email'] = $this->input->post('email');
               $data['senha'] = md5($this->input->post('senha'));
                $data['status'] = $this->input->post('status');
                 $data['nivel'] = $this->input->post('nivel');
               
                 if($this->db->insert('usuarios', $data))
                 {
                     redirect('usuarios/msg_sucess');
                 }
        }
        
}
