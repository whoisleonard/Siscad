<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_quanty extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

//=============================================================================================//
    public function relatorio_quantitativo() {
        $this->verificarSessao();

        $this->load->model("Cadastro_mulher_model");
        $data['usuaria'] = $this->Cadastro_mulher_model->idade();
        
        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        $this->load->view('test',$data);
        $this->load->view('include/footer_lista');
    }

//==================================================================================================//   
    public function filterQ(){
        
        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        $this->load->view( 'quanty_filter');
        $this->load->view('include/footer_lista');
        
    }
            










    //==========================================================================================//     

    public function relatorio_county() {
        $this->verificarSessao();

        $d1 = $this->input->post('dataini');
        $d2 = $this->input->post('datafim');
        
        $this->load->model("Cadastro_mulher_model");
        $this->load->model('Relatorio_quanty_model');

        $datas = array();
        //tabela cor
        $datas['parda'] = $this->Relatorio_quanty_model->count_cor_parda($d1, $d2);
        $datas['branca'] = $this->Relatorio_quanty_model->count_cor_branca($d1, $d2);
        $datas['preta'] = $this->Relatorio_quanty_model->count_cor_preta($d1, $d2);
        $datas['amarela'] = $this->Relatorio_quanty_model->count_cor_amarela($d1, $d2);
        $datas['NI'] = $this->Relatorio_quanty_model->count_cor_NI($d1, $d2);
        $datas['indigena'] = $this->Relatorio_quanty_model->count_cor_indigina($d1, $d2);
        //renda    
        $datas['rm1'] = $this->Relatorio_quanty_model->renda_menos1($d1, $d2);
        $datas['rda1'] = $this->Relatorio_quanty_model->renda_1($d1, $d2);
        $datas['rda1a2'] = $this->Relatorio_quanty_model->renda_1a2($d1, $d2);
        $datas['rda2a3'] = $this->Relatorio_quanty_model->renda_2a3($d1, $d2);
        $datas['rda3a4'] = $this->Relatorio_quanty_model->renda_3a4($d1, $d2);
        $datas['rda4'] = $this->Relatorio_quanty_model->renda_mais4($d1, $d2);
        $datas['rdasem'] = $this->Relatorio_quanty_model->renda_sem($d1, $d2);
        //religiao
        $datas['catolica'] = $this->Relatorio_quanty_model->religiao_catolica($d1, $d2);
        $datas['evangel'] = $this->Relatorio_quanty_model->religiao_evangelica($d1, $d2);
        $datas['espirita'] = $this->Relatorio_quanty_model->religiao_espirita($d1, $d2);
        $datas['daimista'] = $this->Relatorio_quanty_model->religiao_daimista($d1, $d2);
        $datas['matriz'] = $this->Relatorio_quanty_model->religiao_matriz($d1, $d2);
        $datas['sem'] = $this->Relatorio_quanty_model->religiao_sem($d1, $d2);
        $datas['outras'] = $this->Relatorio_quanty_model->religiao_outra($d1, $d2);
        //escolaridade
        $datas['anafal'] = $this->Relatorio_quanty_model->escol_nalfb($d1, $d2);
        $datas['1a4'] = $this->Relatorio_quanty_model->escol_1a4($d1, $d2);
        $datas['5a8'] = $this->Relatorio_quanty_model->escol_5a8($d1, $d2);
        $datas['fundi'] = $this->Relatorio_quanty_model->escol_fincom($d1, $d2);
        $datas['fundc'] = $this->Relatorio_quanty_model->escol_fcomp($d1, $d2);
        $datas['medin'] = $this->Relatorio_quanty_model->escol_medinc($d1, $d2);
        $datas['medic'] = $this->Relatorio_quanty_model->escol_medicom($d1, $d2);
        $datas['supin'] = $this->Relatorio_quanty_model->escol_supeinc($d1, $d2);
        $datas['supic'] = $this->Relatorio_quanty_model->escol_supecomp($d1, $d2);
        $datas['ni'] = $this->Relatorio_quanty_model->escol_NI($d1, $d2);
        //tipos violencia
        $datas['psico'] = $this->Relatorio_quanty_model->violencia_psic();
        $datas['fisica'] = $this->Relatorio_quanty_model->violencia_fisc();
        $datas['sexual'] = $this->Relatorio_quanty_model->violencia_sexual();
        $datas['econo'] = $this->Relatorio_quanty_model->violencia_econo();
        $datas['moral'] = $this->Relatorio_quanty_model->violencia_moral();

        $datas['juridico'] = $this->Cadastro_mulher_model->count_juridico($d1, $d2);
        $datas['psicologico'] = $this->Cadastro_mulher_model->count_psicologico($d1, $d2);
        $datas['social'] = $this->Cadastro_mulher_model->count_social($d1, $d2);
        $datas['curso'] = $this->Cadastro_mulher_model->count_curso($d1, $d2);

        //idades
        $datas['menor18'] = $this->Cadastro_mulher_model->count_idade18($d1, $d2);
         $datas['maior18'] = $this->Cadastro_mulher_model->count_idade25($d1, $d2);
        $datas['maior26'] = $this->Cadastro_mulher_model->count_idade26($d1, $d2);
        $datas['maior40'] = $this->Cadastro_mulher_model->count_idade40($d1, $d2);
        
        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        $this->load->view('test', $datas);
        $this->load->view('include/footer_lista');
    }

}
