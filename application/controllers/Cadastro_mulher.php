<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Mulher extends CI_Controller {

//verificação se o usuário existe e tem acesso 
    public function verificarSessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login');
        }
    }

//===================================================================================//
    public function Cadastro() {
        $this->verificarSessao();
        //pegando os dados das respectivas tabelas e exibindo no formulario de cadastro
        $dados['num_filhos'] = $this->input->post('n_filhos');

        $dados['cor'] = $this->db->get('cor')->result();
        $dados['situ_conjugal'] = $this->db->get('situacao_conjugal')->result();
        $dados['escola'] = $this->db->get('escolaridade')->result();
        $dados['religiao'] = $this->db->get('religiao')->result();
        $dados['orientacao_sexual'] = $this->db->get('orientacao_sexual')->result();
        $dados['renda_familiar'] = $this->db->get('renda_familiar')->result();
        $dados['profissao'] = $this->db->get('profissao')->result();
        $dados['soubecomo'] = $this->db->get('como_soube_do_servico')->result();
        $dados['espontanea'] = $this->db->get('instituicoes')->result();
        $dados['motivos'] = $this->db->get('motivo_procura')->result();
        $dados['cursos'] = $this->db->get('curso')->result();
        $dados['tdocumento'] = $this->db->get('tipo_documento')->result();
        $dados['busca'] = $this->db->get('busca_pelo_servico')->result();
        $dados['tipoviolencia'] = $this->db->get('tipo_violencia')->result();

        $this->load->view('include/head_cadastro');
        $this->load->view('include/menu');
        $this->load->view('cadastrar_mulher', $dados);
        $this->load->view('include/footer_cadastro');
    }

