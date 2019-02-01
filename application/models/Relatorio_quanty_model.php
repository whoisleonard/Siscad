<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorio_quanty_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//===============================================================================//
    public function count_cor_parda($d1, $d2) {
//cor
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);     
        $this->db->where('cor_cod_cor', 3);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //===============================================================================//
    public function count_cor_branca($d1, $d2) {
//cor
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
      
        $this->db->where('cor_cod_cor', 1);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//===============================================================================//
    public function count_cor_preta($d1, $d2) {
//cor
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
       
        $this->db->where('cor_cod_cor', 2);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //===============================================================================//
    public function count_cor_indigina($d1, $d2) {
## cor ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
      
        $this->db->where('cor_cod_cor', 4);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //===============================================================================//
    public function count_cor_amarela($d1,$d2) {
##cor, amarela ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
  
        $this->db->where('cor_cod_cor', 5);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//===============================================================================//
    public function count_cor_NI($d1, $d2) {
## cor, não informada ##
     
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('cor_cod_cor', 6);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=================================================================================//

    public function escol_nalfb($d1, $d2) {
## escolaridade: não alfabetizada ##
     
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 1);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=================================================================================//

    public function escol_1a4($d1, $d2) {
## escolaridade: 1 a 4 s ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 2);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=====================================================================================//
    public function escol_5a8($d1, $d2) {
## escolaridade: 5 a 8 s ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 3);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=======================================================================================//
    public function escol_fincom($d1, $d2) {
## escolaridade: fundamental incompleto ##
      
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 4);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//==========================================================================================//
    public function escol_fcomp($d1, $d2) {
## escolaridade:fundamental completo ##
   
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 5);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//============================================================================================//
    public function escol_medinc($d1, $d2) {
## escolaridade: medio incompleto  ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 6);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//==============================================================================================//
    public function escol_medicom($d1, $d2) {
## escolaridade: medio completo  ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 7);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//====================================================================================================//
    public function escol_supeinc($d1, $d2) {
## escolaridade: superior incompleto ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 8);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=======================================================================================================//
    public function escol_supecomp($d1, $d2) {
## escolaridade: superior completo ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 9);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=========================================================================================================//
    public function escol_NI($d1, $d2) {
## escolaridade: 1 a 4 s ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('escolaridade_cod_escolaridade', 10);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//============================================================================================================//
    public function renda_menos1($d1, $d2) {
## renda: menos de 1  ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 1);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//================================================================================================//
    public function renda_1($d1, $d2) {
## renda: 1 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 2);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//==================================================================================================//
    public function renda_1a2($d1, $d2) {
## renda: 1 a 2 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 3);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=====================================================================================//
    public function renda_2a3($d1, $d2) {
## renda: 2 a 3 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 4);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//========================================================================================//
    public function renda_3a4($d1, $d2) {
## renda: 3 a 4 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 5);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=======================================================================================//
    public function renda_mais4($d1, $d2) {
## renda: mais de 4 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 6);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

//=====================================================================================//
    public function renda_sem($d1, $d2) {
## renda: sem renda  ##
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('renda_familiar_cod_renda_familiar', 7);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }

    //======================================================================================//
    //tipos de violencia
    public function violencia_psic() {
## renda: 1 salario ##
    
        $this->db->where('violencia_psico', 'Violência Psicologica');
        $q = $this->db->get('screening');
        $count = $q->result();
        return count($count);
    }

    //======================================================================================//
    //tipos de violencia
    public function violencia_fisc() {
## renda: 1 salario ##
   
        $this->db->where('violencia_fisica', 'Violência Física');
        $q = $this->db->get('screening');
        $count = $q->result();
        return count($count);
    }

    //======================================================================================//
    //tipos de violencia
    public function violencia_sexual() {
## renda: 1 salario ##
     

     
        $this->db->where('violencia_sexual', 'Violência Sexual');
        $q = $this->db->get('screening');
        $count = $q->result();
        return count($count);
    }

    //======================================================================================//
    //tipos de violencia
    public function violencia_econo() {
## renda: 1 salario ##
     

    
        $this->db->where('violencia_econo', 'Violência Econômica');
        $q = $this->db->get('screening');
        $count = $q->result();
        return count($count);
    }
   //======================================================================================//
    //tipos de violencia
    public function violencia_moral() {
## renda: 1 salario ##
      

     
        $this->db->where('violencia_moral', 'Violência Moral');
        $q = $this->db->get('screening');
        $count = $q->result();
        return count($count);
    }
   
       //======================================================================================//
    //religião
    public function religiao_catolica($d1, $d2) {
## renda: 1 salario ##
    
        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 1);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }
   
      
       //======================================================================================//
    //religião
    public function religiao_evangelica($d1, $d2) {
## renda: 1 salario ##
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 2);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    } 
    
     
       //======================================================================================//
    //religião
    public function religiao_espirita($d1, $d2) {
## renda: 1 salario ##
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 3);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }  
    
       
       //======================================================================================//
    //religião
    public function religiao_daimista($d1, $d2) {
## renda: 1 salario ##
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 4);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }
    
       
       //======================================================================================//
    //religião
    public function religiao_matriz($d1, $d2) {
## renda: 1 salario ##
         date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 5);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }
    
     
       //======================================================================================//
    //religião
    public function religiao_sem($d1, $d2) {
## renda: 1 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 6);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }  
          //======================================================================================//
    //religião
    public function religiao_outra($d1, $d2) {
## renda: 1 salario ##
        date("Y-m-d", strtotime($d1));
        date("Y-m-d", strtotime($d2));

        $this->db->where('data_cadastro >=', $d1);
        $this->db->where('data_cadastro <=', $d2);
        $this->db->where('religiao_cod_religiao', 7);
        $q = $this->db->get('usuaria');
        $count = $q->result();
        return count($count);
    }  
}
