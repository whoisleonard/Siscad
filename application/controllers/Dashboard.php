<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

    public function Tela() {
        $this->verificarSessao();

        $contagem['usuarias'] = $this->db->get('usuaria')->result();

        $usuarias['contando'] = count($contagem['usuarias']);
//=============================================================================
        $this->load->model("Cadastro_mulher_model");
        $usuarias['juridico'] = $this->Cadastro_mulher_model->count_juridico2();
        $usuarias['psicologico'] = $this->Cadastro_mulher_model->count_psicologico2();
        $usuarias['social'] = $this->Cadastro_mulher_model->count_social2();
        $usuarias['curso'] = $this->Cadastro_mulher_model->count_curso2();
        $this->load->view('include/head_tela');
        $this->load->view('include/menu');
        $this->load->view('dashboard', $usuarias);
        $this->load->view('include/footer');
    }

    
    
    public function testefilho(){
        
        $n['num_filhos'] = $this->input->post('n_filhos');
        
        $this->load->view('include/head_tela');
        $this->load->view('include/menu');
        $this->load->view('include2/filhos', $n);
        $this->load->view('include/footer');
        
    }
    
    
    
}
