<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function user_login($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('email', $user);
		$this->db->where('senha', $pass);
		if($query = $this->db->get())
		{
			return $query->row_array();
		} else {
			return false;
		}
	}
//======================================================================================//
    public function gerarChaveAcesso($email){

        $this->db->where('email', $email);
        $data = $this->db->get('login')->result();
  
       
            if (count($data) == 1) {
            $dados['cod_login'] = $data[0]->cod_login;
            $dados['senha'] = $data[0]->senha;
            
          $chave = md5($dados['cod_login'].$dados['senha']);
          return $chave;
                  
        }
}

//==========================================================================================//
public function checkChave($email, $chave){

        $this->db->where('email', $email);
        $data = $this->db->get('login')->result();
  
       
            if (count($data) == 1) {
            $dados['cod_login'] = $data[0]->cod_login;
            $dados['senha'] = $data[0]->senha;
            
          $chavecorreta = md5($dados['cod_login'].$dados['senha']);
         if($chave == $chavecorreta){
            
             return $data;
         }
         
                  
        }
}
//===================================================================================//
public function Set_novaSenha($senha, $id){

        $this->db->where('cod_login', $id);
         $this->db->from('login');
    $data =  $this->db->update("senha",  md5($senha['senha']));
         return $data;
  
     
           
}





         }
