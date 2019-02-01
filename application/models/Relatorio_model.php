<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    } 





public function getUsuarias($termo) {
        
     
       // $data['mulher'] = $this->db->get('usuaria')->result();
        
        	
         $this->db->select('*');
        $this->db->or_where('nome', $termo);
         $this->db->where('cpf', $termo);
         $this->db->from('usuaria ', 'atendimento_mulher', 'endereco');
    
       
        
     
        
        $this->db->join('profissao', 'profissao_cod_profissao =cod_profissao', 'inner');
        $this->db->join('religiao', 'religiao_cod_religiao =cod_religiao', 'inner');
        $this->db->join('escolaridade', 'escolaridade_cod_escolaridade =cod_escolaridade', 'inner');
        $this->db->join('orientacao_sexual', 'orientacao_sexual_cod_orientacao_sexual =cod_orientacao_sexual', 'inner');
        $this->db->join('motivo_procura', 'motivo_procura_cod_motivo_procura =cod_motivo_procura', 'inner');
        $this->db->join('cor', 'cor_cod_cor =cod_cor', 'inner');
        $this->db->join('situacao_conjugal', 'situacao_conjugal_cod_situacao_conjugal = cod_situacao_conjugal', 'inner');
        $this->db->join('renda_familiar', 'renda_familiar_cod_renda_familiar =cod_renda_familiar', 'inner');
        $this->db->join('como_soube_do_servico', 'como_soube_do_servico_cod_como_soube_do_servico = cod_como_soube_do_servico', 'left');
        //atentimendo forei..key
      
        //endereco
     //   $this->db->join('cidade', 'cidade_cod_cidade = cod_cidade', 'left');
       
        //cidade    
     

        $dados = $this->db->get()->result_array();
        return $dados;
    }
    
    public function gerar_pdf_relatorio($id)
            {
        
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
}