//========================================================================================//
    //metodo que receber os dados do formulario e manda para o banco de dados  
    public function cadastrar_mulher() {
        $this->verificarSessao();

        $this->load->model('Cadastro_mulher_model', 'Cadastro_model', TRUE);


        $status = 'Ativo';

        //tabela usuaria
        $usuaria_input_data = array();
        $endereco_input_data = array();
        $filhos_input_data = array();
        $estado_input_data = array();
        $cidade_input_data = array();
        $atendimento_input_data = array();
        $screening_input_data = array();
        $documento_input_data = array();

        $usuaria_input_data['status'] = $status;
        $usuaria_input_data['nome'] = $this->input->post('nome');
        $usuaria_input_data['data_nascimento'] = $this->input->post('data_nascimento');
        $usuaria_input_data['orgao_expedidor'] = $this->input->post('o_expe');
        $usuaria_input_data['cpf'] = $this->input->post('cpf');
        $usuaria_input_data['celular'] = $this->input->post('celular');
        $usuaria_input_data['telefone'] = $this->input->post('telefone');
        $usuaria_input_data['rg'] = $this->input->post('rg');
        $usuaria_input_data['sexo'] = $this->input->post('sexo');
        $usuaria_input_data['observacao'] = $this->input->post('observacao');
        $usuaria_input_data['historico_familiar'] = $this->input->post('h_familia');
        $usuaria_input_data['situacao_moradia'] = $this->input->post('s_moradia');
        $usuaria_input_data['motivo_procura_cod_motivo_procura'] = $this->input->post('motivo');
        date("Y-m-d", strtotime($usuaria_input_data['data_nascimento']));
        //===============================================================================================================//      
        //tabela como soube do serviço
        $usuaria_input_data['como_soube_do_servico_cod_como_soube_do_servico'] = $this->input->post('como');
//tabela cor
        $usuaria_input_data['cor_cod_cor'] = $this->input->post('cor');
        //===============================================================================================================//       
//tabela orientação sexual
        $usuaria_input_data['orientacao_sexual_cod_orientacao_sexual'] = $this->input->post('o_sexual');
//===============================================================================================================//        
//tabela escola
        $usuaria_input_data['escolaridade_cod_escolaridade'] = $this->input->post('escola');
        //===============================================================================================================//      
//tabela Situação conjugal
        $usuaria_input_data['situacao_conjugal_cod_situacao_conjugal'] = $this->input->post('situ_conjugal');
        //===============================================================================================================//       
        //tabela renda familiar
        $usuaria_input_data['renda_familiar_cod_renda_familiar'] = $this->input->post('renda');
//===============================================================================================================//        
//tabela profissao
        $usuaria_input_data['profissao_cod_profissao'] = $this->input->post('profi');
        //===============================================================================================================//
//tabela religião
        $usuaria_input_data['religiao_cod_religiao'] = $this->input->post('religiao');
        //===============================================================================================================//     
//tabela Endereço
        $endereco_input_data['residencial'] = $this->input->post('endereco');
        $endereco_input_data['bairro'] = $this->input->post('bairro');
        $endereco_input_data['zona'] = $this->input->post('zona');
        $endereco_input_data['cep'] = $this->input->post('cep');
        $endereco_input_data[' numero_imovel '] = $this->input->post('numero');
//===============================================================================================================//
        //tabela estado
        $estado_input_data['nome_estado'] = $this->input->post('estado');
//===============================================================================================================//        
//tebela cidade
        $cidade_input_data['nome_cidade'] = $this->input->post('cidade');
//===============================================================================================================//        
// filhos  

        $filhos_input_data['data_nascimento '] = $this->input->post('data_filho');
//===============================================================================================================//
//busca pelo serviço// atendimento mulher//usuaria//funcionario  	procedencia_do_caso 
        $atendimento_input_data['busca_pelo_servico_cod_busca_servico'] = $this->input->post('busca');
        $atendimento_input_data['disponibilidade'] = $this->input->post('dispo');
        $atendimento_input_data['qual_curso'] = $this->input->post('curso');
        $atendimento_input_data['instituicoes_cod_instituicoes'] = $this->input->post('institu');
        $atendimento_input_data['encaminhamentos'] = $this->input->post('encaminha');
        $atendimento_input_data['consideracoes_finais'] = $this->input->post('c_finais');
        $atendimento_input_data['metodologia_utilizada'] = $this->input->post('m_utlizada');
        $atendimento_input_data['situacao_apresentada'] = $this->input->post('situ_apre');
//==============================================================================================================// 
        //resposta
        $screening_input_data['resposta_psicologica'] = $this->input->post('vp');
        $screening_input_data['resposta_fisica'] = $this->input->post('vf');
        $screening_input_data['resposta_sexual'] = $this->input->post('vs');
        $screening_input_data['resposta_economica'] = $this->input->post('ve');
        $screening_input_data['resposta_moral'] = $this->input->post('vm');
        //agressor
        $screening_input_data['agresso_psico'] = $this->input->post('agressoP');
        $screening_input_data['agresso_fisico'] = $this->input->post('agressoF');
        $screening_input_data['agresso_sexual'] = $this->input->post('agressoS');
        $screening_input_data['agresso_econo'] = $this->input->post('agressoE');
        $screening_input_data['agresso_moral'] = $this->input->post('agressoM');
        //tipo da violencia
        $screening_input_data['violencia_psico'] = $this->input->post('psicolo');
        $screening_input_data['violencia_fisica'] = $this->input->post('vfisica');
        $screening_input_data['violencia_sexual'] = $this->input->post('vsexual');
        $screening_input_data['violencia_econo'] = $this->input->post('veconomi');
        $screening_input_data['violencia_moral'] = $this->input->post('vmoral');

        $screening_input_data['questionario'] = $this->input->post('NI');
//================================================================================================================//
//===================================================================================================================//

        
        //atendimento, atendimento user, tipo documento
        $tipoD['tipo_documento'] = $this->input->post('tdocs'); //ok
        $documento_input_data['endereco_fisico '] = $this->input->post('arquivo');  //ok
//===================================================================================================================//
//=======================================================================================================================// 
//checando o cadastro
        $cheking_insert = $this->Cadastro_model->cadastro_mulher_salvar($usuaria_input_data, $endereco_input_data, $filhos_input_data, $cidade_input_data, $estado_input_data, $atendimento_input_data, $documento_input_data, $tipoD, $screening_input_data);
        if ($cheking_insert) {
            $this->session->set_flashdata('sucess', 'Usuária Cadastrada com Sucesso!.');
            redirect('Cadastro_mulher/listar_usuarias');
        } else {
            $this->session->set_flashdata('error', 'Usuária Não Cadastrada!.');
            redirect('Cadastro_mulher/Cadastro');
        }
    }

