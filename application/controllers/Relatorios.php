<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios extends CI_Controller {

    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

//=============================================================================================//
    public function relatorio_social() {
        $this->verificarSessao();

        $this->load->view('include/head_cadastro');
        $this->load->view('include/menu');
        $this->load->view('relatorio_social');
        $this->load->view('include/footer_cadastro');
    }

//==================================================================================================//     
    public function buscar_usuaria() {
        $this->verificarSessao();
        $this->load->model("Cadastro_mulher_model");
        $termo = $this->input->post('namecpf');

        $this->load->model("Relatorio_model");

        $data['mulher'] = $this->Cadastro_mulher_model->buscandoMulher($termo);


        if ($data) {
            $this->load->view('include/head_cadastro');
            $this->load->view('include/menu');
            $this->load->view('social_relatorio', $data);
            $this->load->view('include/footer_cadastro');
        } else {

            $this->session->set_flashdata('error', 'Usuária não encontrada!.');

            $this->load->view('include/head_viewf');
            $this->load->view('include/menu');
            $this->load->view('social_relatorio', $data);
            $this->load->view('include/footer_viewf');
        }
        //==========================================================================================//     
    }

    //===============================================================================================//   
    public function relatorio_informativo() {
        $this->verificarSessao();
        $this->load->model("Cadastro_mulher_model");
        $termo = $this->input->post('namecpf');

        $this->load->model("Relatorio_model");

        $data['mulher'] = $this->Cadastro_mulher_model->buscandoMulher($termo);


        if ($data) {
            $this->load->view('include/head_cadastro');
            $this->load->view('include/menu');
            $this->load->view('relatorio_informativo', $data);
            $this->load->view('include/footer_cadastro');
        } else {

            $this->session->set_flashdata('error', 'Usuária não encontrada!.');

            $this->load->view('include/head_viewf');
            $this->load->view('include/menu');
            $this->load->view('relatorio_informativo', $data);
            $this->load->view('include/footer_viewf');
        }
    }

    //=====================================================================================================//    

    public function Pdf_informativo($id) {

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'en-GB-x',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 6,
            'margin_footer' => 3,
        ]);

        $this->load->model("Relatorio_model");

        $data['mulher'] = $this->Relatorio_model->gerar_pdf_relatorio($id);

        $mpdf->setDisplayMode("fullpage");

       // $mpdf->WriteHTML("<h1><center>Relátorio Informativo</center></h1><hr>");
        
        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list
// LOAD a stylesheet
        $stylesheet = file_get_contents('assets/mpdfstyletables.css');
        $mpdf->WriteHTML($stylesheet, 1); // The parameter 1 tells that this is css/style only and no body/html/text

        $html = $this->load->view('informativo_pdf', $data, true);


        $mpdf->WriteHTML($html);


        $mpdf->Output();
        exit();
    }

//=======================================================================================//
    public function Pdf_social($id) {

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'en-GB-x',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 6,
            'margin_footer' => 3,
        ]);

        $this->load->model("Relatorio_model");

        $data['mulher'] = $this->Relatorio_model->gerar_pdf_relatorio($id);

        $mpdf->setDisplayMode("fullpage");

        //$mpdf->WriteHTML("<h1><center>Relátorio Social</center></h1><hr>");

        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list
// LOAD a stylesheet
        $stylesheet = file_get_contents('assets/mpdfstyletables.css');
        $mpdf->WriteHTML($stylesheet, 1); // The parameter 1 tells that this is css/style only and no body/html/text
        $html = $this->load->view('social_pdf', $data, true);


        $mpdf->WriteHTML($html);


        $mpdf->Output();
        exit();
    }

    //=====================================================================================//    
    public function pdf_quantitativo() {

        $d1 = $this->input->post('dataini');
        $d2 = $this->input->post('datafim');

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'en-GB-x',
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 6,
            'margin_footer' => 3,
        ]);

        $this->load->model("Cadastro_mulher_model");
        $this->load->model("Relatorio_quanty_model");


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
        $datas['psico'] = $this->Relatorio_quanty_model->violencia_psic($d1, $d2);
        $datas['fisica'] = $this->Relatorio_quanty_model->violencia_fisc($d1, $d2);
        $datas['sexual'] = $this->Relatorio_quanty_model->violencia_sexual($d1, $d2);
        $datas['econo'] = $this->Relatorio_quanty_model->violencia_econo($d1, $d2);
        $datas['moral'] = $this->Relatorio_quanty_model->violencia_moral($d1, $d2);

        $datas['juridico'] = $this->Cadastro_mulher_model->count_juridico($d1, $d2);
        $datas['psicologico'] = $this->Cadastro_mulher_model->count_psicologico($d1, $d2);
        $datas['social'] = $this->Cadastro_mulher_model->count_social($d1, $d2);
        $datas['curso'] = $this->Cadastro_mulher_model->count_curso($d1, $d2);

        //idades
        $datas['menor18'] = $this->Cadastro_mulher_model->count_idade18($d1, $d2);
        $datas['maior18'] = $this->Cadastro_mulher_model->count_idade25($d1, $d2);
        $datas['maior26'] = $this->Cadastro_mulher_model->count_idade26($d1, $d2);
        $datas['maior40'] = $this->Cadastro_mulher_model->count_idade40($d1, $d2);

        $mpdf->setDisplayMode("fullpage");


        // $mpdf->WriteHTML("<center><h1>Relátorio Quantitativo</h1></center><hr>");

        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list
// LOAD a stylesheet
        $stylesheet = file_get_contents('assets/mpdfstyletables.css');
        $mpdf->WriteHTML($stylesheet, 1); // The parameter 1 tells that this is css/style only and no body/html/text


        $html = $this->load->view('quantitativo_pdf', $datas, true);




        $mpdf->WriteHTML($html);


        $mpdf->Output();
        exit();
    }

}
