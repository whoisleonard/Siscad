<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_mulher_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//==============================================================================//
    public function BuscaUsuarias($id) {

        // $this->db->where('slug', $slug);
        // $this->db->select("productos.slug");
        // $this->db->from('productos');


        $this->db->select('*');
        $this->db->where('cod_usuaria', $id);
        $this->db->from('usuaria As user');



        $this->db->join('profissao as p', 'user.profissao_cod_profissao = p.cod_profissao', 'inner');
        $this->db->join('religiao as r', ' user.religiao_cod_religiao = r.cod_religiao', 'inner');
        $this->db->join('escolaridade as e', 'user.escolaridade_cod_escolaridade = e.cod_escolaridade', 'inner');
        $this->db->join('orientacao_sexual as o', 'user.orientacao_sexual_cod_orientacao_sexual = o.cod_orientacao_sexual', 'inner');
        $this->db->join('motivo_procura as m', ' user.motivo_procura_cod_motivo_procura = m.cod_motivo_procura', 'inner');
        $this->db->join('cor as c', 'user.cor_cod_cor = c.cod_cor', 'inner');
        $this->db->join('situacao_conjugal as s', 'user.situacao_conjugal_cod_situacao_conjugal = s.cod_situacao_conjugal', 'inner');
        $this->db->join('renda_familiar as ren', 'user.renda_familiar_cod_renda_familiar = ren.cod_renda_familiar', 'inner');
        $this->db->join('como_soube_do_servico as com', 'user.como_soube_do_servico_cod_como_soube_do_servico = com.cod_como_soube_do_servico', 'left');

        $this->db->join('atendimento_mulher as at', 'at.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('busca_pelo_servico as bps', 'at.busca_pelo_servico_cod_busca_servico = bps.cod_busca_servico', 'left');
        $this->db->join('screening as scr', 'at.screening_cod_screening = scr.cod_screening', 'left');
         $this->db->join('tipo_violencia as tip', 'scr.tipo_violencia_cod_tipo_violencia = tip.cod_tipo_violencia', 'left');
        $this->db->join('instituicoes as ins', 'at.instituicoes_cod_instituicoes = ins.cod_instituicoes', 'left');
        $this->db->join('endereco as end', 'end.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('cidade as cid', 'end.cidade_cod_cidade= cid.cod_cidade', 'left');
        $this->db->join('estado as est', 'cid.estado_cod_estado= est.cod_estado', 'left');
        
        $dados = $this->db->get()->result_array();

        return $dados;
    }

//===================================================================================================//
    public function listar_usuaria() {

      //  $status = 
     
        $this->db->where('status', 'Ativo');
        $this->db->from('usuaria');
        
       $data = $this->db->get()->result_array();

        return  $data ;
    }
//=======================================================================================================//
  public function listar_usuaria_arquivadas() {

      //  $status = 
     
        $this->db->where('status', 'Inativo');
        $this->db->from('usuaria');
        
       $data = $this->db->get()->result_array();

        return  $data ;
    }
//=============================================================================//
    public function arquivar_cadastro($id, $data) {
        $this->db->where('cod_usuaria', $id);
       $dado = $this->db->update('usuaria', $data);
        return $dado;
    }

//=============================================================================//

    public function enabled_cadastro($id, $data) {
        $this->db->where('cod_usuaria', $id);
       $dado = $this->db->update('usuaria', $data);
        return $dado;
    }

//=============================================================================//
    public function cadastro_mulher_salvar($usuaria, $endereco, $filhos, $cidade, $estado, $atendimento, $documento, $tipoD, $screening) {
        //inserindo na tabela usuaria
             $d1 = $usuaria['data_nascimento'];
          $dado = date("Y-m-d", strtotime($d1));
        
           $dataNascimento = $dado;
           $date = new DateTime($dataNascimento );
           $interval = $date->diff( new DateTime( date('Y-m-d') ) );
           $usuaria['idade']  =  $interval->format( '%Y' );
        
          
        $this->db->insert('usuaria', $usuaria);
        $usuaria_id = $this->db->insert_id();
//==============================================================================================================================//
        //inserindo na tabela filhos
        $filhos['usuaria_cod_usuaria'] = $usuaria_id;
        $this->db->insert('filhos', $filhos);
//================================================================================================//
        //inserindo na tebela estado
        $this->db->insert('estado', $estado);
        $estado_id = $this->db->insert_id();
//=================================================================================================//        
        //inserindo na tebela cidade
        $cidade['estado_cod_estado '] = $estado_id;
        $this->db->insert('cidade', $cidade);
        $cidade_id = $this->db->insert_id();
//===================================================================================================//        
        //inserindo na tabela endereco
        $endereco['usuaria_cod_usuaria'] = $usuaria_id;
        $endereco['cidade_cod_cidade '] = $cidade_id;
        $this->db->insert('endereco', $endereco);
        //======================================================================================================//
        //tabela screening
        $this->db->insert('screening', $screening);
        $screening_id = $this->db->insert_id();

//=====================================================================================================//
        //tabela atendimento
        $atendimento['login_cod_as_usuaria'] = $_SESSION['cod_login'];
        $atendimento['usuario_created'] = $_SESSION['nome'];
        $atendimento['usuaria_cod_usuaria'] = $usuaria_id;
        $atendimento['screening_cod_screening'] = $screening_id;
        $this->db->insert('atendimento_mulher', $atendimento);
        $atendimento_id = $this->db->insert_id();
//======================================================================================================//  
        $documento['atendimento_mulher_cod_atendimento'] = $atendimento_id;
        $documento['tipo_documento_cod_tipo_documento'] = $tipoD['tipo_documento'];
        $this->db->insert('documentos', $documento);




        return $insert_id = $this->db->insert_id();
    }

//=================================================================================//
    public function get_usuaria_id($id) {
        $this->db->where('cod_usuaria', $id);
        return $this->db->get('usuaria')->result();
    }

    //=================================================================================//
    public function get_prifissao_id($id) {
        $this->db->where('cod_usuaria', $id);
        return $this->db->get('usuaria')->result();
    }

    //============================================================================//  
    public function atualizar_cadastro($id, $data) {
        $this->db->where('cod_usuaria', $id);
        return $this->db->update('usuaria', $data);
    }

//===================================================================================//

    public function count_juridico($d1, $d2) {
## motivo da procura na casa = juridico ##
           date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 3);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//==========================================================================================//
    public function count_psicologico($d1, $d2) {
## motivo da procura na casa = psicologico ##
           date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 2);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================//   
    public function count_social($d1, $d2) {
## motivo da procura na casa = social ##
          date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 1);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================//    

    public function count_curso($d1, $d2) {
## motivo da procura na casa = social ##
          date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 4);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=========================================================================================================//    
    public function get_usuaria_curso($d1, $d2) {
## motivo da procura na casa = social ##

        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('motivo_procura_cod_motivo_procura', 4);
        $this->db->from('usuaria as user');
        
        $this->db->join('motivo_procura', 'motivo_procura_cod_motivo_procura = cod_motivo_procura', 'left');
        $this->db->join('atendimento_mulher as at', 'at.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        
        $dados = $this->db->get()->result_array();
        return $dados;
    }

    public function buscandoMulher($termo) {

        $this->db->select('*');
        $this->db->from('usuaria as user ');
        $this->db->where('nome', $termo);
        $this->db->or_where('cpf', $termo);
        // $this->db->limit(20, 20);
        //usuaria foreigh key
           $this->db->join('profissao as p', 'user.profissao_cod_profissao = p.cod_profissao', 'inner');
        $this->db->join('religiao as r', ' user.religiao_cod_religiao = r.cod_religiao', 'inner');
        $this->db->join('escolaridade as e', 'user.escolaridade_cod_escolaridade = e.cod_escolaridade', 'inner');
        $this->db->join('orientacao_sexual as o', 'user.orientacao_sexual_cod_orientacao_sexual = o.cod_orientacao_sexual', 'inner');
        $this->db->join('motivo_procura as m', ' user.motivo_procura_cod_motivo_procura = m.cod_motivo_procura', 'inner');
        $this->db->join('cor as c', 'user.cor_cod_cor = c.cod_cor', 'inner');
        $this->db->join('situacao_conjugal as s', 'user.situacao_conjugal_cod_situacao_conjugal = s.cod_situacao_conjugal', 'inner');
        $this->db->join('renda_familiar as ren', 'user.renda_familiar_cod_renda_familiar = ren.cod_renda_familiar', 'inner');
        $this->db->join('como_soube_do_servico as com', 'user.como_soube_do_servico_cod_como_soube_do_servico = com.cod_como_soube_do_servico', 'left');

        $this->db->join('atendimento_mulher as at', 'at.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('busca_pelo_servico as bps', 'at.busca_pelo_servico_cod_busca_servico = bps.cod_busca_servico', 'left');
        $this->db->join('screening as scr', 'at.screening_cod_screening = scr.cod_screening', 'left');
         $this->db->join('tipo_violencia as tip', 'scr.tipo_violencia_cod_tipo_violencia = tip.cod_tipo_violencia', 'left');
        $this->db->join('instituicoes as ins', 'at.instituicoes_cod_instituicoes = ins.cod_instituicoes', 'left');
        $this->db->join('endereco as end', 'end.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('cidade as cid', 'end.cidade_cod_cidade= cid.cod_cidade', 'left');
        $this->db->join('estado as est', 'cid.estado_cod_estado= est.cod_estado', 'left');

        $dados = $this->db->get()->result_array();

        return $dados;
    }
//========================================================================================================================================================================//

    
    public function seacher($termo){
        
           $this->db->select('*');
        $this->db->from('usuaria as user ');
        $this->db->where('nome', $termo);
        $this->db->or_where('cpf', $termo);
        // $this->db->limit(20, 20);
        //usuaria foreigh key
           $this->db->join('profissao as p', 'user.profissao_cod_profissao = p.cod_profissao', 'inner');
        $this->db->join('religiao as r', ' user.religiao_cod_religiao = r.cod_religiao', 'inner');
        $this->db->join('escolaridade as e', 'user.escolaridade_cod_escolaridade = e.cod_escolaridade', 'inner');
        $this->db->join('orientacao_sexual as o', 'user.orientacao_sexual_cod_orientacao_sexual = o.cod_orientacao_sexual', 'inner');
        $this->db->join('motivo_procura as m', ' user.motivo_procura_cod_motivo_procura = m.cod_motivo_procura', 'inner');
        $this->db->join('cor as c', 'user.cor_cod_cor = c.cod_cor', 'inner');
        $this->db->join('situacao_conjugal as s', 'user.situacao_conjugal_cod_situacao_conjugal = s.cod_situacao_conjugal', 'inner');
        $this->db->join('renda_familiar as ren', 'user.renda_familiar_cod_renda_familiar = ren.cod_renda_familiar', 'inner');
        $this->db->join('como_soube_do_servico as com', 'user.como_soube_do_servico_cod_como_soube_do_servico = com.cod_como_soube_do_servico', 'left');

        $this->db->join('atendimento_mulher as at', 'at.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('busca_pelo_servico as bps', 'at.busca_pelo_servico_cod_busca_servico = bps.cod_busca_servico', 'left');
        $this->db->join('screening as scr', 'at.screening_cod_screening = scr.cod_screening', 'left');
         $this->db->join('tipo_violencia as tip', 'scr.tipo_violencia_cod_tipo_violencia = tip.cod_tipo_violencia', 'left');
        $this->db->join('instituicoes as ins', 'at.instituicoes_cod_instituicoes = ins.cod_instituicoes', 'left');
        $this->db->join('endereco as end', 'end.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('cidade as cid', 'end.cidade_cod_cidade= cid.cod_cidade', 'left');
        $this->db->join('estado as est', 'cid.estado_cod_estado= est.cod_estado', 'left');

        $dados = $this->db->get()->result_array();

        return $dados;
        
    }
    
  //=====================================================================================================//
 
    public function count_idade18($d1, $d2) {
## motivo da procura na casa = social ##
        $this->db->select('idade');
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('idade <=', 18);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================//   
    
     public function count_idade25($d1,$d2) {
## motivo da procura na casa = social ##
        $this->db->select('idade');
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('idade >', 18);
         $this->db->where('idade <=', 25);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================//     
    
         public function count_idade26($d1, $d2) {
## motivo da procura na casa = social ##
        $this->db->select('idade');
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('idade >', 26);
         $this->db->where('idade <=', 40);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================// 
    
      
         public function count_idade40($d1, $d2) {
## motivo da procura na casa = social ##
        $this->db->select('idade');
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('idade >', 40);    
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================// 
    
    //===================================================================================//

    public function count_juridico2() {
## motivo da procura na casa = juridico ##
      
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 3);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//==========================================================================================//
    public function count_psicologico2() {
## motivo da procura na casa = psicologico ##
      
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 2);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================//   
    public function count_social2() {
## motivo da procura na casa = social ##
        
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 1);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //=============================================================================================//    

    public function count_curso2() {
## motivo da procura na casa = social ##
       
        $this->db->select('motivo_procura_cod_motivo_procura');
        $this->db->where('motivo_procura_cod_motivo_procura', 4);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=========================================================================================================//  
    
        public function get_idMulher($id) {

        $this->db->select('*');
        $this->db->from('usuaria as user ');
        $this->db->where('cod_usuaria', $id);
       
        // $this->db->limit(20, 20);
        //usuaria foreigh key
           $this->db->join('profissao as p', 'user.profissao_cod_profissao = p.cod_profissao', 'inner');
        $this->db->join('religiao as r', ' user.religiao_cod_religiao = r.cod_religiao', 'inner');
        $this->db->join('escolaridade as e', 'user.escolaridade_cod_escolaridade = e.cod_escolaridade', 'inner');
        $this->db->join('orientacao_sexual as o', 'user.orientacao_sexual_cod_orientacao_sexual = o.cod_orientacao_sexual', 'inner');
        $this->db->join('motivo_procura as m', ' user.motivo_procura_cod_motivo_procura = m.cod_motivo_procura', 'inner');
        $this->db->join('cor as c', 'user.cor_cod_cor = c.cod_cor', 'inner');
        $this->db->join('situacao_conjugal as s', 'user.situacao_conjugal_cod_situacao_conjugal = s.cod_situacao_conjugal', 'inner');
        $this->db->join('renda_familiar as ren', 'user.renda_familiar_cod_renda_familiar = ren.cod_renda_familiar', 'inner');
        $this->db->join('como_soube_do_servico as com', 'user.como_soube_do_servico_cod_como_soube_do_servico = com.cod_como_soube_do_servico', 'left');

        $this->db->join('atendimento_mulher as at', 'at.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('busca_pelo_servico as bps', 'at.busca_pelo_servico_cod_busca_servico = bps.cod_busca_servico', 'left');
        $this->db->join('screening as scr', 'at.screening_cod_screening = scr.cod_screening', 'left');
         $this->db->join('tipo_violencia as tip', 'scr.tipo_violencia_cod_tipo_violencia = tip.cod_tipo_violencia', 'left');
        $this->db->join('instituicoes as ins', 'at.instituicoes_cod_instituicoes = ins.cod_instituicoes', 'left');
        $this->db->join('endereco as end', 'end.usuaria_cod_usuaria = user.cod_usuaria', 'left');
        $this->db->join('cidade as cid', 'end.cidade_cod_cidade= cid.cod_cidade', 'left');
        $this->db->join('estado as est', 'cid.estado_cod_estado= est.cod_estado', 'left');

        $dados = $this->db->get()->result_array();

        return $dados;
    }
  //=============================================================================//
    public function cadastro_mulher_atualizar( $iddoc,$idScreen,$id,$usuaria, $endereco, $filhos, $cidade, $estado, $atendimento, $documento, $tipoD, $screening) {
        //inserindo na tabela usuaria
             $d1 = $usuaria['data_nascimento'];
             $dado = date("Y-m-d", strtotime($d1));
        
           $dataNascimento = $dado;
           $date = new DateTime($dataNascimento );
           $interval = $date->diff( new DateTime( date('Y-m-d') ) );
           $usuaria['idade']  =  $interval->format( '%Y' );
        
          $this->db->where('cod_usuaria', $id);
          
           $this->db->update('usuaria', $usuaria);
 
//==============================================================================================================================//
        //inserindo na tabela filhos
        $this->db->where('usuaria_cod_usuaria', $id);      
        $this->db->update('filhos', $filhos);
//================================================================================================//
        //inserindo na tebela estado
        $this->db->update('estado', $estado);
        $estado_id = $this->db->insert_id();
//=================================================================================================//        
        //inserindo na tebela cidade
        $idCid = $cidade['estado_cod_estado'];
          $this->db->where('cod_cidade', $idCid);   
        $this->db->update('cidade', $cidade);
      
//===================================================================================================//        
        //inserindo na tabela endereco
         $this->db->where('usuaria_cod_usuaria', $id);          
        $this->db->update('endereco', $endereco);
        //======================================================================================================//
        //tabela screening
      
           $this->db->where('cod_screening', $idScreen);  
        $this->db->update('screening', $screening);
       

//=====================================================================================================//
        //tabela atendimento
        $this->db->where('usuaria_cod_usuaria', $id);
        $atendimento['login_cod_as_usuaria'] = $_SESSION['cod_login'];
        $atendimento['usuario_created'] = $_SESSION['nome'];         
        $this->db->update('atendimento_mulher', $atendimento);
       
//======================================================================================================//  
       
        
       
         $this->db->where('atendimento_mulher_cod_atendimento', $iddoc);    
        $documento['tipo_documento_cod_tipo_documento'] = $tipoD['tipo_documento'];
        $this->db->update('documentos', $documento);




        return $update = $this->db->insert_id();
    }

    }  
    
    
    
    
