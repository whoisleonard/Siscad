<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	
	public function BuscaTodos()
	{
               
            return $this->db->get("login")->result_array();
               
	}
        
        public function Salvar($data)
	{
               
            return $this->db->insert('login', $data);
              
               
	}
        
        public function deletar_funcionario($id)
        {
            $this->db->where('cod_as_usuaria', $id);
            $this->db->delete('login');
            return true;
        }

        public function buscaPorEmailSenha($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("login")->row_array();
        return $usuario;
    }
   
        public function update()
        {
              $id =  $this->input->post("id");
            $usuario['nome'] = $this->input->post('nome');
             $usuario['cpf'] = $this->input->post('cpf');
              $usuario['endereco'] = $this->input->post('endereco');
              $usuario['email'] = $this->input->post('email');
               $usuario['senha'] = md5($this->input->post('senha'));
                $usuario['status'] = $this->input->post('status');
                 $usuario['nivel_acesso'] = $this->input->post('nivel');
                  $usuario['funcao'] = $this->input->post('funcao');

        $this->db->where("cod_as_usuaria", $id);
        $this->db-update("login", $usuario);
        }
     
}