//======================================================================================//
    public function listar_usuarias() {
        $this->verificarSessao();
        $this->load->model("Cadastro_mulher_model");
        // $dados['usuarias' ] = $this->Cadastro_mulher_model->BuscaUsuarias();
        $dados['mulheres'] = $this->Cadastro_mulher_model->listar_usuaria();

        $this->load->view('include/head_usuarias');
        $this->load->view('include/menu');
        $this->load->view('listar_mulher', $dados);
        $this->load->view('include/footer_lista_mulher');
    }

//===========================================================================================//
    public function arquivar_usuaria($id) {
        $this->verificarSessao();

        $status = 'Inativo';
        $data['status'] = $status;


        $this->load->model("Cadastro_mulher_model");

        if ($this->Cadastro_mulher_model->arquivar_cadastro($id, $data)) {
            $this->session->set_flashdata('sucess', 'Cadastro aquivado com Sucesso!.');

            $dados['mulheres'] = $this->Cadastro_mulher_model->listar_usuaria_arquivadas();


            $this->load->view('include/head_arquivada');
            $this->load->view('include/menu');
            $this->load->view("cadastros_arquivados", $dados);
            $this->load->view('include/footer_lista_aequivada');
        } else {
            $this->session->set_flashdata('error', ' Não foi possível arquivar cadastro!.');
            $this->load->view('include/head_arquivada');
            $this->load->view('include/menu');
            $this->load->view("cadastros_arquivados", $dados);
            $this->load->view('include/footer_lista_aequivada');
        }
    }

//===========================================================================================//
    public function ativar_cadastro($id) {
        $this->verificarSessao();

        $status = 'Ativo';
        $data['status'] = $status;


        $this->load->model("Cadastro_mulher_model");

        if ($this->Cadastro_mulher_model->enabled_cadastro($id, $data)) {
            $this->session->set_flashdata('sucess', 'Cadastro ativado com Sucesso!.');
            $dados['mulheres'] = $this->Cadastro_mulher_model->listar_usuaria();

            $this->load->view('include/head_usuarias');
            $this->load->view('include/menu');
            $this->load->view('listar_mulher', $dados);
            $this->load->view('include/footer_lista_mulher');
        } else {
            $this->session->set_flashdata('error', ' Não foi possível ativar o cadastro!.');
            $this->load->view('include/head_usuarias');
            $this->load->view('include/menu');
            $this->load->view('listar_mulher', $dados);
            $this->load->view('include/footer_lista_mulher');
        }
    }

//===============================================================================================

    public function editar_cadastro_mulher($id) {
        $this->verificarSessao();
        
       $this->load->model("Cadastro_mulher_model");

       $data['usuaria'] = $this->Cadastro_mulher_model->get_idMulher($id);
       
        $this->load->view('include/head_atualizar');
        $this->load->view('include/menu');
        $this->load->view('editar_cadastro_mulher', $data);
        $this->load->view('include/footer_atualizar');
    }

