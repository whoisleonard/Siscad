<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

    public function index($indice = null) {
        $this->verificarSessao();
        $this->load->model("Usuario_model");
        $lista = $this->Usuario_model->BuscaTodos();
        $dados = array("login" => $lista);
        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        if ($indice == 1) {
            $data['msg'] = "Usuario cadastrado com sucesso.";
            $this->load->view('mensagem/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar o usuário.";
            $this->load->view('mensagem/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Usuario excluído com sucesso.";
            $this->load->view('mensagem/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir o usuário.";
            $this->load->view('mensagem/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Usuario atualizado com sucesso.";
            $this->load->view('mensagem/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar o usuário.";
            $this->load->view('mensagem/msg_erro', $data);
        }
        $this->load->view("listar_funcionario", $dados);
        $this->load->view('include/footer_lista');
    }

    public function cadastro() {
        $this->verificarSessao();
        $this->load->view('include/head_user');
        $this->load->view('include/menu');
        $this->load->view('cadastrar_usuario');
        $this->load->view('include/footer_user');
    }

    public function cadastrar() {
        $this->verificarSessao();
        $usuario['nome'] = $this->input->post('nome');
        $usuario['cpf'] = $this->input->post('cpf');
        $usuario['endereco'] = $this->input->post('endereco');
        $usuario['email'] = $this->input->post('email');
        $usuario['senha'] = md5($this->input->post('senha'));
        $usuario['status'] = $this->input->post('status');
        $usuario['nivel_acesso'] = $this->input->post('nivel');
        $usuario['funcao'] = $this->input->post('funcao');

        $this->load->model("Usuario_model");

        if ($this->Usuario_model->Salvar($usuario)) {

            redirect('Usuarios/index/1');
        } else {
            redirect('Usuarios/index/2');
        }
    }

    public function excluir($id) {
        $this->verificarSessao();
        $this->load->model("Usuario_model");
        if ($this->Usuario_model->deletar_funcionario($id)) {
            redirect('Usuarios/index/3');
        } else {
            redirect('Usuarios/index/4');
        }
    }
   

    public function editar($id = null) {

         $this->verificarSessao();
         $this->db->where('cod_as_usuaria', $id);
         $data['login'] = $this->db->get('login')->result();
      

        $this->load->view('include/head_user');
        $this->load->view('include/menu');
        $this->load->view('editar_funcionario', $data);
        $this->load->view('include/footer_user');
    }

    public function editar_save() {

        {
                $this->verificarSessao();
                
                $id = $this->input->post('cod_as_usuaria');
             
                $data['nome'] = $this->input->post('nome');                               
                $data['cpf'] = $this->input->post('cpf');  
                $data['endereco'] = $this->input->post('endereco');     
                $data['email'] = $this->input->post('email');  
                $data['status'] = $this->input->post('status'); 
                $data['nivel_acesso'] = $this->input->post('nivel');
                $data['funcao'] = $this->input->post('funcao');  
                
                $this->db->where('cod_as_usuaria',$id);
                if($this->db->update('login',$data)){
                    redirect('Usuarios/index/5');
                }else{
                    redirect('Usuarios/index/6');
                }
        }
    }
    public function salvar_senha(){
            
            $this->verificarSessao();
            $id = $this->input->post('cod_as_usuaria');
            
            $senha_antiga = md5($this->input->post('senha_antiga'));
            $senha_nova = md5($this->input->post('senha_nova'));
           
            $this->db->select('senha');
            $this->db->where('cod_as_usuaria', $id);
            $data['senha'] = $this->db->get('login')->result();
            $dados['senha'] = $senha_nova;
            
            if($data['senha'][0]-> senha == $senha_antiga) {
                $this->db->where('cod_as_usuaria', $id);
                $this->db->update('login', $dados);
                redirect('login/editar/' , $id);
            }else{
                redirect('login/editar/', $id);
            }
        }

}
