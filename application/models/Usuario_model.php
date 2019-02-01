<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function BuscaTodos() {
        
        
        $this->db->where('status', 1);
        $this->db->from('login');
        
       $data = $this->db->get()->result_array();

        return  $data ;
    }
//==========================================================================================//
    public function BuscaFuncio() {
        
        
        $this->db->where('status', 2);
        $this->db->from('login');
        
       $data = $this->db->get()->result_array();

        return  $data ;
    }
 //=================================================================================================//   
    public function Salvar($usuario) {

        return $this->db->insert('login', $usuario);
    }
//============================================================================================//
    public function arquivar_funcio($id, $data) {
        $this->db->where('cod_login', $id);
       $dados =  $this->db->update('login', $data);
        return  $dados;
    }
//===========================================================================================//
    public function buscaPorEmailSenha($email, $senha) {
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("login")->row_array();
        return $usuario;
        
    }
  //============================================================================================//  
     public function get_user_id($id){
       $this->db->where('cod_login', $id);
        return $this->db->get('login')->result();
    }
//============================================================================================//
    public function get_senha($id) {
        $this->db->select('senha');
        $this->db->where('cod_login', $id);
        return $this->db->get('login')->result();
    }
  //======================================================================================//  
     public function update($id,$data){
        $this->db->where('cod_login', $id);
        return $this->db->update('login', $data);
    }

  //=====================================================================================//

  public function ValidarEmail($email){
      
      $this->db->where('email', $email);
       return $this->db->get('login')->row_array();
  }
    
    
}