//====================================================================================================
 public function editar_save_mulher() {
        $this->verificarSessao();
        
      $this->load->model('Cadastro_mulher_model', 'Cadastro_model', TRUE);


          $id = $this->input->post('cod_usuaria');
         $idScreen =  $this->input->post('cod_screening');
          $iddoc   = $this->input->post('cod_atendimento');   
        //tabela usuaria
        $usuaria_input_data = array();
        $endereco_input_data = array();
        $filhos_input_data = array();
        $estado_input_data = array();
        $cidade_input_data = array();
        $atendimento_input_data = array();
        $screening_input_data = array();
        $documento_input_data = array();

      
        $usuaria_input_data['nome'] = $this->input->post('nome');
        $usuaria_input_data['data_nascimento'] = $this->input->post('data_nascimento');
        $usuaria_input_data['orgao_expedidor'] = $this->input->post('o_expe');
        $usuaria_input_data['cpf'] = $this->input->post('cpf');
        $usuaria_input_data['celular'] = $this->input->post('celular');
        $usuaria_input_data['telefone'] = $this->input->post('telefone');
        $usuaria_input_data['rg'] = $this->input->post('rg');
        $usuaria_input_data['sexo'] = $this->input->post('sexo');
        $usuaria_input_data['observacao'] = $this->input->post('observacao');
        $usuaria_input_data['historico_familiar'] = $this->input->post('h_familia');
        $usuaria_input_data['situacao_moradia'] = $this->input->post('s_moradia');
        $usuaria_input_data['motivo_procura_cod_motivo_procura'] = $this->input->post('motivo');
        date("Y-m-d", strtotime($usuaria_input_data['data_nascimento']));
        //===============================================================================================================//      
        //tabela como soube do serviço
        $usuaria_input_data['como_soube_do_servico_cod_como_soube_do_servico'] = $this->input->post('como');
//tabela cor
        $usuaria_input_data['cor_cod_cor'] = $this->input->post('cor');
        //===============================================================================================================//       
//tabela orientação sexual
        $usuaria_input_data['orientacao_sexual_cod_orientacao_sexual'] = $this->input->post('o_sexual');
//===============================================================================================================//        
//tabela escola
        $usuaria_input_data['escolaridade_cod_escolaridade'] = $this->input->post('escola');
        //===============================================================================================================//      
//tabela Situação conjugal
        $usuaria_input_data['situacao_conjugal_cod_situacao_conjugal'] = $this->input->post('situ_conjugal');
        //===============================================================================================================//       
        //tabela renda familiar
        $usuaria_input_data['renda_familiar_cod_renda_familiar'] = $this->input->post('renda');
//===============================================================================================================//        
//tabela profissao
        $usuaria_input_data['profissao_cod_profissao'] = $this->input->post('profi');
        //===============================================================================================================//
//tabela religião
        $usuaria_input_data['religiao_cod_religiao'] = $this->input->post('religiao');
        //===============================================================================================================//     
//tabela Endereço
        $endereco_input_data['residencial'] = $this->input->post('endereco');
        $endereco_input_data['bairro'] = $this->input->post('bairro');
        $endereco_input_data['zona'] = $this->input->post('zona');
        $endereco_input_data['cep'] = $this->input->post('cep');
        $endereco_input_data[' numero_imovel '] = $this->input->post('numero');
//===============================================================================================================//
        //tabela estado
        $estado_input_data['nome_estado'] = $this->input->post('estado');
//===============================================================================================================//        
//tebela cidade
        $cidade_input_data['nome_cidade'] = $this->input->post('cidade');
//===============================================================================================================//        
// filhos  

        $filhos_input_data['data_nascimento '] = $this->input->post('data_filho');
//===============================================================================================================//
//busca pelo serviço// atendimento mulher//usuaria//funcionario  	procedencia_do_caso 
        $atendimento_input_data['busca_pelo_servico_cod_busca_servico'] = $this->input->post('busca');
        $atendimento_input_data['disponibilidade'] = $this->input->post('dispo');
        $atendimento_input_data['qual_curso'] = $this->input->post('curso');
        $atendimento_input_data['instituicoes_cod_instituicoes'] = $this->input->post('institu');
        $atendimento_input_data['encaminhamentos'] = $this->input->post('encaminha');
        $atendimento_input_data['consideracoes_finais'] = $this->input->post('c_finais');
        $atendimento_input_data['metodologia_utilizada'] = $this->input->post('m_utlizada');
        $atendimento_input_data['situacao_apresentada'] = $this->input->post('situ_apre');
//==============================================================================================================// 
        //resposta
        $screening_input_data['resposta_psicologica'] = $this->input->post('vp');
        $screening_input_data['resposta_fisica'] = $this->input->post('vf');
        $screening_input_data['resposta_sexual'] = $this->input->post('vs');
        $screening_input_data['resposta_economica'] = $this->input->post('ve');
        $screening_input_data['resposta_moral'] = $this->input->post('vm');
        //agressor
        $screening_input_data['agresso_psico'] = $this->input->post('agressoP');
        $screening_input_data['agresso_fisico'] = $this->input->post('agressoF');
        $screening_input_data['agresso_sexual'] = $this->input->post('agressoS');
        $screening_input_data['agresso_econo'] = $this->input->post('agressoE');
        $screening_input_data['agresso_moral'] = $this->input->post('agressoM');
        //tipo da violencia
        $screening_input_data['violencia_psico'] = $this->input->post('psicolo');
        $screening_input_data['violencia_fisica'] = $this->input->post('vfisica');
        $screening_input_data['violencia_sexual'] = $this->input->post('vsexual');
        $screening_input_data['violencia_econo'] = $this->input->post('veconomi');
        $screening_input_data['violencia_moral'] = $this->input->post('vmoral');

        $screening_input_data['questionario'] = $this->input->post('NI');
//================================================================================================================//
//===================================================================================================================//

        
        //atendimento, atendimento user, tipo documento
        $tipoD['tipo_documento'] = $this->input->post('tdocs'); //ok
        $documento_input_data['endereco_fisico '] =  $this->input->post('arquivo');  //ok
//===================================================================================================================//
//=======================================================================================================================// 
//checando o cadastro
        $cheking_insert = $this->Cadastro_model->cadastro_mulher_atualizar( $iddoc,$idScreen,$id,$usuaria_input_data, $endereco_input_data, $filhos_input_data, $cidade_input_data, $estado_input_data, $atendimento_input_data, $documento_input_data, $tipoD, $screening_input_data);
        if (!$cheking_insert) {
            
               $this->session->set_flashdata('sucess', 'Cadastro Atualizado com Sucesso!.');
            redirect('Cadastro_mulher/listar_usuarias');
        
            
        } else {
              $this->session->set_flashdata('error', 'Cadastro Não Atualizado!.');
            redirect('Cadastro_mulher/listar_usuarias');
        }
    }

    

