<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

//==========================================================================================
    public function index() {


        $this->load->view('login');
    }

//=========================================================================================
    public function autenticar() {
      
        $email = $this->input->post('email');
        $senha = md5($this->input->post('senha'));
        
        $this->db->where('senha', $senha);
        $this->db->where('email', $email);
        $this->db->where('status', 1);
        $data = $this->db->get('login')->result();
        if (count($data) == 1) {
            $dados['nome'] = $data[0]->nome;
            $dados['cod_login'] = $data[0]->cod_login;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);

          
            redirect('Dashboard/tela');
        } else {
            $this->session->set_flashdata('error', 'Usuário ou senha invalido!.');
            redirect('Login');
        }
    }

//======================================================================================

    public function logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }
//==========================================================================================//
    public function esqueci_senha(){
        
         $this->load->view('recup_senha/esqueci_senha');
    }
 //=============================================================================================//
      public function envia_nova_senha(){
        
         $this->load->model('Login_model');
    $email =  $this->input->post('email'); 
    
    $result['chave'] = $this->Login_model->gerarChaveAcesso($email);
    
    if( $result['chave']){
        
       
        $this->load->view('recup_senha/nova_senha', $result);
        
    }else{
        $this->session->set_flashdata('error', 'Usuário Não encontrado!.');
         $this->load->view('recup_senha/nova_senha', $result);
    }
      }
    
    public function alterar_senha()
            {
    
        
         $this->load->view('recup_senha/altera_senha');
    }
 //==============================================================================================//   
      public function set_novaSenha()
            {
    
         $this->load->model('Login_model');
         
    $email =  $this->input->post('email'); 
    $senha['senha'] =  $this->input->post('senha');
    $chave =  $this->input->post('chave');
    $id = $this->input->post('id');
    
    $result = $this->Login_model->checkChave($id,$email, $chave);
    
    if($result){
        
       $alteraSenha = $this->Login_model->Set_novaSenha($senha,$result);     
       $this->session->set_flashdata('sucess', 'Senha Alterada com sucesso!.');
       $this->load->view('recup_senha/senha_salva');
    }else{
        $this->session->set_flashdata('error', 'Senha Alterada com sucesso!.');
         $this->load->view('recup_senha/senha_salva');
    }
      }
    }
    

