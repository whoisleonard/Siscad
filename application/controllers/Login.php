<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

    public function index() {

        $this->load->view('login');
    }

    public function autenticar() {

        $this->load->model("Usuario_model"); // chama o modelo usuarios_model
        $email = $this->input->post("email"); // pega via post o email que venho do formulario
        $senha = md5($this->input->post("senha")); // pega via post a senha que venho do formulario
        $usuario = $this->Usuario_model->buscaPorEmailSenha($email, $senha); // acessa a função buscaPorEmailSenha do modelo

        if ($usuario) {

            $dados['nome'] = $usuario [0]->nome;
            $dados['cod_as_usuaria'] = $usuario [0]->cod_as_usuaria;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);

            redirect('Dashboard/tela');
        } else {
            redirect('Login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }

}