//====================================================================================================
    public function vizualizar_cadastro($id) {

        $this->verificarSessao();

        $this->load->model("Cadastro_mulher_model");

        $data['usuarias'] = $this->Cadastro_mulher_model->BuscaUsuarias($id);

        $this->load->view('include/head_cadastro');
        $this->load->view('include/menu');
        $this->load->view('vizualizar_usuaria', $data);
        $this->load->view('include/footer_cadastro');
    }

    //========================================================================================================//

    public function selecionar_usuaria() {
        $this->verificarSessao();

        $d1 = $this->input->post('dataini');
        $d2 = $this->input->post('datafim');

        $this->load->model("Cadastro_mulher_model");
        $data['usuarias'] = $this->Cadastro_mulher_model->get_usuaria_curso($d1, $d2);

        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        $this->load->view("selecionar_usuaria", $data);
        $this->load->view('include/footer_lista');
    }

    //====================================================================================================================//
    public function filtrar_user() {

        $this->load->view('include/head_lista');
        $this->load->view('include/menu');
        $this->load->view("filtra_usuaria");
        $this->load->view('include/footer_lista');
    }

    //======================================================================================================================//  

    public function pesquisar_usuaria() {

        $this->verificarSessao();

        $termo = $this->input->post('namecp');


        $this->load->model("Cadastro_mulher_model");

        $data['mulheres'] = $this->Cadastro_mulher_model->seacher($termo);

        if ($data['mulheres']) {
            $this->load->view('include/head_viewf');
            $this->load->view('include/menu');
            $this->load->view('view_pesquisaf', $data);
            $this->load->view('include/footer_viewf');
        } else {

            $this->session->set_flashdata('error', 'Usuária não encontrada!.');

            $this->load->view('include/head_viewf');
            $this->load->view('include/menu');
            $this->load->view('view_pesquisaf', $data);
            $this->load->view('include/footer_viewf');
        }
    }

//=========================================================================================================//
    public function usuarias_arquivadas() {

        $this->verificarSessao();
        $this->load->model("Cadastro_mulher_model");

        $dados['mulheres'] = $this->Cadastro_mulher_model->listar_usuaria_arquivadas();


        $this->load->view('include/head_arquivada');
        $this->load->view('include/menu');
        $this->load->view("cadastros_arquivados", $dados);
        $this->load->view('include/footer_lista_aequivada');
    }

    public function test(){
        $this->load->view('include/head_lista');
       $this->load->view('include/menu');
        $this->load->view("test");
      $this->load->view('include/footer_lista');
        
    }
    
    
}
