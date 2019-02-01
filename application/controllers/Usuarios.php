<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

//=================================================================================//
    public function index() {
        $this->verificarSessao();
        $this->load->model("Usuario_model");
        $lista = $this->Usuario_model->BuscaTodos();
        $dados = array("login" => $lista);
        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        $this->load->view("listar_funcionario", $dados);
        $this->load->view('include/footer_lista');
    }

//================================================================================//
    public function cadastro() {
        $this->verificarSessao();
        $this->load->view('include/head_user');
        $this->load->view('include/menu');
        $this->load->view('cadastrar_usuario');
        $this->load->view('include/footer_user');
    }

//====================================================================================//
    public function cadastrar() {
       
        $this->verificarSessao();
        $usuario['nome'] = $this->input->post('nome');
        $usuario['cpf'] = $this->input->post('cpf');
        $usuario['email'] = $this->input->post('email');
        $usuario['senha'] = md5($this->input->post('senha'));
        $usuario['data_nascimento'] = $this->input->post('nascimento');
        $usuario['status'] = $this->input->post('status');
        $usuario['funcao'] = $this->input->post('funcao');

        $this->load->model("Usuario_model");
        

        if ($this->Usuario_model->Salvar($usuario)) {
            $this->session->set_flashdata('sucess', 'Funcionário Cadastrado com Sucesso!.');
            redirect('Usuarios');
        } else {
            $this->session->set_flashdata('error', 'Funcionário Não Cadastrado!.');
            $this->load->view('include/head_user');
            $this->load->view('include/menu');
            $this->load->view('cadastrar_usuario');
            $this->load->view('include/footer_user');
        }
    }

//===========================================================================================//
    public function arquiva_funcionario($id) {
        $this->verificarSessao();
        $this->load->model("Usuario_model");
        
         $status = 2;
        $data['status'] = $status;
        
        if ($this->Usuario_model->arquivar_funcio($id,$data)) {
            $this->session->set_flashdata('sucess', 'Funcionário arquivado com Sucesso!.');
            redirect('Usuarios');
        } else {
            $this->session->set_flashdata('error', 'Funcionário Não arquivado!.');
            redirect('Usuarios');
        }
    }

//===============================================================================================//
    public function editar($id = null) {

        $this->verificarSessao();
        $this->load->model('Usuario_model');

        $data['login'] = $this->Usuario_model->get_user_id($id);

        $this->load->view('include/head_user');
        $this->load->view('include/menu');
        $this->load->view('editar_funcionario', $data);
        $this->load->view('include/footer_user');
    }

//======================================================================================//
    public function editar_save() { {
            $this->verificarSessao();

            $this->load->model('Usuario_model');
            $id = $this->input->post('cod_login');

            $data['nome'] = $this->input->post('nome');
            $data['cpf'] = $this->input->post('cpf');
            $data['email'] = $this->input->post('email');
            $data['status'] = $this->input->post('status');
            $data['funcao'] = $this->input->post('funcao');

            if ($this->Usuario_model->update($id, $data)) {

                $this->session->set_flashdata('sucess', 'Funcionário Atualizado com Sucesso!.');
                redirect('Usuarios');
            } else {
                $this->session->set_flashdata('error', 'Funcionário Não Atualizado!.');
                redirect('Usuarios');
            }
        }
    }

//==========================================================================================//
    public function salvar_senha() {

        $this->verificarSessao();

        $this->load->model('Usuario_model');
        $id = $this->input->post('cod_login');

        $senha_antiga = md5($this->input->post('senha_antiga'));
        $senha_nova = md5($this->input->post('senha_nova'));

        $data['senha'] = $this->Usuario_model->get_senha($id);
        $dados['senha'] = $senha_nova;

        if ($data['senha'][0]->senha == $senha_antiga) {
            $this->db->where('cod_login', $id);
            $this->db->update('login', $dados);
            redirect('Usuarios/editar/' . $id);
        } else {
            redirect('Usuarios/editar/' . $id);
        }
    }

//========================================================================================//
    public function pesquisar() {

        $this->verificarSessao();

        $termo = $this->input->post('namecp');
        $this->db->where('nome', $termo);
        $this->db->or_where('cpf', $termo);
        $data['usuario'] = $this->db->get('login')->result();

        if ($data['usuario']) {
            $this->load->view('include/head_viewf');
            $this->load->view('include/menu');
            $this->load->view('view_pesquisaf', $data);
            $this->load->view('include/footer_viewf');
        } else {

            $this->session->set_flashdata('error', 'Funcionário não encontrado!.');

            $this->load->view('include/head_viewf');
            $this->load->view('include/menu');
            $this->load->view('view_pesquisaf', $data);
            $this->load->view('include/footer_viewf');
        }
    }

//========================================================================================//
    public function funcionarios_arquivados(){
         $this->verificarSessao();
        
         $this->load->model("Usuario_model");
        $lista = $this->Usuario_model->BuscaFuncio();
        $dados = array("login" => $lista);
         $this->load->view('include/head_funcio_arq');
          $this->load->view('include/menu');
        $this->load->view('funcionario_arquivado',$dados); 
        $this->load->view('include/footer_funcio_arq');
    }
}
